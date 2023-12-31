<?php

//declare(strict_types=1);
class Calculadora{

    private int $operando1;
    private int $operando2;
    private string $operacion;

    public function __construct($operando1, $operando2, $operacion){
        $this->operando1=$operando1;
        $this->operando2=$operando2;
        $this->operacion=$operacion;
    }

    public function get_operando1(){
        return $this->operando1;
    }

    public function set_operando1(int $operando1){
        $this->operando1 = $operando1;
    }

    public function get_operando2(){
        return $this->operando2;
    }

    public function set_operando2(int $operando2){
        $this->operando2 = $operando2;
    }

    public function get_operacion(){
        return $this->operacion;
    }

    public function sumar(int $operando1, int $operando2){
            $resultado = $operando1 + $operando2;
            return $resultado;
    }       

    function restar($operando1, $operando2){
        $resultado = $operando1 - $operando2;
        return $resultado;
    }

    function multiplicar(int $operando1, int $operando2){
        $resultado = $operando1 * $operando2;
        return $resultado;
    }

    function dividir($operando1, $operando2){
            if ($operando2 > 0){
                $resultado = $operando1 / $operando2;
                return $resultado;       
            } elseif ($num2 <= 0){
                return none;
            }    
    }

    public function validar(){
        $operando1 = $this->get_operando1();
        $operando2 = $this->get_operando2();
        $operacion = $this->get_operacion();
        if ($operacion == "suma"){
            echo $this->sumar($operando1, $operando2);
        } elseif ($operacion == "resta"){
            echo $this->restar($operando1, $operando2);
        } elseif ($operacion == "multiplicacion"){
            echo $this->multiplicar($operando1, $operando2);
        } elseif ($operacion == "division"){
            echo $this->dividir($operando1, $operando2);
        }
    }

}

$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$operacion = $_POST['operacion'];

$nuevo = new Calculadora($num1, $num2, $operacion);

$nuevo->validar();



?>