<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    <title> Productos </title>
</head>
<body>

<table>
<tr><td> Nombre del articulo </td>
<?php

foreach($matrizProducts as $registro){

    echo "<tr><td" . $registro["nombre"] . "</td></tr>";
}

?>

</table>
</body>
</html>