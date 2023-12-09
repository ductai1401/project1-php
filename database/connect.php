<?php 
    $conn = mysqli_connect('localhost', 'root' ,'');
        if(!$conn){
            die("connect failds");
        }
    if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root' ,'');
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($conn){
            if($email == "admin@gmail.com"){
                if($password == "123"){
                    echo "<br> login success";
                } else {
                    echo "<br> password inconnect ";
                }
            }
        } else {
            echo "<br> password inconnect ";
        }
    }
?>