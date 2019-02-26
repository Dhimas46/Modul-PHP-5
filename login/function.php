<?php
function do_login($username, $password) {

  //cek kondisi jika username dan password Salah
  if($username != "admin" || $password != "admin123"){
    header("location:index.php?error=wrong");
  }

  //cek kondisi jika username dan password benar
  if($username == "admin" && $_POST["password"] == "admin123"){
    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;

    header("location:beranda.php");
  }
}

function check_login(){
//cek kondisi login Session
if(!isset($_SESSION["user"])){
  header("location:index.php");
}

}
 ?>
