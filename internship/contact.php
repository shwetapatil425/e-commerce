<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="site";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comments=$_POST['desc'];
    $conn=mysqli_connect($servername,$username,$password,$database);
    $sql="INSERT INTO `contact` ( `name`, `email`,`comments`) VALUES ('$name', '$email','$comments');";
    $result=mysqli_query($conn,$sql);
    
?>