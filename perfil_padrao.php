<?php
$servidor = "localhost";     // HOST do banco
$usuario = "root";           // Nome de usuário do banco
$senha = "";                 // Senha
$banco = "guia_pet";     

$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Pega o ID da raça
$id = $_GET['id'] ?? 0;

// Busca a raça no banco
$stmt = $conn->prepare("SELECT * FROM RACAS WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$raca = $resultado->fetch_assoc();

if (!$raca) {
    echo "<p>Raça não encontrada.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Perfil da Raça - <?= htmlspecialchars($raca['NOME']) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .backgroundHome {
      background-image: url('img/bbb.png');
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
    }

    .btn-voltar {
      position: absolute;
      top: 20px;
      left: 20px;
      background-color: #00156a;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
    }

    .btn-voltar:hover {
      background-color: #40739e;
    }

    .container {
      display: flex;
      align-items: self-start;
      gap: 40px;
      flex-wrap: wrap;
    }

    .cor_font {
      color: #000cac;
      margin-top: 5px;
      font-size: 25px;
    }

    .img-box img {
      width: 450px;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-top: 250px;
      margin-left: 45px;
    }

    .info {
      margin-top: 170px;
      max-width: 700px;
    }

    .info2 {
      margin-top: 40px;
      max-width: 700px;
    }

    .info h2, .info2 h2 {
      font-size: 25px;
      color: #000;
      margin-top: 0;
    }

    .info p, .info2 p {
      text-align: justify;
      line-height: 1.6;
      font-size: 20px;
      margin-bottom: 20px;
    }

    /* NOVO: duas colunas */
    .duas-colunas {
      display: flex;
      gap: 40px;
      margin-top: 20px;
    }

    .coluna {
      width: 50%;
    }

    .coluna h1 {
      font-size: 25px;
      margin-bottom: 10px;
    }

    .coluna p {
      font-size: 20px;
      line-height: 1.6;
      text-align: justify;
    }
  </style>
</head>
<body>
  <section class="backgroundHome">
    <a href="index.html" class="btn-voltar">Página inicial</a>

    <div class="container">
      
      <div class="img-box">
        <img src="<?= htmlspecialchars($raca['IMAGEM_URL']) ?>" alt="<?= htmlspecialchars($raca['NOME']) ?>">
        <div class="cor_font">
          <center><h1><?= htmlspecialchars($raca['NOME']) ?></h1></center>
        </div>
      </div>

      <div>
        <div class="info">
          <h1>DESCRIÇÃO</h1>
          <p><?= nl2br(htmlspecialchars($raca['DESCRICAO'])) ?></p>
        </div>

        <div class="info2">
          <h1>CARACTERÍSTICAS</h1>
          <p><?= nl2br(htmlspecialchars($raca['CARACTERISTICAS'])) ?></p>
        </div>

        <!-- NOVO BLOCO: DOENÇAS E VIDA -->
        <div class="duas-colunas">

          <div class="coluna">
            <h1>PRINCIPAIS DOENÇAS</h1>
            <p><?= nl2br(htmlspecialchars($raca['DOENCAS'])) ?></p>
          </div>

          <div class="coluna">
            <h1>MÉDIA DE VIDA</h1>
            <p><?= nl2br(htmlspecialchars($raca['media_VIDA'])) ?></p>
          </div>

        </div>

      </div>
    </div>
  </section>
</body>
</html>
