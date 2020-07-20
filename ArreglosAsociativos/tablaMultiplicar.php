<?php
 
$tabla_datos
$numIni = $_GET["$PrimerNumero"];
$numFin = $_GET["$SegundoNumero"];
 
echo 'Primer Numero' .$NumIni.'<br/>';
echo 'Segundo Numero' .$NumFin.'<br/>';
 
for($contador=$NumIni; $contador=$NumFin; $contador++){
 
    echo 'Tabla del ' .$contador.'<br/';
    for($i=1; $i<=10; $i++){
       echo $contador.'*'.Si.'='.$contador*$i.'<br/>';
 
    }
    echo '<br/>';
    echo '<br/>';
}
 
?>
