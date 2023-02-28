<?php

$erro = "";
$sucesso = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (empty($_POST['text_valor'])) {
    $erro = "Campo de texto vazio.";
  } else {
    $valor = $_POST['text_valor'];

    if (is_numeric($valor)) {
      $file = fopen('dados_numericos.txt', 'a');
      fputs($file, $valor . PHP_EOL);
      fclose($file);
      $sucesso = "Valor numérico adicionado com sucesso.";
    } else if (is_string($valor)) {
      $file = fopen('dados_string.txt', 'a');
      fputs($file, $valor . PHP_EOL);
      fclose($file);
      $sucesso = "Valor string adicionado com sucesso.";
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Nível 1 - Exercício 04</title>
</head>

<body>

  <form action="index.php" method="post">
    <input type="text" name="text_valor">
    <input type="submit" name="submeter">
  </form>

  <div>
    <?= !empty($erro) ? $erro : $sucesso ?>
  </div>


</body>

</html>