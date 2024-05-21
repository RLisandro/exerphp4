<?php
$valor= $_POST['porcento'];
$cal_1= $valor / 100;
$cal_2 =$cal_1 * 15;
print_r("Portanto, 15% de ".$valor. "  é: ".$cal_2.  " %.")


?>