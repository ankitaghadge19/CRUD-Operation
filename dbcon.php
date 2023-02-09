<?php

$con = mysqli_connect("localhost:3307", "root", "1234", "data");

if(!$con){
  die('Connection Failed'.mysqli_connect_error());
}

?>