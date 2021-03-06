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
$moduleId = filter_input(INPUT_GET, 'module', FILTER_VALIDATE_INT);
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <?php
            $Read = new Read();
            $Read->FullRead("SELECT * FROM modulos WHERE modulo_id = :mi", "mi={$moduleId}");
            if($Read->getResult()) {
                $DataModule = $Read->getResult()[0];
                    ?>
                <h6 class="m-0 text-dark" style="font-size: 15px;"> Desenvolvimento web /<b></b> <?= $DataModule['modulo_name'] ?> / MARKETING DIGITAL</h6>
            <?php
            } else  {
                die(Error("Módulo não encontrado!", 'danger'));
            }
            ?>
            <div class="d-flex flex-end">
                <a href="<?= BASE ?>/painel/admin/courses/lesson/create&module=<?= $DataModule['modulo_id'] ?>" class="btn btn-success rounded-pill" style="border-radius: 50%; font-size: 11px;">Cadastrar nova aula</a>
                <!-- <a href="<?= BASE ?>/painel/courses/lesson/comments/list" class="btn btn-success rounded-pill ml-2" style="border-radius: 50%; font-size: 11px;">Comentários das aulas</a> -->
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table_lista_cursos" class="cell-border compact stripe table-striped">
                    <thead>
                        <tr class="btn-sm" style="font-size: 10px">
                            <th><span>NOME DA AULA</span></th>
                            <th><span>URL DA AULA</span></th>
                            <th><span>CAD. POR</span></th>
                            <th><span>ATU. POR </span></th>
                            <th><span>OPÇÕES</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Read = new Read();
                        $Read->FullRead("SELECT a.*, uc.user_name as create_user, uu.user_name as update_user
                            FROM aulas a 
                            LEFT JOIN users uc ON uc.user_id = a.aula_create_user
                            LEFT JOIN users uu ON uu.user_id = a.aula_update_user
                            WHERE modulo_id = :mi", "mi={$moduleId}");
                        if($Read->getResult()) {
                            foreach($Read->getResult() as $DataLesson) {
                                ?>
                        <tr style="font-size: 10px">
                            <td>
                                <span><?= $DataLesson['aula_name'] ?></span>
                            </td>
                            <td>
                                <span><?= $DataLesson['aula_url'] ?></span>
                            </td>
                            <td>
                                <span><?= $DataLesson['create_user'] ?></span>
                            </td>
                            <td>
                                <span><?= $DataLesson['update_user'] ?></span>
                            </td>
                            <td>
                                <a href="<?= BASE ?>/painel/admin/courses/lesson/update&aula=<?= $DataLesson['aula_id'] ?>" class="btn-sm" title="Editar <?= $DataLesson['aula_name'] ?>"><i class="fa fa-edit"></i></a>
                                <a href="<?= BASE ?>/painel/admin/courses/lesson/delete&delete_aula=<?= $DataLesson['aula_id'] ?>" class="danger btn-sm" title="Excluir <?= $DataLesson['aula_name'] ?>" style="color: #e74a3b;"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        } 
                        ?>
                    </tbody>
                    <tfoot>
                        <tr style="font-size: 10px">
                            <th><span>NOME DA AULA</span></th>
                            <th><span>URL DA AULA</span></th>
                            <th><span>CAD. POR</span></th>
                            <th><span>ATU. POR </span></th>
                            <th><span>OPÇÕES</span></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $Component->getFooterDashboard(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $("#table_lista_cursos").DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nenhuma aula foi encontrada",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhuma aula foi encontrada",
            "infoFiltered": "(filtrado de _MAX_ registros no total)"
        }
    });
});
</script>