<?php
$userSelection = "";
echo "=====[Calculadora]=====\n";

# No conseguí poder usar/instalar la función `readline` en Linux para obtener inputs del usuario
# así que encontré esto que la 'simula'
# https://stackoverflow.com/questions/23238378/call-to-undefined-function-readline
if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}

# Esta función en vez de retornar un valor hace uso de la variable global
function multiplicar(int $a, int $b) {
    global $multiResultado;
    $multiResultado = $a;
    $acc = 1;

    while ($acc < $b) {
        $multiResultado += $a;
        ++$acc;
    }
}

function restar(int &$a, int &$b) {
    return $a - $b;
}

function sumar(int $a, int $b) {
    return $a + $b;
}

$sumResult = null;

while ($userSelection !== "salir") {
    # Requiere la extensión readline 
    # https://php.watch/versions/8.1/php-a-interactive-readline#enable-readline
    $userSelection = readline("Elija una opción (suma,resta,multiplicacion,salir): ");

    switch ($userSelection) {
        case 'multiplicacion':
            $input1 = readline("Escriba el primer operando: ");
            $input2 = readline("Escriba el segundo operando: ");

            multiplicar($input1, $input2);

            echo "Resultado: $multiResultado\n";
            break;
        case 'suma':
            $input1 = readline("Escriba el primer operando: ");
            $input2 = readline("Escriba el segundo operando: ");

            $resultado = sumar($input1, $input2);
            echo "Resultado: $resultado\n";
            break;
        case 'resta':
            $input1 = readline("Escriba el primer operando: ");
            $input2 = readline("Escriba el segundo operando: ");

            $resultado = restar($input1, $input2);
            echo "Resultado: $resultado \n";
            break;
        case 'salir':
            break;
        default:
            echo "Error, Opción no válida.";
            break;
    }
}

echo "Saliendo...\n";
?>