<?php
$User = new User();
$User->verifyExistLoginUser();
$Component = new Component();
echo $Component->getHeadHtmlDashboard();
?>
<div id="wrapper">
    <ul class="nav-list navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar mt-6">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar aulas..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form> 
    <!-- divisor -->
    <hr class="sidebar-divider my-0"> 
    <?php 
    $Read = new Read();
    $Read->FullRead("SELECT m.*, c.curso_descricao 
            FROM modulos m 
            LEFT JOIN cursos c ON c.curso_id = c.curso_titulo");
    if($Read->getResult()) {
    foreach($Read->getResult() as $Modulos) {
        ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASE ?>#" data-toggle="collapse" data-target="#collapse<?= $Modulos['modulo_id'] ?>" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Nome seção</span>
        </a>
        <div id="collapse<?= $Modulos['modulo_id'] ?>" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE ?>/">Aula nome</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <?php
        }
    } else {
        Error("Ainda não existem cursos nesta plataforma!");
    }   
        ?>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    </ul>  
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Pequisar aulas..." aria-label="Search"
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
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
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
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
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
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Seja bem-vindo(a),  <?= $_SESSION['login']['user_name'] ?></span>
                            <img class="img-profile rounded-circle" src="<?= BASE ?>/src/images/undraw_profile.svg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= BASE ?>/painel/profile/profile-user">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Meus dados
                            </a>
                            <a class="dropdown-item" href="<?= BASE ?>/painel/profile/meus-cursos">
                                <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
                                Meus cursos
                            </a>
                            <a class="dropdown-item" href="<?= BASE ?>/painel/profile/help">
                                <i class="fas fa-question fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ajuda
                            </a>
                            <a class="dropdown-item" href="<?= BASE ?>/painel/profile/suporte">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Suporte
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= BASE ?>/logout" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>   
                        </div>
                    </li>
                </ul>
            </nav>
            <header class="navbar bg-success shadow d-flex align-items-center justify-content-center justify-content-md-between topbar mb-0">
                <ul class="header1" style="list-style: none;">
                    <li>
                        <a href="<?= BASE ?>/painel/aulas/nome-da-aula-anterior" class="small text-gray-200">
                            <div class="fw-normal text-white-50 mb-1">Anterior</div>
                            <i class="fas fa-arrow-circle-left mr-2 text-gray-200"></i>
                            <span>Aula anterior</span>
                        </a>
                    </li>
                </ul>
                <div class="topbar-divider d-none d-sm-block"></div>
                <ul class="header2" style="list-style: none;">  
                    <li>  
                        <a href="<?= BASE ?>/painel/aulas/nome-da-proxima-aula" class="small text-gray-200">
                            <div class="fw-normal text-white-50 mb-1">Próxima</div>
                            <i class="fas fa-arrow-circle-right mr-2 text-gray-200"></i>
                            <span>Próxima aula</span>
                        </a>
                    </li>
                </ul>     
            </header>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
            </div>


            <!-- Conteúdo ou informações referente a aula -->
            <div class="containxer-fluid">
                <!-- ***Page Heading*** -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-600">Material de apoio</h1>
                </div>
                    <p class="h3 mb-0 text-gray-400">Como descrever uma metodologia de um curso?</p>
                    <p>Metodologia significa “caminho ou via para a realização de algo”. Ou seja, é o processo utilizado para chegar a algum conhecimento. Metodologia é também o estudo das melhores formas de pesquisa para cada área do conhecimento.</p>
                    <p>Metodologia significa “caminho ou via para a realização de algo”. Ou seja, é o processo utilizado para chegar a algum conhecimento. Metodologia é também o estudo das melhores formas de pesquisa para cada área do conhecimento.</p>
            </div> 
<?= $Component->getFooterDashboard(); ?>
