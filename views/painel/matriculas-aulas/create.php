<?php 
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getBlockPageAdmin();
echo $Component->getHeadHtmlDashboard();
echo $Component->getSideBarDashboard();
echo $Component->getLiAdministrativoDashboard();
echo $Component->getLiCoursesDashboard();
echo $Component->getLiPagesDashboard();
echo $Component->getMenuDashboard();
?>
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <i class="fas fa-layer-plus"></i>
        <h1 class="h3 mb-0 text-gray-800">Matrículas</h1>
    </div>
    <form method="post">
        <?php
        $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($Post['register_matriculate'])) {
            $MatriculateCourse['matricula_name'] = $Post['matriculate_course'];
            $Course = new Course();
            $Course->matriculateCourse($MatriculateCourse);
                if($Course->getResult()) {
                    Error($Course->getResult());
                } else {
                    Error($Course->getError(), 'warning');
                }
        }
        ?>
        <div class="form-group">         
            <label for="exampleInputEmail1">Matricular em curso</label>
            <select class="form-control" id="" name="matriculate_course" value="<?= isset($Post['matriculate_course'])? $Post['matriculate_course']: '' ?>">
                <?php
                $Read = new Read();
                $Read->FullRead("SELECT * FROM cursos");
                if($Read->getResult()) {
                        echo "<option value=''>Selecionar</option>";
                    foreach($Read->getResult() as $Cursos) {
                        echo "<option value='{$Cursos['curso_id']}'>{$Cursos['curso_titulo']}</option>";
                    }
                } else {
                    echo "<option value=''>Ainda não existem cursos disponíveis!</option>";
                }
                ?>
            </select>
        </div>
        <input type="submit" class="btn btn-success mb-2" name="register_matriculate" value="Matricular">
    </form>
</div>
<?= $Component->getFooterDashboard(); ?>