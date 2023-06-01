<?php
    class operacion
    {
        public function suma(int $number1, int $number2): int{
            return ($number1 + $number2);
        }
        public function resta(int $number1, int $number2): int{
            return ($number1 - $number2);

        }
        public function multiplicacion(int $number1, int $number2): int{
            return ($number1 * $number2);

        }
        public function division(int $number1, int $number2):int{
            if ($number2 == 0) {
                echo ("no se puede dividir entre 0");
            } else{
                return ($number1 / $number2);
            }
        }
        public function potenciacion(int $number1, int $number2): int{
            return ($number1 ** $number2);
        }
    };

    if (isset($_POST)) {
       $number1 = $_POST["number1"];
       $number2 = $_POST["number2"];
       settype($number1, "integer");
       settype($number2, "integer");
       $opearcion = $_POST["op"];
       $calculo = new operacion();
       $case = match($opearcion){
            "+" => $calculo->suma($number1, $number2),
            "-" => $calculo->resta($number1, $number2),
            "*" => $calculo->multiplicacion($number1, $number2),
            "/" => $calculo->division($number1, $number2),
            "**"=> $calculo->potenciacion($number1, $number2)
       };
    };
    echo "El resultado de su operación es". "" .$case;
?>