<?php

$address = '222.255.168.21';
$port = 4011100;

if (($socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    // echo "socket created";
}

if(!socket_connect($socket, $address, 4000)){
    echo "socket connect error";
}
        
socket_write($socket, "svrlist\r\n");

// while(true) {
    // read a line from the socket
    $line = socket_read($socket, 1024, PHP_NORMAL_READ);
    if(substr($line, -1) === "\r") {
        socket_read($socket, 1, PHP_BINARY_READ);
    }

    if(!$line){
        echo "may chu k hoat dong";
    } else {
        echo "mau chu ok";
    }



socket_close($socket);