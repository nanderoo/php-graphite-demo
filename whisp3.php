<?php

$whispsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($whispsock, '127.0.0.1', 2003) or die('could not bind to address');

$measurement1 = "whisp.measurement1.value ".rand(16,18)." ".time();
$measurement2 = "whisp.measurement2.value ".rand(19,21)." ".time();
$measurement3 = "whisp.measurement3.value ".rand(22,24)." ".time();
$measurement4 = "whisp.measurement4.value ".rand(25,28)." ".time();

socket_write($whispsock, implode("\n", array($measurement1, $measurement2, $measurement3, $measurement4)));
#print(implode("\n", array($measurement1, $measurement2, $measurement3, $measurement4)));

socket_close($whispsock);
