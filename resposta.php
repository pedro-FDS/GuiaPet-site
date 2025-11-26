<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    html, body {
      height: 100vh;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      color: #0c1c83;
    }

    .home-button {
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


    .resultado-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      padding: 20px;
    }

    .raca-card {
      width: 400px;
      text-align: center;
      background-color: #f2f2f2;
      border-radius: 12px;
      margin-top: 250px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .raca-card img {
      width: 100%;
      height: auto;
      border-radius: 12px 12px 0 0;
      transition: transform 0.3s ease;
    }

    .raca-card:hover {
      transform: scale(1.05);
    }

    .raca-card p {
      margin: 10px 0;
      font-size: 18px;
      font-weight: bold;
      color: #00145D;
    }

    .raca-card a {
      text-decoration: none;
      color: inherit;
      display: block;
    }

   .backgroundHome {
  background-image: url('img/ddd.png');
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  position: relative;
}

  </style>
</head>


    



<?php
echo"<body>";
echo"  <section class='backgroundHome'>";
echo"<a href='index.html' class='home-button'>Página inicial</a>";

$servidor = "localhost";     // HOST do banco
$usuario = "root";             // Nome de usuário do banco
$senha = "";        // Substitua aqui pela sua senha correta
$banco = "guia_pet";     
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
// Processa as respostas quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe as respostas do formulário
    $porte = $_POST['porte'] ?? '';
    $pelagem = $_POST['pelagem'] ?? '';
    $energia = $_POST['energia'] ?? '';
    $outrosseres = $_POST['outrosseres'] ?? '';
    $clima = $_POST['clima'] ?? '';
    $latido = $_POST['latido'] ?? '';



//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------

    // PORTE PEQUENO

    // Porte pequeno, pelagem curta, energia alta
 if (
        $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
        && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
    ) {
        $racas = ['Pinscher', 'Chihuahua', 'Fox Paulistinha'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
        $racas = ['Pinscher', 'Chihuahua', 'Fox Paulistinha'];
        
    }
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
      $racas = ['Border Terrier', 'Galgo Italiano', 'Jack Russell'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
      $racas = ['Boston Terrier', 'Galgo Italiano', 'Jack Russell'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
        $racas = ['Pinscher', 'Chihuahua', 'Fox Paulistinha'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
        $racas = ['Pinscher', 'Chihuahua', 'Fox Paulistinha'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Basenji', 'Perro Peruano Sem Pelo', 'Jack Russell'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Basenji', 'Perro Peruano Sem Pelo', 'Jack Russell'];
}


// Porte pequeno, pelagem curta, energia média
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
        $racas = ['Dachshund', 'Portuguese Podengo pequeno'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
   $racas = ['Dachshund', 'Portuguese Podengo pequeno'];

}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
       $racas = ['Bulldog Francês'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Bulldog Francês'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Dachshund', 'Portuguese Podengo pequeno'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Dachshund', 'Portuguese Podengo pequeno'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Cirneco Dell Etna'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
     $racas = ['Cirneco Dell Etna', 'Bulldog Francês'];

}


// Porte pequeno, pelagem curta, energia baixa
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Basset Hound', 'Griffon'];
}

else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Pug', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Pug', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
   $racas = ['Pug', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Basset Hound', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Basset Hound', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Basset Hound', 'Griffon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
   $racas = ['Pug', 'Griffon'];
}


//-------------------------------------------------------------------------------------------------------------------------


// Porte pequeno, pelagem longa, energia alta
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Poodle Toy', 'Corgi', 'Papillon'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Poodle Toy', 'Corgi', 'Spitz'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
     $racas = ['Havanês', 'Russian Tsvetnaya Bolonka', 'Coton de Tulear'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Havanês', 'Japanese Chin'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Yorkshire', 'Poodle Toy', 'Corgi'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Yorkshire', 'Spitz', 'Corgi'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Havanês', 'Russian Tsvetnaya Bolonka', 'Coton de Tulear'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Havanês', 'Japanese Chin'];
}


// Porte pequeno, pelagem longa, energia média
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Shitzu', 'Maltês', 'Chihuahua pelo longo', 'Dachshund pelo longo'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Shitzu', 'Maltês', 'Chihuahua pelo longo', 'Dachshund pelo longo'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Skye Terrier', 'Cairn Terrier'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Skye Terrier', 'Cairn Terrier'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Shitzu', 'Lhasa Apso', 'Chihuahua pelo longo', 'Dachshund pelo longo'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Shitzu', 'Lhasa Apso', 'Chihuahua pelo longo', 'Dachshund pelo longo'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Skye Terrier', 'Pequinês'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Skye Terrier', 'Pequinês'];
}


// Porte pequeno, pelagem longa, energia baixa
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Bichon Frisé'];
}

else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Bichon Frisé'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Cavalier King Charles Spaniel'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
   $racas = ['Cavalier King Charles Spaniel'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Cavalier King Charles Spaniel'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Cavalier King Charles Spaniel'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Affenpinscher'];
}
else if (
    $porte == 'pequeno' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
   $racas = ['Affenpinscher'];
}



//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------



