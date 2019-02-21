<?php

$pessoas = array();
$carro = array();


array_push($pessoas, array(
    'nome'=>'Alinario',
    'idade'=>21

));

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>28

));

array_push($carro, array(
    'marca' => 'Volkswagen',
    'modelo' => 'Saveiro',
    'ano' => 2018

));

if($pessoas [0]){
    echo "Esse é o Alinario"."<br>";
    print_r($pessoas [0])."<br>";
}
if ($carro [0]) {
    echo "Esse é o Carro do Alinário"."<br>";
    print_r($carro [0]) ."<br>";
 
}else{
    echo "Nenhum";
}

?>