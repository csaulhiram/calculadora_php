<?php

/**
 * Hacer una interfaz de usuario con dos inputs y cuatro botones, 
 * uno para sumar, restar, dividir y multiplicar
 */



if ((isset($_GET['number1'])) && (isset($_GET['number2'])) && (isset($_GET['operacion']))) {

       $numbrer1 = (int) $_GET['number1'];
       $numbrer2 = (int) $_GET['number2'];
       $operacion = $_GET['operacion'];

       echo $operacion;
       if ($operacion == 'sumar') {
              $resultado = $numbrer1 + $numbrer2;
       } elseif ($operacion == 'restar') {
              $resultado = $numbrer1 - $numbrer2;
       } elseif ($operacion == 'multiplicar') {
              $resultado = $numbrer1 * $numbrer2;
       } elseif ($operacion == 'dividir') {
              $resultado = $numbrer1 / $numbrer2;
       }


       header('location:index.php?resultado=' . $resultado);
} else {
       header("refresh:5; URL=index.php");
}
