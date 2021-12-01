<?php


// top

class Component {
    public function getMenu ($MenuActive = 'index') {
        return "

            <div class=\"container\">
                <nav class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3\">
                    <a href=' " . BASE . "/' type=\"button\" class=\" nav btn btn-black mb-2 mb-md-0\">
                        <img src='" . BASE . "/src/images/icon_small.png' alt='Logo' style=' width: 50px; height: 50px;'>
                    </a>
                            <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
                                <li><a href=' " . BASE . "/' class=\"nav-link px-2 link-secondary\">Home</a></li>
                                <li><a href=' " . BASE . "/sobre' class=\"nav-link px-2 link-secondary\">Sobre</a></li>
                                <li><a href=' " . BASE . "/conteudo' class=\"nav-link px-2 link-secondary\">Conteúdo</a></li>
                                <li><a href='"  . BASE . "/unitbrasil' class=\"nav-link px-2 link-secondary\">A Unitbrasil</a></li>
                            </ul>

                            <div class=\"col-md-auto text-end\">
                                <a href=' " . BASE . "/cadastro' type=\"button\" class=\"btn me-1 mb-0\">Cadastrar</a>
                                <a href=' " . BASE . "/login' type=\"button\" class=\"btn btn-warning w-auto me-1 mb-0\">Login</a>
                            </div>
                </nav>
            </div>
        ";
    }
    

    public function getHeaderOficial() {
        return '

        <header class="bg-white py-5 style="height: 698px;">
       
            <!-- This div is intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
            </video>

        
            <div class="container h-100">
                 <div class="d-flex h-100 text-center align-items-center">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Plataforma de <br /> evangelismo online <br />e desenvolvimento <br>pesssoal.</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Comece um tour pelo site<br /> e saiba como funciona o <br> evangelismo web.</p>

                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-warning btn-lg px-4 me-sm-3" href=" ' . BASE . '/cadastro">Começar</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#content-overview">Saiba mais</a>

                            <!-- <div class="justify-content-sm-center justify-content-xl-end">
                                <a class="btn btn-success text-black btn-lg px-4" href="/">Suporte</a>
                            </div> -->

                        </div>  
                    </div>
                </div>
            </div>
        </header>
        ';
    }


    public function getFooter() {
        return '

                <!-- Footer -->
                <div class="header-2">
                    <footer class="bg-dark text-center text-lg-start text-white">

                        <div class="container p-4 w-100">

                            <div class="row my-4">

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                                        <!-- <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style={{ width: 150, height: 150}}>
                                            <img height="70" alt="" loading="lazy" /> 
                                        </div> -->


                                    <p class="text-center">Pr. Humberto Oliveira</p>

                                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                                        <li>
                                            <a class="text-white px-2" href="/">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-white px-2" href="/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-white ps-2" href="/">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase mb-4">Parcerias</h5>

                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>unitplus</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Igreja Adventista do sétimo dia</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>unitbrasil</a>
                                        </li>
                                       

                                    </ul>
                                </div>


                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase mb-4">Sobre</h5>

                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Ministério Pastoral</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Contato pessoal</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Agenda</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Eventos</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/" class="text-white"><i class="fas fa-paw pe-3"></i>Curiosidades</a>
                                        </li>

                                    </ul>
                                </div>


                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase mb-4">Contato</h5>

                                    <ul class="list-unstyled">
                                        <li>
                                            <p><i class="fas fa-map-marker-alt pe-2"></i>Amazonas, Av. Timbiras, 0000, Manaus </p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-phone pe-2"></i>(55) 92 99999-9999</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-envelope pe-2 mb-0"></i>unitbrasil@.com</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>



                        <div class="text-center p-3 btn-primary">
                            © 2021 Copyright:
                            <a class="text-white" href="/">unitbrasil.com</a>
                        </div>

                    </footer>

                    </div>
                </body>
            </html>
        ';
    }
    
