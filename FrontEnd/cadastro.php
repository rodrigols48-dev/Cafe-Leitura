<head>
<html lang="pt-br">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/cadastro.css">    
</head>

<body>

<div class='container'>
  <div class='card'>
    <h1> Cadastrar </h1>
    <div id='msgError'></div>
    <div id='msgSuccess'></div>
    
      <div class="label-float">
         <input type="text" id="nome" placeholder=" " required>
         <label id="labelNome" for="nome">Nome</label>
      </div>

      <div class="label-float">
         <input type="text" id="usuario" placeholder=" " required>
         <label id="labelUsuario" for="usuario">Usuário</label>
      </div>
            
      <div class="label-float">
         <input type="password" id="senha" placeholder=" " required>
         <label id="labelSenha" for="senha">Senha</label>
         <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>      
      </div>

      <div class="label-float">
         <input type="password" id="confirmSenha" placeholder=" " required>
         <label id="labelConfirmSenha" for="confirmSenha">Confirmar Senha</label>
         <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
      </div>
            
      <div class='justify-center'>
         <button onclick='cadastrar()'>Cadastrar</button>
      </div>
   </div>   
      <script src="../js/cadastro.js"></script>
</body>
</html>