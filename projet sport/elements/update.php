<?php
ob_start();
session_start();
?>

<?php
$id = $_POST["id"];
$email = $_POST["email"];
$link =  mysqli_connect("localhost", "otthmane", "" , "user");
$sqlX = "UPDATE user SET email = '$email' WHERE id=$id";
if(mysqli_query($link, $sqlX)){
    echo"modif reussi";
} else {
    echo "echec";
}
?>
<?php echo "<button><a href='./logOut.php'>LogOut</a></button>" ?>