// PORTE MÉDIO

 // Porte médio, pelagem curta, energia alta
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Beagle'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Beagle'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {

    $racas = ['Boxer', 'Whippet'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Whippet'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Dálmata', 'Pastor Belga Malinois', 'Beagle'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
   $racas = ['Dálmata', 'Pastor Belga Malinois', 'Beagle'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Boxer', 'Whippet'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Whippet'];
}


// Porte médio, pelagem curta, energia média
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Australiano'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Australiano','Spitz Finalndês'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['American Bully'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['American Bully','Elkhound Norueguês'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Australiano','Dogue Brasileiro'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Australiano'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['American Bully'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['American Bully', 'Buldogue Campeiro'];
}


// Porte médio, pelagem curta, energia baixa
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Staffordshire Bull Terrier'];
}

else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
   $racas = ['Bulldog Inglês'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Staffordshire Bull Terrier'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Bulldog Inglês'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Staffordshire Bull Terrier'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Bulldog Inglês'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas =['Bull Terrier'];
}
else if (
    $porte == 'medio' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Bulldog Inglês','Bull Terrier'];
}


//------------------------------------------------------------------------------------------------------------------------------



 // Porte médio, pelagem longa, energia alta
else  if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Border Collie', 'Pastor de Shetland', 'Cocker'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Border Collie', 'Pastor de Shetland', 'Cocker'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Hound Afegão', 'Collie Barbado'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Hound Afegão', 'Collie Barbado'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Border Collie', 'Pastor de Shetland', 'Pastor Australiano'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Border Collie', 'Pastor de Shetland', 'Pastor Australiano'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Hound Afegão', 'Collie Barbado'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Hound Afegão', 'Collie Barbado'];
}


// Porte médio, pelagem longa, energia média
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Mudi', 'Cão Pastor dos Pirenéus'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Mudi', 'Cão Pastor dos Pirenéus','Poodle médio'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Eurasier', 'Cão Pastor dos Pirenéus','Poodle médio'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Eurasier', 'Cão Finlandês da Lapónia','Hovawart'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Mudi', 'Cão Pastor dos Pirenéus'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Mudi', 'Cão Pastor dos Pirenéus'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Eurasier', 'Cão Finlandês da Lapónia','Hovawart'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Eurasier', 'Cão Finlandês da Lapónia','Hovawart'];
}


// Porte médio, pelagem longa, energia baixa
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Keeshond'];
}

else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Keeshond'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Komondor'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Komondor'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Komondor'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Chow Chow', 'Komondor'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Keeshond'];
}
else if (
    $porte == 'medio' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Keeshond'];
}


//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------

// PORTE GRANDE

 // Porte grande, pelagem curta, energia alta
 else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Labrador'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Labrador'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Greyhound', 'Galgo Espanhol', 'Weimaraner', 'Pointer Inglês'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Weimaraner', 'Pointer Inglês'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Rottweiler', 'Doberman'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Rottweiler', 'Doberman'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Dogo Argentino', 'Pointer Inglês'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Cane Corso', 'Pointer Inglês'];
}


// Porte grande, pelagem curta, energia média
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Suiço', 'Rhodesian Ridgeback'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Suiço', 'Dogue de Bordeaux'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Braco Alemão', 'Cão de São Humberto'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Braco Alemão', 'Cão de São Humberto', 'Dogue de Bordeaux'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Suiço', 'Rhodesian Ridgeback'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Boiadeiro Suiço', 'Dogue de Bordeaux'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Braco Alemão', 'Cão de São Humberto'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Braco Alemão', 'Cão de São Humberto', 'Dogue de Bordeaux'];
}


// Porte grande, pelagem curta, energia baixa
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Dogue Alemão', 'Mastino Napolitano'];
}

else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Mastino Napolitano'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Mastiff'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Mastiff'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Mastiff','Fila Brasileiro'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Mastiff','Fila Brasileiro','Shar-pei'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Fila Brasileiro'];
}
else if (
    $porte == 'grande' && $pelagem == 'curto' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Fila Brasileiro'];
}






 // Porte grande, pelagem longa, energia alta
 else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Golden Retriever', 'Collie'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Golden Retriever', 'Collie','Husky Siberiano'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Setter Irlandes'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Setter Irlandes'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Pastor Alemão', 'Pastor Belga'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Pastor Alemão', 'Pastor Belga','Husky Siberiano','Schnauzer Gigante'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Setter Irlandes'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'alta'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Akita Inu'];
}


// Porte grande, pelagem longa, energia média
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Briard', 'Wolfhound irlandês'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Briard', 'Samoieda', 'Bernese'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
   $racas = ['Briard'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Briard', 'Terra Nova', 'Bernese'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Akbash'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Akbash','Borzoi'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['Briard', 'Wolfhound irlandês'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'media'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['Wolfhound irlandês', 'Terra Nova', 'Bernese'];
}


// Porte grande, pelagem longa, energia baixa
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Cão de Montanha dos Pirinéus'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Cão de Montanha dos Pirinéus'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['São Bernardo'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'sim' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['São Bernardo'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'nao'
) {
    $racas = ['São Bernardo'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'nao'
) {
    $racas = ['São Bernardo'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'quente' && $latido == 'sim'
) {
    $racas = ['Cão de Montanha dos Pirinéus'];
}
else if (
    $porte == 'grande' && $pelagem == 'longo' && $energia == 'baixa'
    && $outrosseres == 'nao' && $clima == 'frio' && $latido == 'sim'
) {
    $racas = ['Cão de Montanha dos Pirinéus'];
}


        echo "<div class='resultado-grid'>";

        foreach ($racas as $nomeRaca) {
            // Consulta a raça no banco
            $stmt = $conn->prepare("SELECT * FROM RACAS WHERE NOME = ?");
            $stmt->bind_param("s", $nomeRaca);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($row = $resultado->fetch_assoc()) {
                $id = $row['ID'];
                $nome = $row['NOME'];
                $img = $row['IMAGEM_URL'];

               echo "<div class='raca-card'> <a href='perfil_padrao.php?id=$id'> <img src='$img' alt='$nome'> <p>$nome</p> </a> </div>";
            }
        }

        echo "</div>";
    }
    echo"</section>";

?>
    </body>
</head>
</html>