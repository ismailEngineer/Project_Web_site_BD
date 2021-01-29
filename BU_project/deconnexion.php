<?php
session_start();
$_SESSION['id_etudiant'] = 'z';
$_SESSION['nom'] = 'z';
header("location:index.php")
  ?>