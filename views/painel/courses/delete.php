<?php
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getMenuAndSideBarDashboard2();
?>  
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Página - Title</title>
        <link href="<?= BASE ?>/res/site/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?= BASE ?>/res/site/css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
<body> 
    <div class="container">
        <div class="col-lg-7">
            <div class="card-header py-sm-5 py-3">
                <h2>Excluir cursos</h2>
                <p class="lead">Excluir cursos</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th><span>Título</span></th>
                                <th><span>Criado</span></th>
                                <th class="text-center"><span>Descrição</span></th>
                                <th><span>Excluir</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Read = new Read();
                            $Read->FullRead("SELECT * FROM cursos");
                            if($Read->getResult()) {
                                foreach($Read->getResult() as $Cursos) {
                                    ?>
                                    <tr>
                                <td>
                                    <a href="/" class="user-link"><?= $Cursos['curso_titulo'] ?></a>
                                    <span class="user-subhead"></span>
                                </td>
                                <td>
                                    <?= $Cursos['curso_create_date'] ?>  
                                </td>
                                
                                <td>
                                    <a href="/"><?= $Cursos['curso_descricao'] ?></a>
                                </td>
                                <td>
                                    <a href="/" class="table-link danger">
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
    <!-- Fim da div container -->
    </div>
<?php
echo $Component->getFooterDashboard();
?>