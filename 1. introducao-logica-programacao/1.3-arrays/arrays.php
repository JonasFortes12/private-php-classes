<?php

// Arrays Indexados

//           0         1         2
// $frutas = ['Maçã', 'Banana', 'Laranja'];


// $notas = [
//     10,
//      8, 
//      7, 
// ];

// array_push($notas, 4.4);


// echo $notas[3]; //4.4

// array_pop($notas);

// echo "\n";

// echo $notas[2];



// Arrays Associativos

$usuario = [
// key(chave) => Valor
    "Nome" => "João", 
    "Idade" => 30,  
    "Email" => "joao@gmail.com", 
];
$usuario["Telefone"] = "088 65473921";

echo $usuario[0];

// unset($usuario["Idade"]); // removendo o valor 30 do meu array 


// repeticao: 4 vezes -> $u = "João"; $u = 30
foreach($usuario as $u ){
    echo "$u \n";
}






