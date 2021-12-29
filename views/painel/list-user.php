<?php
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getHeadHtmlDashboard();
echo $Component->getMenuSideBarDashboard();
echo $Component->getMenuOptionsDashboard();
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="">Lista de usuários</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th><span class="btn btn-warning mb-2">#</span></th>
                                <th><span class="btn btn-warning mb-2">Usuário</span></th>
                                <th><span class="btn btn-warning mb-2">Nível</span></th>
                                <th><span class="btn btn-warning mb-2">Criado</span></th>
                                <th class="text-center"><span class="btn btn-warning mb-2">Status</span></th>
                                <th><span class="btn btn-warning mb-2">E-mail</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Read = new Read();
                            $Read->FullRead("SELECT u.*, ul.level_desc 
                                    FROM users u 
                                    LEFT JOIN users_levels ul ON ul.level_id = u.user_level");
                            if($Read->getResult()) {
                                foreach($Read->getResult() as $User) {                    
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png"alt="avatar" style="width: 50px; height: 50px">
                                        </td>
                                        <td>
                                            <span class="d-block user-link btn btn-light mb-2"><?= $User['user_name'] ?></span>
                                        </td>
                                        <td>
                                            <span class="btn btn-light mb-2"><?= $User['level_desc'] ?></td></span>
                                        <td>
                                            <span class="btn btn-light mb-2"><?= date('d/m/Y', strtotime($User['user_create_date'])) ?></span>
                                        </td>
                                        
                                        <td class="text-center">
                                            <span class="label label-default btn btn-light mb-2">Situação</span>
                                        </td>
                                        <td>
                                            <span class="btn btn-light mb-2"><?= $User['user_email'] ?></span>
                                        </td>
                                        <td>
                                            <a href="<?= BASE ?>/" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="<?= BASE ?>/" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="<?= BASE ?>/" class="table-link danger">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php 
                                }
                            } else {
                                Error("Ainda não existem usuários!");
                            }   
                            ?>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>  
</div>
<?php 
echo $Component->getFooterDashboard();
?>