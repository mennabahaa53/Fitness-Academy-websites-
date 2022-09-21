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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];




$con = new mysqli( 'localhost' , 'root'  ,'',  'vigor2db' ) ;

if($con) {
    
    $sql=" insert into users ( username,email,password,mobile )values('$username','$email','$password','$mobile') " ;
    $result=mysqli_query($con,$sql);
    if($result){
       
        echo "<h1> Account Created Successfully </h1> ";
        echo "<a href='Data.php'> Click Here To Login </a>" ;
        

    }else{
        die(mysqli_error($con));

    }
    

} else{
    die (mysqli_error($con)) ;

}

}



?>
<body>
</html>