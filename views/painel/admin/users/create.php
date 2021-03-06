<?php
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getBlockPageAdmin();
echo $Component->getHeadHtmlDashboard();
echo $Component->getHeadHtmlDataTable();
echo $Component->getSideBarDashboard();
echo $Component->getLiAdministrativoDashboard();
echo $Component->getLiCoursesDashboard();
echo $Component->getLiPagesDashboard();
echo $Component->getCreatePagesAdmin();
echo $Component->getListPagesAdmin();
echo $Component->getMenuDashboard();
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-start mb-3">
            <h1 class="h5 mb-0 text-gray-800">Cadastro de usuário</h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <?php
                $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                if(!empty($Post['create_user'])) {
                    $createUser['user_name'] = $Post['user'];
                    $createUser['user_email'] = $Post['email'];
                    $createUser['user_password'] = $Post['ps'];
                    $User = new User();
                    $User->createUserSystem($createUser);
                    if($User->getResult()) {
                        Error($User->getError());
                        header('Location: ' . BASE . '/painel/admin/users/list');
                        die();
                    } else { 
                        Error($User->getError(), 'danger');
                    }
                
                }
                ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="user" placeholder="Nome do usuário" 
                    value="<?= isset($Post['user'])? $Post['user']: '' ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="E-mail do usuário" 
                    value="<?= isset($Post['email'])? $Post['email']: '' ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="ps" placeholder="Senha do usuário" 
                    value="<?= isset($Post['ps'])? $Post['ps']: '' ?>">
                </div>
                <a href="<?= BASE ?>/painel/admin/users/list" class="btn btn-outline-success mb-2" title="Voltar para lista de usuários">Voltar</a>
                <input type="submit" class="btn btn-success mb-2" name="create_user" value="Cadastrar">
            </form>
        </div>
    </div>    
</div>
<?= $Component->getFooterDashboard();?>