<?php

// Em php temos 3 estruturas principais:
// for , while, foreach

/*O laço for: Usado quando eu sei 
 exatamente quantas vezes quero executar
 um bloco de código */
// 1º parâmtro: Inicialização
// 2º parâmetro: Condição(de parada)
// 3º parâmetro: Incremento

 for($i = 0; $i < 5; $i=$i+1 ){
    echo "\nNúmero: $i";
 } 

//  i=0 -> i=1 -> i=2 -> i=3 -> i=4 : i=5


/**
 * O laço While: Eu uso quando eu não sei quantas vezes
 * o bloco de código deve ser repetido.
 * 1 parâmetro: A condicão de parada.
 */
 $i = 0;
 while($i < 5) {
    echo "\nNumero: $i";
   $i = $i + 1;
 }

/**
 * A estrura foreach é usada para [iterar] sobre uma
 * lista/array de elementos ou objetos.
 * É usada quando eu preciso percorrer/"varrer"
 * 
 */

$arrayFrutas = ["maça", "banana", "uva"];
        //  0        1        2


foreach($arrayFrutas as $fruta){
    echo "\nFruta atual: $fruta ";
}

