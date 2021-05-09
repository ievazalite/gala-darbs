<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'comments');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}