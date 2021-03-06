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
$commentId = filter_input(INPUT_GET, 'comment', FILTER_VALIDATE_INT);
?>
<div class="container">
    <?php
    $Read = new Read();
    $Read->FullRead("SELECT c.*, u.user_name 
        FROM comments c
        LEFT JOIN users u ON u.user_id = c.user
        LEFT JOIN aulas a ON a.aula_id = u.user_id
        WHERE comment_id = :ci", "ci={$commentId}");    
    if($Read->getResult()) { 
        $DataComment = $Read->getResult()[0];
    } else {
        die(Error('Comentário não encontrado!', 'warning'));
    }
    ?>
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-start">
        <h1 class="h6 mb-0">Atualizar comentário</h1>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="" method="post">
                <?php
                $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                if(!empty($Post['update_comment'])) {
                    $DataCommentCreate['comment_status'] = $Post['status'];
                    $DataComment['comment_status'] = $Post['status'];
                    $Course = new Course();
                    $Course->updateCommentUserLesson($DataCommentCreate, $commentId);
                    if($Course->getResult()) {
                        Error($Course->getError());
                    } else {
                        Error($Course->getError(), 'danger');
                    }
                }
                ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Comentário:</label>
                    <textarea type="text" class="form-control" id="example3"><?= $DataComment['comment_text'] ?></textarea>
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status do comentário:</label>
                <select class="form-control mb-3" id="inlineFormCustomSelectPref" name="status" required>
                    <?php
                    $Read->FullRead('SELECT * FROM situation s WHERE s.local = 1');
                    if($Read->getResult()) {
                        foreach($Read->getResult() as $Pending) {
                            echo "<option value='{$Pending['id']}' " . ($Pending['id'] == $DataComment['comment_status'] ? 'selected' : null) . ">{$Pending['desc']}</option>";
                        }
                    } else {
                        echo "<option value=''>Nunhuma pendência foi encontrada!</option>";
                    }
                    ?>
                </select>
                <a href="<?= BASE ?>/painel/courses/lesson/comments/list" class="btn btn-outline-success mb-2" title="Voltar para lista de usuários">Voltar</a>
                <input type="submit" class="btn btn-success mb-2" name="update_comment" value="Atualizar">
            </form>
        </div>
    </div>
</div>
<?= $Component->getFooterDashboard(); ?>