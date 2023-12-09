
<?php
    include "connect.php";
    function createRow(){
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fullName = $_POST =['fullname'];
            $query = "INSERT INTO users(email, password, fullName) VALUE('$email','$password','$fullName')";  
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("query failed !!!".mysqli_error());
            } else {
                echo "Record Create";
            }
        }
    }
?>