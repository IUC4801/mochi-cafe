<?php
$con = new mysqli("sql203.epizy.com","epiz_27647002","e24iDMcj0f8NrU","epiz_27647002_cafe");

// "infinity@123"
  
// $con=mysqli_connect('localhost:3307','root');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
    // if($con)
    // {
    //     echo "Connection successful";
    // }
    // else{
    //     echo "Not connected";
    // }

    // mysqli_select_db($con,'coffee'); //cafe

    $user=$_POST['user'];
    $mail=$_POST['mail'];
    $message=$_POST['message'];

    $query= "insert into userinfo (user,mail,message) 
    values ('$user','$mail','$message')";

    echo "$query";
    if ($con->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
            echo "Error: " . $query . "<br>" . $con->error;
    }

    // echo "$query";
    // mysqli_query($con,$query);

    header('location:index.php');
?>