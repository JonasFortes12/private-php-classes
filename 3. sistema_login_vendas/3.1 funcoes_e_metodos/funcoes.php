

<?php 

 //Fazer uma função para somar valores:

function soma($valor1, $valor2) {

    $resultado = $valor1 + $valor2;

    return $resultado;    
}

$frutas = ['Maçã', 'Banana', 'Abacate', 'Uva'];
$sucos = ['laranjada', 'abacatada', 'vitamina de morango'];
$bolos = ['Bolo de cenoura', 'bolo de milho', 'bolo de brigadeiro'];

function imprimir_lista_elementos($lista){
    foreach($lista as $item){
        echo "$item |";
    }
    echo "\n";
}

imprimir_lista_elementos($frutas);
imprimir_lista_elementos($bolos);
imprimir_lista_elementos($sucos);

?>