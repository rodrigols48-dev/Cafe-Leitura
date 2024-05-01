<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café e leitura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/Café e livro 25.PNG">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">Café e leitura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="search-box">
                <input class="input-icon" type="text" placeholder="O que você está buscando?">
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="livravria.php">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#modalExemplo" data-toggle="modal" data-target=".bd-example-modal-xl" class="nav-link">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=85997665652">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

        <div class="jumbotron" style="background-image: url(img/download-de-livros-gratis-scaled.webp);">
            <h1 id="title" class="display-4 titulo0">Bem-vindo à Livraria Online</h1>
            <p id="subtitle" class="lead titulo1">Encontre os melhores livros aqui!</p>
         </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/19050255-vista-lateral-de-livros-de-leitura-de-estudante-do-sexo-masculino-na-biblioteca-gratis-foto.jpg" alt="Primeiro Slide"> 
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size:30px;">Bem-Vindo</h5>
                        <p style="font-size:25px;">Perdido nas páginas, encontrando mundos além da imaginação</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/pexels-photo-5852461.jpeg" alt="Segundo Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size:30px;">Caminhos Literários</h5>
                        <p style="font-size:25px;">Viaje sem sair do lugar, apenas abrindo um livro.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/pexels-rethaferguson-3060324.jpg" alt="Terceiro Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size:30px;">Trilhas de Papel</h5>
                        <p style="font-size:25px;">Caminhe por caminhos literários que nunca se apagam.</p>
                    </div>
                </div>      
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
            </div>
        </div> 
        <!-- Adicione mais conteúdo aqui, como listagem de livros, formulários de pesquisa, etc. -->
    </section>

    <footer class="text-center py-3">
        © 2024 Livraria Online
    </footer>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Seu arquivo JavaScript personalizado -->
    <script src="scripts.js"></script>

    <?php require_once('Modal/cadastro.php') ?>

</body>
</html>
