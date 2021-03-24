<?php
include_once('conexion-bd.php');
include_once('funciones.php');

$result_bd = conexionBD();

$peso = 0;
$estatura = 0;

if (isset($_POST['estatura']) && isset($_POST['peso'])) {

    if ($_POST['estatura'] == '') {
        echo 'La estatura es obligatoria';
    }

    if ($_POST['peso'] == '') {
        echo 'El peso es obligatorio';
    }

    $estatura = strip_tags($_POST['estatura']);
    $peso = strip_tags($_POST['peso']);

    echo 'Estatura: '.$estatura;
    echo '<br>';
    echo 'Peso: '.$peso;
    echo '<br>';
    try {
        $resultado = calcularIMC($peso, $estatura);
    } catch (Exception $e) {
        // echo 'Error al realizar el proceso del calculo IMC';
        die('Error: '.$e->GetMessage());
    }
    
    echo 'Resultado:'.$resultado;

    $insert_datos = "INSERT INTO imc(peso, estatura) VALUES (?, ?)";
    $result_inserts ->prepare($insert_datos);
    $result_inserts -> execute(array($peso, $estatura));

    echo 'Datos registrados';

}






?>