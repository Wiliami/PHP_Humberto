<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page | Lista de usuários</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= BASE ?>/src/css/list-user.css" type="text/css">
        <link id="pagestyle" href="<?= BASE ?>/src/css/material-kit.css?v=3.0.0" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    </head>

<body>
    <?php

    $Component = new Component();
    $Component->getMenuDashboard();
    $Component->getMenuAndSideBarDashboard();
    ?>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th><span>User</span></th>
                                <th><span>Created</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Email</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                    <a href="#" class="user-link">Mila Kunis</a>
                                    <span class="user-subhead">Admin</span>
                                </td>
                                <td>
                                    2013/08/08
                                </td>
                                <td class="text-center">
                                    <span class="label label-default">Inactive</span>
                                </td>
                                <td>
                                    <a href="#">mila@kunis.com</a>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="table-link">
                                        <span class="fa-stack">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="table-link">
                                        <span class="fa-stack">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="table-link danger">
                                        <span class="fa-stack">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <!-- Botões de ir para próxima página  -->
                
        </div>
    </div>
    </div>

</body>
</html>


