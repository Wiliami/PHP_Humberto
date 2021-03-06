<?php
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getBlockPageProfile();
echo $Component->getHeadHtmlDashboard();
echo $Component->getSideBarDashboard();
echo $Component->getLiAdministrativoDashboard();
echo $Component->getLiCoursesDashboard();
echo $Component->getLiPagesDashboard();
echo $Component->getMenuDashboard();
$Username = $_SESSION['login']['user_name'];
$UserEmail = $_SESSION['login']['user_email'];
$UserContact = '(92) 99164-5357';
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800">Meus dados</h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $Username ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $UserEmail ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contato</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $UserContact ?>">
                    </div>
                </div>
                <input type="submit" class="btn btn-success mb-2" name="update_user" value="Continuar">
            </form>
        </div>
    </div>
</div>
<?= $Component->getFooterDashboard(); ?>