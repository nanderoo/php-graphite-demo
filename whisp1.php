<?php

$whispsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($whispsock, '127.0.0.1', 2003) or die('could not bind to address');

socket_write($whispsock, "whisp.rand.exectime ".rand(5,10)." ".time()."\n");
#print("whisp.rand.exectime ".rand(0.5,5)." ".time()."\n");

socket_close($whispsock);
