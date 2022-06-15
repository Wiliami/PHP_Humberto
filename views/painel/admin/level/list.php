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
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark" style="font-size: 13px;">Nível de usuários</h6>
            <a href="<?= BASE ?>/painel/admin/level-user/create" class="btn btn-success rounded-pill" title="Voltar para a lista de usuários" style="border-radius: 50%; font-size: 11px;">Cadastrar nível</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table-niveis" class="cell-border compact stripe table-striped" style="width: 100%;">
                    </div>
                    <thead>
                        <tr class="btn-sm" style="font-size: 11px;">
                            <th>NÍVEL</th>
                            <th>CAD. POR</th>
                            <th>ATU. POR</th>
                            <th>OPÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $Read = new Read();
                            $Read->FullRead("SELECT ul.*, uc.user_name as user_create, uu.user_name as user_update
                                FROM users_levels ul
                                LEFT JOIN users uc ON uc.user_id = ul.level_user_create
                                LEFT JOIN users uu ON uu.user_id = ul.level_user_update
                                ");
                            if($Read->getResult()) {
                                foreach($Read->getResult() as $Level) {
                                    ?>
                        <tr class="btn-sm" style="font-size: 10px;">
                            <td>
                                <?= $Level['level_desc'] ?> 
                            </td>
                            <td>
                                <?= $Level['user_create'] ?>    
                            </td>
                            <td>
                                <?= $Level['user_update'] ?>    
                            </td>
                            <td>
                                <a href="<?= BASE ?>/painel/admin/level-user/update&level=<?= $Level['level_id'] ?>" class="table-link btn-sm" title="Editar <?= $Level['level_desc'] ?>"><i class="fas fa-edit"></i></a>
                                <a href="<?= BASE ?>/painel/admin/level-user/delete&delete_level=<?= $Level['level_id'] ?>" class="table-link btn-sm" title="Excluir <?= $Level['level_desc'] ?>" style="color: red;"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        }  
                        ?>
                    </tbody>
                    <tfoot>
                        <tr class="btn-sm" style="font-size: 11px;">
                            <th>NÍVEL</th>
                            <th>CAD. POR</th>
                            <th>ATU. POR</th>
                            <th>OPÇÕES</th>
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
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $("#table-niveis").DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nível de usuário não encontrado!",
            "info": "Mostrando página _PAGE_ de _PAGES_ registros",
            "infoEmpty": "Nenhum registro foi encontrado",
            "infoFiltered": "(filtrado de _MAX_ registros no total)"
        }
    });
});
</script>