    public function getLogo() {
        return "
            <a href=' " . BASE . "/' type=\"button\" class=\" nav btn btn-black mb-2 mb-md-0\" style='width: 250; height: 100;'>
                <img src='" . BASE . "/src/images/icon_small.png' alt='Logo' style=' width: 50px; height: 50px;'>
            </a>             
        ";
    }


    public function getHeadHtml() {
        return '
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Página Principal</title>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
                <link rel="stylesheet" href="' . BASE . '/src/css/index.css" type="text/css">
                <link rel="stylesheet" href="' . BASE . '/src/css/footer.css" type="text/css">
        
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

                <!-- CSS do Footer da Home -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            </head>
            <body?>
        
        ';
    }

    public function getMenuAndSideBarDashboard() {
        return '

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href=" ' . BASE . '/dashboard">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Logo</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0 ">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Cursos</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            
                            <a class="collapse-item" href="'. BASE .'/meus-cursos">Meus cursos</a>
                            <a class="collapse-item" href="'. BASE .'/minhas-compras">Minhas compras</a>
                            <a class="collapse-item" href="'. BASE .'/cursos-finalizados">Cursos finalizados</a>
                            <a class="collapse-item" href="'. BASE .'/cursos-pendentes">Cursos pendentes</a>

                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
                                    aria-expanded="true" aria-controls="collapsePages">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>Administrativo</span>
                                </a>

                                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" href="'. BASE .'/list-user">Lista de usuários</a>
                                        <a class="collapse-item" href="'. BASE .'/cursos-aprovacao">Cursos em análise</a>
                                        <a class="collapse-item" href="'. BASE .'/historico-compras">Histórico de compras</a>
                                        <a class="collapse-item" href="'. BASE .'/suporte">Suporte</a>
                                        <a class="collapse-item" href="'. BASE .'/settings">Configurações</a>
                                        
                                    </div>
                                </div>

                            </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

              

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        

                        <!-- Topbar Search
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        Topbar Navbar -->
                        
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: Weve noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem Ive been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last months report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they arent good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Seja bem-vindo(a), ' . $_SESSION['login']['user_name'] .'</span>
                                 
                                    <img class="img-profile rounded-circle" src="'. BASE .'/src/images/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="'. BASE .'/profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Meus dados
                                    </a>
                                    <a class="dropdown-item" href="'. BASE .'/reset-password">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Mudar senha
                                    </a>
        
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Sair
                                    </a>   
                                </div>
                            </li>

                        </ul>
            

                    </nav>

                    <!-- End of Topbar -->
        
        ';

    }

    public function getFooterDashboard() {
        return '

        </div>
                <!-- End of Main Content -->

            

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        

        <!-- Scroll to Top Button-->
        <!-- <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a> -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecione "sair" para se deslogar!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="'. BASE .'/logout">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; unitplus.com 2021</span>
                </div>
            </div>
        </footer>
            <!-- Bootstrap core JavaScript-->
        <script src="'. BASE .'/res/site/js/jquery.min.js"></script>
        <script src="'. BASE .'/res/site/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="'. BASE .'/res/site/js/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="'. BASE .'/res/site/js/sb-admin-2.min.js"></script> 
    </body>
</html> 
        ';
    }
    

    public function getHeadHtmlDashboard() {
        return '

        <!DOCTYPE html>
        <html lang="pt-BR">
        
            <head>
        
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">
        
                <title>Dashboard</title>
        
                <!-- Custom fonts for this template-->
                <link href="'. BASE .'/res/site/css/all.min.css" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
                <!-- Custom styles for this template-->
                <link href="'. BASE .'/res/site/css/sb-admin-2.min.css" rel="stylesheet">
        
            </head>
        
            <body id="page-top">
        
        
        ';
    }

    public function getBarraMenuOptions() {
        return '

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Cursos</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Palestras</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Revistas
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Contato</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    
        ';
    }


