<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];
    $module = $_POST[''];    
    $a = 0;
    $c = 1;

         $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Administrator_ID'];

                echo "Login Succesful.";
                header("Location: index.php");
            }else{
                echo "Incorrect Password.";
            }
        }else{

         $sql = "SELECT * FROM `customers` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['custname'] = $row['Customer_ID'];

                echo "Login Succesful.";
                header("Location: index1.php");
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "Customer does not exist.";
        }
}
}
           
?>
