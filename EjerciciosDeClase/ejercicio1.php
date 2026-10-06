<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Clase</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <table border="1">
        <tr>
            <th>a</th>
            <th>b</th>
            <th>Resultado</th>
        </tr>
            <?php
                $number =7;
                for($i = 0; $i<=10;$i++) :
            ?>
        <tr>
            <td><?= $number ?></td>
            <td><?= $i?></td>
            <td><?= $i * $number?></td>
        </tr>
        <?php 
        endfor;
        ?>
    </table>
    
    
</body>
</html>