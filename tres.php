<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2" cellpadding='5' cellspacing='5' align='center'>
        <?php
        $filas = 5;
        $col = 5;
        for ($f = 0; $f < $filas; $f++) {
            echo "<tr>\n";
            for ($c = 0; $c < $col; $c++) {
                echo "<td>Celda[$f][$c]</td>\n";
            }
            echo "</tr>\n       ";
        }
        ?>
    </table>
    <hr>
    <?php
    //tabla de multiplcar de $num
    $num = 7;
    echo "<table align='center' border='3'>";
    echo "<tr>"; //Primera fila, la del título
    echo "<td colspan='5' style='background-color:black; color:white'>";
    echo "Tabla de Multiplicar de: $num";
    echo "</td>";
    echo "</tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>X</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>" . $i * $num . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <!-- Tablero de ajedrez -->
    <hr>
    <table border="2" cellpadding='5' cellspacing='5' align='center'>
        <?php
        for ($f = 0; $f < 8; $f++) {
            echo "<tr>\n";
            for ($c = 0; $c < 8; $c++) {
                if (($f + $c) % 2 != 0) {
                    echo "<td style='background-color:black; color:white'>N</td>\n";
                } else {
                    echo "<td>B</td>";
                }
            }
            echo "</tr>\n       ";
        }

        ?>
    </table>







</body>

</html>