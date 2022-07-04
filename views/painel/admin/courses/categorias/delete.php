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
$categoriaId = filter_input(INPUT_GET, 'categoria_delete', FILTER_VALIDATE_INT)
?>
<div class="container">
    <?php
    $Read = new Read(); 
    $Read->FullRead("SELECT * FROM categoria_cursos WHERE categoria_id = :ci", "ci={$categoriaId}");
    if($Read->getResult()) {
        $DataCategoryCourse = $Read->getResult()[0];
    } else {
        Error('Categoria de curso não encontrada!', 'danger');
    }
    ?>
    <div class="card shadow">
        <div class="card-header d-sm-flex align-items-center justify-content-start mb-4">
            <h1 class="h5 mb-0 text-gray-800">Excluir <b><?= $DataCategoryCourse['categoria_name'] ?></b></h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="example">Categoria</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="category" placeholder="Nome da categoria" 
                    value="<?= $DataCategoryCourse['categoria_name'] ?>">
                </div>
                <a href="<?= BASE ?>/painel/courses/categorias/list" class="btn btn-outline-success mb-2" title="Voltar para lista de categorias">Voltar</a>
                <input type="submit" class="btn btn-danger mb-2" name="delete_category" value="Excluir">
            </form>
        </div>
    </div>
</div>
<?= $Component->getFooterDashboard(); ?>