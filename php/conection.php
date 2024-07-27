<?php

$con  = new mysqli("localhost","root","","cartbasic1");

   
if ($con->connect_error) {

    die("". $con->connect_error);
}
