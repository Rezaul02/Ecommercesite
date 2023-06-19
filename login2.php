<?php
if(isset($_POST['username'] ) && isset($_POST['password'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];

    $login="SELECT * FROM login WHERE username='$name' and password='$pass' ";
    $data= mysqli_query($con,$login);
exit();
    
}

else{
    header("location:index.html");
    exit();
}




?>




