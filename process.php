<?php
session_start();
include ('conn.php');
//Define variables//
if(isset($_POST['signUp'])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$contact1 = $_POST['contact1'];
$about = $_POST['about'];
$username = $_POST['username'];
$password = md5($_POST['pass_user']);
$pass_conf = $_POST['pass_conf'];
$date_added = date('Y-m-d H:i:s');
$name=substr(strtoupper($fullname),0,3);
$user_id= $name.mt_rand(1000000,9999999);

//Check if any detail (user*) already exists

try {
    $select= $conn->prepare("SELECT * FROM  `client_table` WHERE client_email='$email'");
    $select->execute();
   } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
   }
   if ($select->rowCount()>0) {
       header("location:index.php");
       $_SESSION['message_userExist'] = " <div class='alert alert-danger display-none' style='display: block;'>
       <button class='close' data-dismiss='alert'></button>
        Please This User Already Exist
         </div>";
   }
//    elseif(strlen($password) < 8){
//     header("location:index.php");
//        $_SESSION['message_passwordShort'] = " <div class='alert alert-danger display-none' style='display: block;'>
//        <button class='close' data-dismiss='alert'></button>
//         Password is too short
//          </div>";
// }

else{
try {
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql= "INSERT INTO `client_table`(`user_id`,`full_name`,`client_address`,`client_email`,`client_city`,`client_phone`,`client_otherPhone`,`client_about`,`username`,`pass_user`,`date_added`) VALUES(:1,:2,:3,:4,:5,:6,:7,:8,:9,:10,:11)";
   $stmt = $conn->prepare($sql);
//    $stmt->bindParam(':1', $app_no);
    $stmt->bindParam(':1', $user_id);
    $stmt->bindParam(':2', $fullname);
    $stmt->bindParam(':3', $address);
    $stmt->bindParam(':4', $email);
    $stmt->bindParam(':5', $city);
    $stmt->bindParam(':6', $contact);
    $stmt->bindParam(':7', $contact1);
    $stmt->bindParam(':8', $about);
    $stmt->bindParam(':9', $username);
    $stmt->bindParam(':10', $password);
    $stmt->bindParam(':11', $date_added);
    // $stmt->bindParam(':12', $date_added);
$inserted=$stmt->execute();
if($inserted){
    header("location:index.php");
    header("location:index.php");
    $_SESSION['message_registered'] = " <div class='alert alert-success display-none' style='display: block;'>
    <button class='close' data-dismiss='alert'></button>
     You Have Signed Up Successfully!<br>
     Please Log In Now.
      </div>";
}
}
catch (PDOException $e) {
    echo $e->getMessage();
        exit;
   }
}
}
if(isset($_POST['login'])){


            $username=$_POST['username'];
            $password=md5($_POST['pass_user']);

            $select= $conn->prepare("SELECT * FROM client_table WHERE username='$username' AND pass_user='$password'");
           $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            //$data=$select->fetch();
            if($select->rowCount() == 1){
    $result = $select->fetch(PDO::FETCH_ASSOC);
    $_SESSION["fullname"] = $result["full_name"];
    // $_SESSION["sec_level"] = $result["sec_level"];
    $_SESSION["user_id"] = $result["id"];
    header("location:profile.php");
}
elseif($password != $results['pass_user']){
header("location:index.php");
}
elseif(empty($password) || empty($username)){
$tym='2';
header("index.php?err=$tym");
}
elseif($password != $results["pass_user"]){
$tym='0';
header("location:index.php?err=$tym");
}
// elseif($pass !=  $results["pass_user"]){
// $tym='1';
// header("location:user_lock.php?err=$tym");
// }
// elseif($pass == $results["pass_user"]){
// header("location:index.php");
// }
}
?>


