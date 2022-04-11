<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="<?= BASE ?>/src/css/video-pagina.css">
        <source>
        <title>Document</title>
    </head>
    <body>
        <img src="<?=BASE ?>/src/images/speech-post.jpg" alt="imagem do vídeo" style="width: 300px; height: 300;">
        <div class="descricao">
            <h2>Nome do curso</h2>
            <i>Nome da aula</i>
        </div>
        <div class="duracao">
            <div class="barra">
                <progress value="0.5" max="1"></progress>
                <div class="ponto"></div>
            </div>
            <div class="tempo">
                <p class="inicio">0:00</p>
                <p class="fim">3:40</p>
            </div>
        </div>
        <div class="player">
            <i class="fas fa-step-backward"></i>
            <i class="fas fa-play-circle"></i>
            <i class="fas fa-pause-circle"></i>
            <i class="fas fa-step-forward"></i>
        </div>
        <audio src=""></audio>              
    </body>
</html>