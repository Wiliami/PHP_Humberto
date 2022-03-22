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
$levelId = $_GET['delete_level']; 
?>
<div class="container">
    <?php
    $Read = new Read();
    $Read->FullRead("SELECT * FROM users_levels WHERE level_id = :li", "li={$levelId}");
    if($Read->getResult()) {
        $DataLevel = $Read->getResult()[0];
    } else {
        Error('Nível de usuário não encontrado!', 'danger');
        ?>
        <a href="<?= BASE ?>/painel/admin/level-user/list" class="btn btn-outline-success" title="Voltar para a lista de níveis de usuários!">Voltar</a>
    <?php
        die();
    }

    $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(!empty($Post['delete_level'])) {
        $User = new User();
        $User->deleteLevel($levelId);
        if($User->getResult()) { 
            Error($User->getError());
        } else {
            Error($User->getError());
        }
    }
    ?>
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-start mb-4">
            <h1 class="h5 text-gray-800">Excluir <b><?= $DataLevel['level_desc'] ?></b></h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nível</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="level-name" placeholder="Nível de usuário"
                    value="<?= $DataLevel['level_desc']?>">
                </div>
                <a href="<?= BASE ?>/painel/admin/level-user/list" class="btn btn-outline-success mb-2" title="Voltar para lista de níveis">Voltar</a>
                <button type="button" class="btn btn-danger  mb-2" data-toggle="modal" data-target="#exampleModal">
                    Excluir
                </button>


                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Excluir <b><?= $DataLevel['level_desc']; ?></b>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem certeza que deseja excluir esse nível?
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-primary mb-2" type="button" data-dismiss="modal">
                                    Cancelar
                                </button>
                                <input type="submit" class="btn btn-danger mb-2" name="delete_level" value="Excluir">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
<?= $Component->getFooterDashboard(); ?>