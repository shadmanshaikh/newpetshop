<?php

$db = mysqli_connect("localhost:3309","root","","staff");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>