<?php
$tabla_datos = array();
$indiceprimero_numero = "Primer numero";
$indicesegundo_numero = "Segundo numero";
$indiceResultado = "Resultado";
for ($row = 1; $row <= 10; $row++) {
    $valor1=$_POST["numero"];
    $valor2=$row;
    $resultado=$valor1*$valor2;
    echo "<li>".$resultado."</li>";
array_push($tabla_datos,$valor1,$valor2, $resultado);
};
for ($row2 = 0; $row2 < 10; $row2++) {
  echo "<p><b>Row number $row2</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$tabla_datos[$row2][$col]."</li>";
  }
  echo "</ul>";
}
?>

<html>
    <p>
        <?php echo $_POST["numero"]; ?>
    </p>
</html>

