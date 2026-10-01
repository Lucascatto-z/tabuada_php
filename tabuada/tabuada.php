<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Tabuada</h1>
    <hr>

    <?php 
    $numero = (int) $_POST['numero'];
    ?>

    <table>
        <thead>
            <tr>
                <th>Operação</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
        <?php
        /*
        for ($i=0; $i <= 10; $i++) 
        {
            $r = $numero * $i;
            echo "<tr>";
            echo "<td> $numero X $i </td>";
            echo "<td> $r </td>";
            echo "</tr>";
        }
        */

        $contador = 0;
        while ($contador <= 10) {
            $r = $numero * $contador;
            echo "<tr>";
            echo "<td>$numero x $contador</td>";
            echo "<td>$r</td>";
            echo "</tr>";
            $contador++;
        }
        ?>
        </tbody>
    </table>

    <a href="index.html" class="voltar">← Voltar</a>

</body>
</html>