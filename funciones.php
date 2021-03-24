<?php

/**
 * Calcula el IMC de un usuario
 * @author Ruber Rodríguez <ruber19@gmailcom>
 * @version 1.0
 * @param int $peso
 * @param int $estatura
 * @return int resultado IMC
 */
function calcularIMC ($peso, $estatura) {

    // IMC -> peso / (estatura)2
    $resultado = $peso / ($estatura * $estatura);
    return $resultado;
}

?>