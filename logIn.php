<?php
// session_start();
if(!isset($_SESSION['user'])){
  if (isset($_POST['user'])){
    $pdo = new PDO("mysql:host=localhost;port=3307;dbname=brief",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['user'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM `admin` WHERE username = '$name' AND password = '$password'";
    $stet = $pdo->prepare($query);
    $stet->execute();
    $user = $stet->fetchAll(PDO::FETCH_ASSOC);
    
    if (!$user){
      header('Location: ./index.php'); 
    }
    else{
      $_SESSION['user'] = $name;
    }
  }
}
?>