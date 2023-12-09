<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recoger los datos del formulario
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            // Realizar la operación
            switch ($operation) {
                case "SUMA":
                    $result = $num1 + $num2;
                    break;
                case "RESTA":
                    $result = $num1 - $num2;
                    break;
                case "MULTIPLICACION":
                    $result = $num1 * $num2;
                    break;
                case "DIVISION":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: división por cero";
                    }
                    break;
                default:
                    $result = "Operación no válida";
                    break;
            }

            // Mostrar el resultado
            echo "<h2>Resultado de la operación:</h2>";
            echo "<p>$num1 $operation $num2 = $result</p>";
        } else {
            // Si se accede directamente a este archivo sin enviar el formulario
            echo "<h2>Error</h2>";
            echo "<p>Acceso no permitido.</p>";
        }
        ?>
    </div>
</body>
</html>
