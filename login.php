<?php
$host="localhost";
$name="root";
$password="";
$db="login";
$con=new mysqli($host, $name, $password,$db);
if($con){
    echo ("This process is successfull ");
}else{
    echo("this process is not Success");
}

?>