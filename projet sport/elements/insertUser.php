
<?php  
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordH = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $link =  mysqli_connect("localhost", "otthmane", "" , "user");



    if(empty($_POST["email"]) || empty($_POST["password"])){
    }else {
           
            $sql = "INSERT INTO user (email, password) VALUES ('$email', '$passwordH')";  
            if (mysqli_query($link, $sql)) {
               echo"oui";
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
    }
    
?>
