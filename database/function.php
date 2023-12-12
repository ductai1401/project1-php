
<?php


    include "connect.php";
    // function createRow(){
    //     global $conn;
    //     if(isset($_POST['submit'])){
    //         $email = $_POST['email'];
    //         $password = $_POST['password'];
    //         $fullName = $_POST['fullname'];
    //         $query = "INSERT INTO users(Email, Password, FullName) VALUES('$email','$password','$fullName')";  
    //         $result = mysqli_query($conn, $query);
    //         if(!$result){
    //             die("query failed !!!".mysqli_error());
    //         } else {
    //             echo "Record Create";
    //         }
    //     }
    // }

    // function readRows(){
    //     global $conn;
    //     $query = "SELECT * FROM users";
    //     $result = mysqli_query($conn, $query);
    //     if (mysqli_num_rows($result) > 0) {
    //         // output data of each row
    //         while($row = mysqli_fetch_assoc($result)) {
    //           echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //         }
    //       } else {
    //         echo "0 results";
    //       }

            // if(!$result){
            //     die("query failed !!!".mysqli_error());
            // } else {
            //     echo "Record Create";
            // }       
    // }

    function showAllData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("query failed".mysqli_erro());
        } 
        $i = 0;
        while($row = mysqli_fetch_assoc($result)) {
              $email = $row['Email'];
              $password = $row['Password'];
              $fullName = $row['FullName'];
              echo "<tr>
              <td>".$i++."</td>
              <td>".$email."</td>
              <td>".$fullName."</td>
              <td>".$password."</td>
              <td><a href = '#'/><i class='fa-solid fa-pen text-danger'></i></td>
              <td><a href = '#'/><i class=fa-solid fa-trash text-warning'></i></td>
              <tr>";
            }
        }



?>