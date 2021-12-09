<?php
    $User = new User();
    if($User->verifyLoginUserON()) {
        header('Location: ' . BASE . '/painel/dashboard');
        die();
    $Time = new Timer();
    $Time->getTimeSession();
    // Check::var_dump_json($ $Time->getTimeSession());
};

?>

<!DOCTYPE html>
     <html lang="pt-BR">
        <head>
            <meta charset="utf-8" />
            <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
            <link rel="icon" type="image/png" href="./assets/img//favicon.png">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <title>
                Page | Login
            </title>
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

            <!-- Fonts and icons -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
            
            <link id="pagestyle" href="<?= BASE ?>/src/css/material-kit.css?v=3.0.0" rel="stylesheet" />
            
            <!-- CSS Files -->
            <link href="<?= BASE ?>/res/site/css/bootstrap.min.css" rel="stylesheet" />
            <link href="<?= BASE ?>/res/site/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
          


        </head>

        <body class="index-page sidebar-collapse">
            <div class="section section-image section-login" style="background-image: url('<?= BASE ?>/src/images/login-image.jpg')">
            <div class="container">
                <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="card card-register">
                    <?php 

                        $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                        if(!empty($Post['login'])) {
                        
                            $User = new User();
                            $User->exeLogin($Post['email'], $Post['password']);
                            if($User->getResult()) {
                                Error($User->getError());
                                header('Location: ' . BASE . '/painel/dashboard');
                                die();
                            } else {
                                Error($User->getError(), 'danger');
                            }
                        } 

                    ?>
                    <h3 class="title mx-auto">Seja bem-vindo(a)</h3>
                
                    <form class="" method="post">
                        <label>Email</label>
                        <div class="input-group form-group-no-border">
                        <div class="input-group-prepend">
                        </div>
                            <input type="email" class="form-control" name="email" value="<?= isset($Post['email'])?$Post['email']: '' ?>" placeholder="Email">
                        </div>
                        <label>Senha</label>
                        <div class="input-group form-group-no-border">
                        <div class="input-group-prepend">
                        </div>
                            <input type="password" class="form-control" name="password" value="<?= isset($Post['password'])?$Post['password']: '' ?>" placeholder="Senha">
                        </div>
                        <input class="btn btn-danger btn-block btn-round" type="submit" value="Entrar" name="login">
                    </form>
                    
                    <div class="forgot">
                        <a href="<?= BASE ?>/forgot-password" class="btn btn-link btn-danger">Esqueci a senha</a>
                    </div>
                    <div class="forgot">
                        <a href="<?= BASE ?>/cadastro" class="btn btn-link btn-danger">Criar conta</a>
                    </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>



