<?php

$db = mysqli_connect("localhost:3309","root","","pet_shop");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>