    public function getHeadHtmlPro() {
        return '
            <!DOCTYPE html>
            <html lang="en" itemscope itemtype="http://schema.org/WebPage">
            
                <head>
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
                    <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
                    <title>
                        Page | Biografia
                    </title>
                    <!-- Fonts and icons -->
                    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                    <!-- Nucleo Icons -->
                    <!-- <link href="' . BASE . '/src/css/nucleo-icons.css" rel="stylesheet" />
                    <link href="' . BASE . '/src/css/nucleo-svg.css" rel="stylesheet" /> -->
                    <!-- Font Awesome Icons -->
                    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                    <!-- Material Icons -->
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                    <!-- CSS Files -->
                    <link id="pagestyle" href="' . BASE . '/src/css/material-kit.css?v=3.0.0" rel="stylesheet" />
                </head>
            <body>

                <!-- após isso vem o getMenu -->
        
        
        ';
    }

    public function getFooterHomeTeste() {
        return '

        <footer class="footer pt-5 mt-5">
        <div class="container">
          <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
              <div>

                <!-- <a href=" ' . BASE . '/" type=\"button\" class=\" nav btn btn-black mb-2 mb-md-0\" style="width: 250; height: 100;">
                    <img src="' . BASE . '/src/images/icon_small.png" alt="Logo" style=" width: 50px; height: 50px;">
                </a> -->

                <h6 class="font-weight-bolder mb-4">Pr. Humberto Oliveira</h6>
              </div>
              <div>
                <ul class="d-flex flex-row ms-n3 nav">
                  <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.facebook.com/educacaoetreinamentos/" target="_blank">
                      <i class="fab fa-facebook text-lg opacity-8"></i>
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.youtube.com/channel/UClFMwemd5j7EsXlV-gTw5Xg" target="_blank">
                        <i class="fab fa-youtube text-lg opacity-8"></i>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
      
      
      
            <div class="col-md-2 col-sm-6 col-6 mb-4">
              <div>
                <h6 class="text-sm">Parcerias</h6>
                <ul class="flex-column ms-n3 nav">
                  <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">
                      UNITBRASIL
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">
                      Igreja Aventista
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">
                      Unitplus
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">
                      Contato
                    </a>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col-md-2 col-sm-6 col-6 mb-4">
              <div>
                <h6 class="text-sm">Recursos</h6>
                <ul class="flex-column ms-n3 nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://iradesign.io/" target="_blank">
                      Fotos
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                      Eventos
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                      Patron me
                    </a>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col-md-2 col-sm-6 col-6 mb-4">
              <div>
                <h6 class="text-sm">Ajuda & Suporte</h6>
                <ul class="flex-column ms-n3 nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                      Entre em contato
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                      Center
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                      Desenvolvimento
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                      Projetos
                    </a>
                  </li>
      
                </ul>
              </div>
            </div>
      
            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
              <div>
                <h6 class="text-sm">Legal</h6>
                <ul class="flex-column ms-n3 nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                      Termos & Condições
                    </a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                      Política de privacidade
                    </a>
                  </li>
                </ul>
              </div>
            </div>
      
            <div class="col-12">
              <div class="text-center">
                <p class="text-dark my-4 text-sm font-weight-normal">
                  Todos os direitos reservados. Copyright © Feito by <a href="https://www.unitplus.com.br/" target="_blank">Unitplus</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
        ';
    }

    public function getHeadHtmlPages($title = 'Dashboard') {
        return '
        <!DOCTYPE html>
        <html lang="pt-BR">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">
        
                <title>' . $title . '</title>
        
                <!-- Custom fonts for this template-->
                <link href="' . BASE .'/res/site/css/all.min.css" rel="stylesheet" type="text/css">
                <link href="' . BASE .'/res/site/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
                <!-- Custom styles for this template-->
                <link href="' .  BASE . '/res/site/css/sb-admin-2.min.css" rel="stylesheet">
            </head>
        
            <body id="page-top">
            ';
    }

    
}

