<?php 

session_start();

//Register Customer
if (isset($_POST['regc'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

   $sql = "INSERT INTO `customers`(`Fullname`, `Email_Address`, `Phone_Number`, `Image`, `Password`) VALUES ('$fname','$email','$phone','$newImgName',md5('$password'))";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.html?customerregistration=success");
 }
}
}else{
  echo "Passwords do not match.";
 }
}

//Add An Auto
if (isset($_POST['addc'])) {
 $model = $_POST['model'];
 $quan = $_POST['quan'];
 $price = $_POST['price'];
 $desc = $_POST['desc'];
 // $cat = $_POST['cat'];
 $uid = $_POST['uid'];

 require_once 'dbconnection.inc.php';

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];
  $uploads_dir1 = 'document';
  $fileName1 = $_FILES["file"]["name"];
  $fileSize1 = $_FILES["file"]["size"];
  $tmpName1 = $_FILES["file"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  $validFileExtension = ['doc', 'docx', 'pdf', 'zip'];
  $fileExtension = explode('.', $fileName1);
  $fileExtension = strtolower(end($fileExtension));

  if (!in_array($imageExtension, $validImageExtension) && !in_array($fileExtension, $validFileExtension)) {
    echo "<script> alert('Invalid Image or Document Format!'); </script>";
  }else if(($fileSize > 10000000) || ($fileSize1 > 100000000)){
    echo "<script> alert('Image or Document is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

    $newfileName = uniqid();
    $newfileName .= '.' . $fileExtension;

    move_uploaded_file($tmpName1, "$uploads_dir1/$newfileName");

   $sql = "INSERT INTO `cars`(`Model`, `User_ID`, `Quantity`, `Description`, `Category`, `Price`, `Image`, `Document`) VALUES ('$model','$uid','$quan','$desc','','$price','$newImgName', '$newfileName')";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php?addcar=success");
 }
}
}

//Delete Functions


        if($_REQUEST['action'] == 'deleteAu' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `cars` WHERE `Car_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?deletcar=success");
        }

        if($_REQUEST['action'] == 'deleteC' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `customers` WHERE `Customer_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deletecustomer=success");
        }

//Update Functions

        if(isset($_POST['acceptC'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_POST['cid'];
        $gi = $_POST['index'];
        $fine = $_POST['fine'];                
        $sql = "UPDATE `cars` SET `Status`='Accepted', `Green_Index` = '$gi', `Fee` = '$fine' WHERE `Car_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?updateorder=success");
        }

        if($_REQUEST['action'] == 'denyC' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `cars` SET `Status`='Denied' WHERE `Car_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?updateorder=success");
        }

        if($_REQUEST['action'] == 'payC' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `cars` SET `Status`='Paid For' WHERE `Car_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?updateorder=success");
        }

        if($_REQUEST['action'] == 'completeC' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $sql = "UPDATE `cars` SET `Status`='Completed' WHERE `Car_ID`='$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?updateorder=success");
        }

//Update Administrator
if (isset($_POST['upa'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $aid = $_POST['aid'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {

   $sql = "UPDATE `admin` SET `Fullname`='$fname',`Email_Address`='$email',`Password`=md5('$password') WHERE `Administrator_ID`='$aid'";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php");
}else{
  echo "Passwords do not match.";
 }
}

//Update Customer
if (isset($_POST['upc1'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $cid = $_POST['cid'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
   $sql = "UPDATE `customers` SET `Fullname`='$fname',`Phone_Number`='$phone',`Email_Address`='$email',`Password`=md5('$password') WHERE `Customer_ID`='$cid'";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php");
 }else{
  echo "Passwords do not match.";
 }
}

 ?>