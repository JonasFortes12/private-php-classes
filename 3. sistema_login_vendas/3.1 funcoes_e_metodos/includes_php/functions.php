<?php

// Arquivo para funções úteis do site

/**
 * Calcula um desconto de 10% sobre um valor.
 * @param float $valor O valor original.
 * @return float O novo valor com 10% de desconto.
 */
function calcular_desconto($valor) {
    $desconto_decimal = 0.10; // 10%
    $valor_do_desconto = $valor * $desconto_decimal;
    $valor_final = $valor - $valor_do_desconto;
    
    return $valor_final;
}

/**
 * Formata um número para o padrão de moeda Real (BRL).
 * @param float $valor O valor a ser formatado.
 * @return string O valor formatado como "R$ 1.234,56".
 */
function formata_valor_real($valor) {
    $valor_formatado = 'R$ ' . number_format($valor, 2, ',', '.');
    return $valor_formatado;
}

?>