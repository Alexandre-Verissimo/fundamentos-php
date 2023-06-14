<?php

$nome = 'Alexandre';
var_dump($nome);

echo "<hr>";

if(is_string($nome)):
  echo "É uma string";
else:
  echo "Não é uma string";
endif;

echo "<hr>";
/**** Compostos ****/

$carros = array("Gol", "Uno", "Camaro", 12, 22, 1.65, true);
var_dump($carros);

echo "<hr>";

/**** Object ****/
class Cliente {
  public $nome;
  public function atribuir_nome($nome) {
    $this->$nome = $nome;
  }
}

$cliente = new Cliente();
$cliente->atribuir_nome('Alexnadre');
var_dump($cliente);