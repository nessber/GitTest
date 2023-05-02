<?php
// establecer la zona horaria a Madrid
date_default_timezone_set('Europe/Madrid');

// obtener la fecha actual
$hoy = date('Y-m-d');

// imprimir la fecha actual
echo "La fecha de hoy es: " . $hoy;

// obtener el mes actual
$mes_actual = date('m');

// imprimir el mes actual
echo "El mes actual es: " . $mes_actual;
?>