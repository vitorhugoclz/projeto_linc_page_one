<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <!-- icone do linc para o Browser -->
    <link rel="shortcut icon" href="fotos/linc.ico" type="image/x-icon" />

    <title>Lab LInC</title>
    <meta name="viewport" content="width=devide-width, initial-scale=1" />
    <!-- Bootstrap core CSSAdiciona principal arquivo css bootstrap (base externo) -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Ajusta o padding inferior da navabar -->
    <link href="css/ajuste_menu.css" rel="stylesheet" />
    <!-- Ajuste do Rodapé -->
    <link href="css/ajuste_footer.css" rel="stylesheet" />
    <!-- ajustes de imagem com legenda (banner) -->
    <link href="css/index_estilo.css" rel="stylesheet" />
    <!-- edição da pagina equipe -->
    <link href="css/equipe_estilo.css" rel="stylesheet" />
    <!-- edição da pagina de contato -->
    <link href="css/contato_estilo.css" rel="stylesheet" />
    <!-- edição da pagina de artigo -->
    <link href="css/artigo_estilo.css" rel="stylesheet" />
</head>
<body id="page-top">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#equipe">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#area">Area de Atuação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
<?php
include ("include/header.php");
include ("include/equipe.php");
include ("include/area_atuacao.php");
include ("include/contato.php");
include ("include/footer.php");
?>

