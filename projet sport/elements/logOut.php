<?php 

session_start();

session_unset();

session_destroy();
echo"Deconnexion réussie";
header("refresh:2; url= ../index.php"); 