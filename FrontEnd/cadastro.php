<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeleitura";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$CPF = $_POST['CPF'];
$endereco = $_POST['endereco'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "INSERT INTO usuarios (nome, email, telefone, CPF, endereco, data_nascimento)
VALUES ('$nome', '$email', '$telefone', '$CPF', '$endereco', '$data_nascimento')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

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

      <form id="form-usuario">

         <div class="label-float">
            <input type="text" id="nome" name="nome" placeholder=" " required>
            <label id="labelNome" for="nome">Nome</label>
         </div>

         <div class="label-float">
            <input type="text" id="email" name="email" placeholder=" " required>
            <label for="email">Email</label>
         </div>

         <div class="label-float">
            <input type="text" id="telefone" name="telefone" placeholder=" " required>
            <label for="telefone">Telefone</label>
         </div>

         <div class="label-float">
            <input type="text" id="CPF" name="CPF" placeholder=" " required>
            <label for="CPF">CPF</label>
         </div>

         <div class="label-float">
            <input type="text" id="endereco" name="endereco" placeholder=" " required>
            <label for="endereco">Endereço</label>
         </div>

         <div class="label-float">
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder=" " required>
            <label for="data_nascimento">Nascimento</label>
         </div>

         <div class='justify-center'>
            <input type="submit" value="Cadastrar">
         </div>

      </form>
      
   </div>   

      <script src="../js/cadastro.js"></script>

</body>
</html>