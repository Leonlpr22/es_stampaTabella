<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella() {
            $numRig = rand(2, 5);
            $numCol = rand(2, 5);

            echo "<table style='border: 1px solid black; border-collapse: collapse;'>";

            // genera le righe
            for ($r = 0; $r < $numRig; $r++) {
                echo "<tr>";
                // genera colonne all'interno di ogni riga
                for ($c = 0; $c < $numCol; $c++) {
                    echo "<td style='border: 1px solid black; padding: 10px;'>($r,$c)</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }

        stampaTabella();
    ?>
</body>
</html>