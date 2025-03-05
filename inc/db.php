<?php

$conn = mysqli_connect('localhost' , 'root' , 'root' , 'prog1');

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
}