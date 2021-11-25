<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= BASE ?>/src/css/index.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE ?>/src/css/footer.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


    <!-- <link href="<?= BASE ?>/src/css/nucleo-icons.css" rel="stylesheet" /> 
    <link href="<?= BASE ?>/src/css/nucleo-svg.css" rel="stylesheet" /> -->

    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->



    
    <!-- Estiliza as letras do card cursos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    
    <!-- Estiliza o card de curso -->
    <link id="pagestyle" href="<?= BASE ?>/src/css/material-kit.css?v=3.0.0" rel="stylesheet" />
    
    <!-- Estiliza o index -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

    
    <!-- CSS do Footer da Home -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->

</head>

    <body>

        <?php
        
        $Component = new Component();

        echo $Component->getMenu();
        echo $Component->getHeader();

        ?>



        <!-- conteúdo principal -->
        <main class="flex-shrink-0" id="content-overview">

            <section class="py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-black mb-2">Pr. Humberto Oliveira</h1>
                                <p class="lead fw-normal text-black-50 mb-4">Além de ser Empresário e Professor, Pr.
                                    Humberto Oliveira dedica também parte do seu tempo para o evangelismo e ministério
                                    pastoral.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-outline-dark btn-lg px-4" href="<?= BASE ?>/biografia">Leia a minha
                                        história</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <img class="img-fluid rounded-3 my-5 bg-warning rounded-circle w-290 h-290" src="<?= BASE ?>/src/images/humberto.png" alt="image de Humberto Oliveira" />
                        </div>


                    </div>
                </div>
            </section>



            <!-- Cursos box -->
            <section class="my-5 py-5">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                            <div class="card-body py-7 text-center">
                                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                <h3 class="text-white">Cursos em <br /> diversas àreas.</h3>
                                <p class="text-white opacity-8">Esta é uma plataforma vérsatil para cursos completos para quem deseja trabalhar com o público e com a igreja. Conhecimento para conquistar seus objetivos.</p>
                            </div>
                            </div>
                            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                            <div class="card-body pt-7 text-center">
                                <h3 class="text-white">Mais detalhes</h3>
                                <p class="text-white opacity-8">Esta é uma plataforma vérsatil para cursos completos para quem deseja trabalhar com o público e com a igreja. Conhecimento para conquistar seus objetivos.</p>
                                <a href="#page-course" target="" class="btn btn-white btn-sm w-50 mx-auto mt-3">Saiba mais!</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                            <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                            <h5 class="font-weight-bolder mt-3">Religião</h5>
                            <p class="pe-5">Trabalhamos para constituir uma trajetória sólida com base em valores éticos e morais, com a finalidade de formar cidadãos como você. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                            <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                            <h5 class="font-weight-bolder mt-3">Família</h5>
                            <p class="pe-3">Este curso aborda a importância da família na educação de crianças e jovens além de mostrar o papel decisivo desta influência ao longo de toda vida escolar para o crescimento dos filhos.</p>
                            </div>
                        </div>
                        </div>
                        <div class="row justify-content-start mt-5">
                        <div class="col-md-6 mt-3">
                            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                            <h5 class="font-weight-bolder mt-3">Vida financeira</h5>
                            <p class="pe-5">Estude o curso de Planejamento Financeiro Familiar Grátis com certificado válido em todo Brasil. Curso grátis online de Planejamento Financeiro Familiar.</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                            <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                            <h5 class="font-weight-bolder mt-3">Vida conjugal</h5>
                            <p class="pe-3">Neste curso você conhecerá as bases do casamento segunda a Bíblia. Serão ministradas assuntos como:
                                            <li>A aliança do casamento;</li>
                                            <li>O propósito de Deus para o casamento.</li>
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            
            



            <!-- carrosel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= BASE ?>/src/images/man-speaker-post.jpg"
                            alt="imagem de palestra" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Como ser uma pessoa confiante?</h5>
                            <p>Saiba quais são as melhores ferramentas sobre perfomance e influência social.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= BASE ?>/src/images/man-speech.jpg" alt="imagem de palestra" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Família, vida financeira e social.</h5>
                            <p>Saiba como ter uma feliz nessas três áreas importantes.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= BASE ?>/src/images/humberto-background-carrousel.jpeg" alt="imagem de palestra" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Religião e Ciência</h5>
                            <p>Qual a relação da Religião com a Ciência.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>





            <section class="py-5 bg-white" id="page-course">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Conheça os nosso cursos</h2>
                                <p class="lead fw-normal text-muted mb-5">Cursos em diversas áreas</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <video class="card-img-top" muted>
                                    <source type="video/mp4" />
                                </video>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Curso</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/">
                                        <h5 class="card-title mb-3">Técnicas e perfomance.</h5>
                                    </a>
                                    <p class="card-text mb-0">Saiba como falar em público e como dominar a timidez na hora
                                        de se expressar para as pessoas.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3"
                                                src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">unitbrasil</div>
                                                <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <div class="card-img-top">
                                    <video class="card-img-top" muted>
                                        <source type="video/mp4" />
                                    </video>
                                </div>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Curso</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/">
                                        <h5 class="card-title mb-3">Vida financeira</h5>
                                    </a>
                                    <p class="card-text mb-0">Como ter uma vida financeira equilibrada e como ter foco e
                                        resultados na área mais desafiadora do ser humano.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3"
                                                src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">unitbrasil</div>
                                                <div class="text-muted">March 23, 2021 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <div class="card-img-top">
                                    <video class="card-img-top" muted>
                                        <source type="video/mp4" />
                                    </video>
                                </div>




                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Curso</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/">
                                        <h5 class="card-title mb-3">Propósito e carreira</h5>
                                    </a>
                                    <p class="card-text mb-0">Conheça as principais ferramentas que pessoas bem sucedidas
                                        utilizam para uma vida de propósito.</p>
                                </div>

                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3"
                                                src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">unitbrasil</div>
                                                <div class="text-muted">April 2, 2021 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Button -->
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-center">
                            <a class="btn btn-outline-dark btn-lg px-4 me-sm-3" href="<?= BASE ?>/page-video">Veja todos os
                                cursos
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        </main>


        <?php
        
            $Component = new Component();
            echo $Component-> getFooterExampleTest();

        ?>

    </body>
</html>