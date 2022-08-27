<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 
    $link =  mysqli_connect("localhost", "otthmane", "" , "user");
    $sql = "SELECT id, lastname, firstname, email, message FROM `user`";
    $results = mysqli_query($link, $sql);
    $numberOfUsers = mysqli_num_rows($results);
    $row = mysqli_fetch_assoc($results);
    $key = array_keys($row);
?>
<?php  
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    $link =  mysqli_connect("localhost", "otthmane", "" , "user");
    if(empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) 
    || empty($_POST["tel"]) || empty($_POST["sujet"]) || empty($_POST["message"])){
        header("Location: ../contact.php?add=0");
    }else {
            $sql = "INSERT INTO user (lastname, firstname, email, message) VALUES ('$nom', '$prenom', '$email', '$msg')";  
            if (mysqli_query($link, $sql)) {
                header("refresh:0; url=../contact.php?add=1");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
    }
    mysqli_close($link);
?>