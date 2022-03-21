<?php 
class User {
	//métodos da classe:
	// - verifyLevelUserModerator -> verifica se o nível de usuário é diferente do nível moderador
	// - verifyDuplicateUserEmail -> verificar se o usuário digitou o email que já está em uso. 
	// - resetUserPassword -> alterar a senha do usuário
	// - getForgot -> envia o email de recuperação de senha ao usuário
	private $Error;
	private $Result;

	public function createLevelUser($createLevel) {
		if(empty($createLevel['name-level'])) {
			$this->Error = "Campo obrigatório!";
			$this->Result = false; 
		} elseif(empty($createLevel['level'])) {
			$this->Error = "Qual o número desse nível?";
			$this->Result = false;
		}
		$createLevel['level_user_create'] = $_SESSION['login']['user_name'];
		$createLevel['level_create_date'] = date('Y-m-d');
		$Create = new Create();
		$Create->ExeCreate('users_levels', $createLevel);
		if ($Create->getResult()) {
			$this->Result = $Create->getResult();
			$this->Error = "Nível de usuário cadastrado com sucesso!";
		} else {
			$this->Result = false;
			$this->Error = $Create->getError();
		}
	}

	public function updateLevelUser($updateLevelUser, $levelId) {
		if(empty($updateLevelUser['level_desc'])) {
			$this->Error = "Preencha o campo de nome de nível";
			$this->Result = false;
		} elseif(empty($updateLevelUser['level_id'])) {
			$this->Error = "Preencha a numeração do nível!";
			$this->Result = false;
		} else {
			$updateLevelUser['level_user_update'] = $_SESSION['login']['user_name'];
			$Update = new Update();
			$Update->ExeUpdate("users_levels", $updateLevelUser, "WHERE level_id = :li", "li={$levelId}");
			if($Update->getResult()) {
				$this->Result = false;
				$this->Error = "O nível foi atualizado com sucesso!";
			} else {
				$this->Result = $Update->getResult();
				$this->Error = $Update->getError();
			}
		}
	}

	public function deleteLevel($levelId) {
		$Delete = new Delete();
		$Delete->ExeDelete("users_levels", "WHERE level_id = :li", "li={$levelId}");
		if($Delete->getResult()) {
			$this->Result = $Delete->getError();
			$this->Error = "Nível excluído com sucesso!";
		} else {
			$this->Result = false;
			$this->Error = $Delete->getError();
		}
	}	


	public function verifyLevelUserModerator() {
		if($_SESSION['login']['user_level'] >= 6) { 
			header('Location: ' . BASE . '/painel/dashboard');
			die();
			return false;
		} 
	}
	
	public function searchCourse() {
		if(empty($course['aula_name'])) {
			$this->Error = "Pesquisa alguma coisa!";
			$this->Result = false;
		}
	}

	public function createUser($dataUser) {
	if(empty($dataUser["user_name"])) {
			$this->Error = "Preencha no campo um nome!";
			$this->Result = false;
		} elseif (empty($dataUser["user_email"])) {
			$this->Error = "Preencha o e-mail!";
			$this->Result = false;
		} elseif (empty($dataUser["user_password"])) {
			$this->Error = "Preencha a senha!";
			$this->Result = false;
		} elseif ($this->verifyDuplicateUserEmail($dataUser['user_email'])) {
			$this->Result = false;
		} else {
			$dataUser['user_password'] = md5($dataUser['user_password']);
			$dataUser['user_create_date'] = date('Y-m-d H:i:s');
			$dataUser['user_level'] = '1';
			//$dataUser['user_inativo'] = '0';
			$Create = new Create();
			$Create->ExeCreate("users", $dataUser); // cadastrando usuário no banco de dados
			if($Create->getResult()) { // resultado
				$this->Result = $Create->getResult();
				$this->Error =  "Cadastro realizado com sucesso!";
			} else {
				$this->Result = false;
				$this->Error = $Create->getError();
			}
		}	
	}

	public function createUserSystem($dataUserSystem) {
		if(empty($dataUserSystem["user_name"])) {
			$this->Error = "Preencha o nome do usuário!";
			$this->Result = false;
		} elseif (empty($dataUserSystem["user_email"])) {
			$this->Error = "Preencha o e-mail do usuário!";
			$this->Result = false;
		} elseif (empty($dataUserSystem["user_password"])) {
			$this->Error = "Preencha a senha!";
			$this->Result = false;
		} elseif(empty($dataUserSystem['user_level'])){
			$this->Error = "Escolha o nível do usuário";
			$this->Result = false;
		} elseif ($this->verifyDuplicateUserEmail($dataUserSystem['user_email'])) {
			$this->Result = false;
		} else {
			$dataUserSystem['user_create_resp'] = $_SESSION['login']['user_name'];
			$dataUserSystem['user_password'] = md5($dataUserSystem['user_password']);
			$dataUserSystem['user_create_date'] = date('Y-m-d H:i:s');
			$Create = new Create();
			$Create->ExeCreate("users", $dataUserSystem); // cadastrando usuário no banco de dados
			if($Create->getResult()) { // resultado
				$this->Result = $Create->getResult();
				$this->Error =  "Cadastro realizado com sucesso!";
			} else {
				$this->Result = false;
				$this->Error = $Create->getError();
			}
		}	
	}

