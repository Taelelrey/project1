<?php
require_once('../database/connect.php');

function validate ($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['loginbtn'])){
  $uname = $_POST['uname'];
  $pass = $_POST['password'];
  $uname = validate ($uname) ;
  $pass  = validate ($pass);

  if (empty($uname)) {
    header("Location: login.php?error=User Name is required");
    exit();
  }else if(empty($pass)){
    header("Location: login.php?error=Password is required");
    exit();
  }else{
    $sql = "INSERT INTO user_login(emailAddress, passwd)VALUES('$uname', '$pass')";
    setData($sql);
  }

}else {
  header("Location:../pages/index.php");
  exit();
}

if (isset($_POST['signupbtn'])){
  $uname = $_POST['uname'];
  $pass = $_POST['password'];
  $cpass = $_POST['çpassword'];
  $uname = validate ($uname) ;
  $pass  = validate ($pass);

  if (empty($uname)) {
    header("Location: login.php?error=User Name is required");
    exit();
  }else if(empty($pass)){
    header("Location: signup.php?error=Password is required");
    exit();
  }else if(empty($cpass)){
    header("Location: signup.php?error=Please repeat your password");
  }else if($pass == $cpass){
    header("Location: signup.php?error=Passwords don't match");
  }else{
    $sql = "INSERT INTO user_signup(emailAddress, passwd)VALUES('$uname', '$pass')";
    setData($sql);
  }

}else {
  header("Location:../pages/index.php");
  exit();
}
 ?>
