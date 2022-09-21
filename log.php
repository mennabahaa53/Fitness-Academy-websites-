<!DOCTYPE html>
<html>
<head>
    <meta charset="UtF-8" />
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Vigor Fitness Academy </title>
    <meta name="Description" content="This is our fitness academy " />
    <link rel="stylesheet " href="co.css">
</head>
<body>


<?php

    $username=$_POST['username'];

    $password=$_POST['password'];
   
$con = new mysqli( 'localhost' , 'root'  ,'',  'vigor2db' ) ;
if($con) {
    
    $sql= " SELECT  username,password FROM users WHERE username='$username'and password='$password' " ;
    $result=mysqli_query($con,$sql);

$count= mysqli_num_rows($result);

    if($count == 1){
        header('Location:index.html');
       

    }else{
        echo "<h1> Invalid Login </h1> ";
        echo "<a href='Data.php'> Click Here To Login in or register if you do not have account </a>" ;

    }
    
} else{
    die (mysqli_error($con)) ;

}

?>
<body>
</html>