<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Nada disso foi criado pelo ChatGPT; confia-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIPÂ | Centro Universitário de Bayuex</title>
    <link rel="shortcut icon" type="image/png" href="https://www.unipe.edu.br/wp-content/themes/cruzeiroportais2019/assets/imagens/marcas/marcaUnipeFavicon.svg" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #222222;
        }

        label{
            color:#fff;
        }

        .nav-link {
            color: #838383;
        }

        .nav-link.active {
            color: #fff !important;
        }

        .nav-link:hover {
            color: #fff;
        }

        .carousel .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            min-height: 500px;
            height: 100%;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://novoportal.cruzeirodosul.edu.br/static/logos/67/logo-negativo_67.svg" width="150"
                    height="55">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center text-primary" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == "conteudo") ? "active" : "" ?>" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == "noticias") ? "active" : "" ?>" href="?page=noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == "precos") ? "active" : "" ?>" href="?page=precos">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == "faleconosco") ? "active" : "" ?>" href="?page=faleconosco">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>