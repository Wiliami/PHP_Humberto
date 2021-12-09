<?php 


class Timer {

    private $Error;
	private $Result;


    public function getTimeSession() {
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = time();
        } else if (time() - $_SESSION['login'] > 0.0167) { // sessão iniciada há mais de 30 minutos
            session_regenerate_id(true); // muda o ID da sessão para o ID corrente e invalidar o ID antigo
            $_SESSION['login'] = time();  // atualiza o tempo de criação da sessão
        }
    }

    public function getError() {
        return $this->getError;
    }
 
    public function getResult() {
        return $this->getResult;
    }


}

    


?>