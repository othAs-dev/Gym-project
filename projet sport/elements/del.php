<?php
ob_start();
session_start();
?>
<?php   
    $link =  mysqli_connect("localhost", "otthmane", "" , "user");
    $id=$_GET["id"];
    $sql = "DELETE FROM `user` WHERE id=$id";
    $results = mysqli_query($link, $sql);

    if (isset($_GET["id"]) && $_GET["id"] == $id) :
        if($sql !== FALSE)
        {
        header("refresh:2; url=users.php");
        echo("The row has been deleted.");
        }else{
        echo("The row has not been deleted.");
        }
endif;?>