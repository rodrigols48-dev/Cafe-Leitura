<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/login.css" />
    <title>Singin</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Entrar</h1>

        <div id="msgError"></div>

        <div class="label-float">
          <input type="text" id="email" paceholder="" required />
          <label id="email" for="email">Email</label>
        </div>

        <div class="label-float">
          <input type="password" id="senha" paceholder="" required />
          <label id="senhaLabel" for="senha">Senha</label>
          <i class="fa fa-eye" aria-hidden="true"></i>
        </div>

        <div class="justify-center">
          <button onclick="entrar()">Entrar</button>
        </div>

        <p>
          Não tem uma conta?
          <a href="cadastro.php">
            Cadastre-se
          </a>
        </p>
      </div>
    </div>

    <script src="../js/login.js"></script>
  </body>
 
</html>
