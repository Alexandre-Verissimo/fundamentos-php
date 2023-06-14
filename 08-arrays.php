<?php

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
// É necessário colocar os colchetes, pois se não p ´h´vai pensar que é uma variável e vai apagar o array setado anteriormente
$carros[] = "Amarok";

print_r($carros);
echo "<hr>";

echo count($carros);
echo "<hr>";

//Foreach
foreach ($carros as $item) {
  echo $item."<br>";
}

echo "<hr>";

// Array Associativo
$pessoa = ["nome" => "Alexandre", "altura" => 1.83, "idade" => 28 ];
$pessoa["Cidade"] = "João Pessoa";

foreach ($pessoa as $indice => $valor) {
  echo $indice.":".$valor."<br>";
}