	public function updateUser($updateUser, $userId) {
		//$_SESSION['login']['user_id'];
		if(empty($updateUser['user_name'])) {
			$this->Error = "Preencha com um nome!";
			$this->Result = false;
		} elseif(empty($updateUser['user_email'])) {
			$this->Error = "Preencha com um e-mail!";
			$this->Result = false;
		} else {
			if(!empty($updateUser['user_password'])) {
				$updateUser['user_password'] = md5($updateUser['user_password']);
			}
			$updateUser['user_update_resp'] = $_SESSION['login']['user_name'];
			$Update = new Update();
			$Update->ExeUpdate("users", $updateUser, "WHERE user_id = :id", "id={$userId}");
			if ($Update->getResult()) {
				$this->Result = $Update->getResult();
				$this->Error = "O usuário foi atualizado com sucesso!";
			} else {
				$this->Result = false;
				$this->Error = $Update->getError();
			}
		}
	}

	public function deleteUser($userId) {
		$Delete =  new Delete();
		$Delete->ExeDelete("users", "WHERE user_id = :ui", "ui={$userId}");
		if($Delete->getResult()) {
			$this->Result = $Delete->getError();
			$this->Error = "O usuário foi excluído com sucesso!";
		} else {
			$this->Result = false;
			$this->Error = $Delete->getError();
		}
	}
	
	
	
	private function verifyDuplicateUserEmail($email ) {
		$Read = new Read();
		$Read->FullRead("SELECT user_name FROM users WHERE user_email = :em", "em={$email}");

		if($Read->getResult()) { //get result (dados) é o resultado da busca no banco de dados
			$this->Error = "Este e-mail já está sendo utilizado por outro usuário!";
			// {$Read->getResult()[0]['user_name']}";	
			return true;
		} else {
			return false;
		}
	}
	public function verifyLogon() { 
        if(isset($_SESSION['usuario']) || isset($_SESSION['senha'])) {
        header("Location: " . BASE . "/pages/login");
        exit();
        }
    }
	public function exeLogin($email, $password) {
		if(empty($email)) {
			$this->Error = "O e-mail é obrigatório!";
			$this->Result = false;
		} elseif (empty($password)) {
			$this->Error = "A senha é obrigatória!";
			$this->Result = false;
		} else {
			$password = md5($password);
			$Read = new Read();
			$Read->FullRead("SELECT user_id, user_name, user_email, user_level FROM users WHERE user_email = :em AND user_password = :ps", "em={$email}&ps={$password}");

			if($Read->getResult()) {
				$_SESSION['login'] = $Read->getResult()[0];
				$this->Result = true;
				$this->Error = "Seja bem-vindo(a), {$Read->getResult()[0]['user_name']}";
			} else {
				$this->Error = "Usuário inexistente ou senha inválida!";
				$this->Result = false;
			}	
		} 
	}
	
	public function verifyExistLoginUser() {
		if($this->verifyLoginUserON()) {
			return true;
		} else {
			unset($_SESSION['login']);
			header("Location: " . BASE . "/pages/login");
			return false;
		}
	}

	public function verifyLoginUserON () {
		$Read = new Read();
		if(!empty($_SESSION['login'])) {
			$Read->FullRead("SELECT user_id FROM users WHERE user_id = :id", "id={$_SESSION['login']['user_id']}");
			if($Read->getResult()) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		};
	}
	
	public function logout() {
		session_start();
		session_destroy();
		header('Location: ' . BASE . '/pages/login');
		die();
	}

	//classe de alteração de senha do usuário
	public function resetUserPassword($resetPassword) {
		$this->verifyExistLoginUser();
		if(empty($resetPassword['user_password'])) {
			$this->Error = 'Digite a senha atual!';
			$this->Result = false;
		} elseif(empty($resetPassword['user_password'])) {
			$this->Error = "Digite a nova senha!";
			$this->Result = false;
		} elseif(empty($resetPassword['user_password'])) {
			$this->Error = "Confirme a nova senha!";
			$this->Result = false;
		} elseif($this->verifyExistUserPassword($resetPassword)) {
			$this->Error = 'A senha deve ser diferente!';
		} else {
			$this->Result = false;
			$this->Error = "";
		}
	}


	private function verifyExistUserPassword($pass) {
		$pass = $_SESSION['login']['user_password'];
		$Read = new Read();
		$pass = md5($pass);
		$Read->FullRead("SELECT user_password FROM users WHERE user_password = :pss", "pss={$pass}");
		if($Read->getResult()) {
			$this->Result = true;
		}
	}
	//Método para enviar email de recuperação de senha
	public function getForgotPasswordUser($password) {
		$Read = new Read();
		$Read->FullRead('SELECT user_password FROM users WHERE user_password = :pw', "pw={$password}");
		$password = md5($password);
		if($Read->getResult()) {
			$this->Error = "Não possível alterar a senha de acesso!";
			$this->Result = false;
			return true;
		} else {
			return false;
		}
	}

	public function getResult() {
		return $this->Result;
	}
	public function getError() {
		return $this->Error;
	}
}
?>