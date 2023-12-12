
<?php
    
    function createRow(){
        include "connect.php";
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fullName = $_POST =['fullname'];
            $query = "INSERT INTO users(email, password, fullName) VALUES('$email','$password','$fullName')";  
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("query failed !!!".mysqli_error());
            } else {
                echo "Record Create";
            }
        }
    }
?>