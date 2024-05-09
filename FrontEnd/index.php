<?php

require_once('../BackEnd/Conexao.php');
?>
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
    <nav class="navbar navbar-expand-lg">
      <img src="img/CAFEEEE.png" width="50" >
      <a class="navbar-brand"  href="#">Café e leitura</a>
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
            <a href="#modallivros" data-toggle="modal" class="nav-link">Cadastro  </a>
          </li>
          <li class="nav-item">
            <a href="cadastro.php" class="nav-link">Usuarios</a>
          </li>
          <li class="nav-item">
            <a href="login.php"  class="nav-link">Login</a>
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


  <section class="haircuts">

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/elon musk.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Elon Musk</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 77,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample1">
        <div class="card card-body">
          Do autor de Steve Jobs e outras biografias de sucesso, livro relata a impactante história do mais fascinante e controverso inovador do nosso tempo
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/Codigo LImpo.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Código Limpo</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 88,20</button>

      </div>

      <div class="collapse" id="multiCollapseExample2">
        <div class="card card-body">
          Mesmo um código ruim pode funcionar. Mas se ele não for limpo, pode acabar com uma empresa de desenvolvimento. Perdem-se a cada ano horas incontáveis e recursos importantes devido a um código mal escrito. Mas não precisa ser assim.
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/iNTELGENCIA ARTIFICAIL.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Inteligência Artificial</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 53,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample3">
        <div class="card card-body">
          Entender o que é a inteligência artificial (IA), bem como seu impacto na vida humana e as oportunidades e ameaças que ela proporciona é o maior poder que alguém pode desbloquear para se preparar para o futuro – a ampliação da nossa própria inteligência.
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/Engenharia de Software.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Engenharia de software </strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 202,50</button>

      </div>

      <div class="collapse" id="multiCollapseExample4">
        <div class="card card-body">
          A nova edição do livro-texto líder de mercado em engenharia de software traz uma série de novidades. O livro foi totalmente revisado e reestruturado para melhorar seu fluxo pedagógico
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/Bootstrap 4.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Bootstrap 4</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 49,90</button>

      </div>

      <div class="collapse" id="multiCollapseExample5">
        <div class="card card-body">
          Fazer um site elegante nunca foi tão fácil, mesmo para quem não sabe escrever uma linha de CSS e, muito menos, entende como harmonizar cores, balancear elementos e tipografia
        </div>
      </div>

    </div>

  </section>

  <section class="haircuts">

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/Front end.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Fundamentos HTML5 e CSS3</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample6" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 67,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample6">
        <div class="card card-body">
          O livro Fundamentos de HTML5 e CSS3 tem o objetivo de fornecer aos iniciantes e estudantes da área de desenvolvimento web conceitos básicos e fundamentos da marcação HTML e estilização CSS, para a criação de sites, interfaces gráficas e aplicações para a web.
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/HEROIS.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Os heróis da revolução</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample7" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 110,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample7">
        <div class="card card-body">
          Este livro conta as façanhas daqueles que fizeram a revolução da computação - pessoas brilhantes, por vezes excêntricas, que desde os anos 1950 assumiram riscos, quebraram as regras e levaram o mundo a uma nova direção.
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/JS.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>JavaScript: O Guia Definitivo</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample8" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 231,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample8">
        <div class="card card-body">
          Referência completa para programadores, JavaScript: O guia definitivo fornece uma ampla descrição da linguagem JavaScript básica
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/logica de programação.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Lógica de Programação</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample9" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 59,90</button>

      </div>

      <div class="collapse" id="multiCollapseExample9">
        <div class="card card-body">
          Aprenda a programar agora! Este livro apresenta uma abordagem totalmente prática. Uma didática pensada no iniciante, com a qual os conceitos são apresentados com motivações práticas, através do surgimento da necessidade para depois mostrar a solução.
        </div>
      </div>

    </div>

    <div class="haircut" data-aos="fade-up" data-aos-delay="250">
      <img src="img/PYTHON.jpg" alt="livro" />
      <div class="haircut-info">
        <strong>Programação com Python</strong>

        <button class="btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample10" aria-expanded="false" aria-controls="collapseExample">
          +Info
        </button>

        <button class="btn" data-toggle="modal" data-target="">R$ 96,00</button>

      </div>

      <div class="collapse" id="multiCollapseExample10">
        <div class="card card-body">
          Este livro é orientado ao iniciante em programação. Os conceitos básicos de programação, como expressões, variáveis, repetições, decisões, listas, dicionários, conjuntos, funções, arquivos, classes, objetos e banco de dados com SQLite 3 são apresentados um a um com exemplos e exercícios.
        </div>

      </div>

    </div>

  </section>

  <footer class="text-center py-3">
    © 2024 Livraria Online
  </footer>

    <script>
      document.getElementById("frm-cadastro").addEventListener("submit", function(event){
        var form = this;
        
        // Verificar se todos os campos foram preenchidos
        var isValid = Array.from(form.elements).every(function(element) {
          return element.value !== '';
        });
        
        if (!isValid) {
          event.preventDefault();
          alert('Por favor, preencha todos os campos.');
        }
      });
    </script>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <?php require_once('Modal/cadastro.php') ?>
  <?php require_once('Modal/usuario.php') ?>
</body>

</html>