<?php

// iniciação dos arrays
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

// lógica aqui...
$file = fopen("dados.dat", 'r');
while (!feof($file)) {
  $linha = fgets($file);

  if (is_numeric($linha)) {
    if ($linha > 0) {
      $numeros_positivos[] = $linha;
    } else if ($linha < 0) {
      $numeros_negativos[] = $linha;
    }
    continue;
  }

  if (str_contains($linha, 'TESTE')) {
    $textos_teste[] = $linha;
  } else {
    $textos[] = $linha;
  }
}
fclose($file);

// apresentação dos arrays
echo '<pre>';
print_r($numeros_positivos);
echo '<hr>';
print_r($numeros_negativos);
echo '<hr>';
print_r($textos);
echo '<hr>';
print_r($textos_teste);
