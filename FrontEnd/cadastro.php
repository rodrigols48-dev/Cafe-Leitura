<?php
error_reporting(0);

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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/cadastro.css">    
</head>

<body>

<div class='container'>
  <div class='card'>
    <h1> Cadastrar </h1>
    <div id='msgError'></div>
    <div id='msgSuccess'></div>

      <form id="form-usuario">

         <div class="label-float form-group">
            <label id="labelNome" for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class='form-control' placeholder=" " required>
         </div>

         <div class="label-float">
            <label for="email">Email</label>
            <input type="text" id="email" name="email"  placeholder=" " required>
         </div>

         <div class="label-float">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" placeholder=" " required>
         </div>

         <div class="label-float">
            <label for="CPF">CPF</label>
            <input type="text" id="CPF" name="CPF" placeholder=" " required>
         </div>

         <div class="label-float">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" placeholder=" " required>
         </div>

         <div class="label-float form-group">
            <label for="data_nascimento">Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder=" " required>
         </div>

         <div class='justify-center'>
            <input type="submit" value="Cadastrar">
         </div>

      </form>
      
   </div>   

      <script src="../js/cadastro.js"></script>

</body>
</html>