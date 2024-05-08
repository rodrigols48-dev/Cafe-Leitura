<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeleitura";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    // ...
  
    // Preparar a consulta SQL
    $sql = "INSERT INTO Usuarios (nome, email) VALUES (?, ?)";
  
    // Preparar a declaração
    $stmt = $conn->prepare($sql);
  
    // Vincular os parâmetros
    $stmt->bind_param("ss", $nome, $email);
  
    // Executar a declaração
    if ($stmt->execute()) {
      echo "Novo registro criado com sucesso";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }
  }

  // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    // ... Adicione aqui outros campos conforme necessário

    // Preparar a consulta SQL
    $sql = "INSERT INTO Usuarios (nome, email) VALUES (?, ?)";

    // Preparar a declaração
    $stmt = $conn->prepare($sql);

    // Vincular os parâmetros
    $stmt->bind_param("ss", $nome, $email);

    // Executar a declaração
    if ($stmt->execute()) {
        echo "Novo usuário cadastrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    }

// Executar uma consulta de teste
$sql = "SELECT * FROM Usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Exibir os dados de cada linha
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["codigo_usuario"]. " - Nome: " . $row["nome"]. "<br>";
  }
}
$conn->close();

?>

