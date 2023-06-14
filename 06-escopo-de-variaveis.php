<?php

$nome = "Alexandre Veríssimo";
$a = 1;
$b = 2;
$c = 3;


function exibeNome() {
  global $nome;
  echo $nome;
}

exibeNome();
echo "<hr>";
/////////////////////

function exibeCidade() {
  global $cidade;
  $cidade = "João Pessoa";
}

exibeCidade();
echo $cidade;
echo "<hr>";
////////////////////

function soma() {
  echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();