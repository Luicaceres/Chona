<?php

//$con  = new mysqli("localhost","root","","cartbasic1");
$con  = new mysqli("127.0.0.1","jonapisc_1","jon102003123","jonapisc_cartbasic1");
   
if ($con->connect_error) {

    die("". $con->connect_error);
}
