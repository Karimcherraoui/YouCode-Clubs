<?php
      $pdo = new PDO("mysql:host=localhost;port=3307;dbname=brief", 'root','');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];
    $del = "DELETE FROM clubs WHERE id = '$id'";
    $exe = $pdo->prepare($del);
    $exe->execute();

    header('Location: ./gestionClub.php');

?>
