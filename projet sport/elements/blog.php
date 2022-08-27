<?php 
    $link =  mysqli_connect("localhost", "otthmane", "" , "blog");
    $sql = "SELECT id, nom, text, img, link ORDER BY date DESC LIMIT 3";
    $results = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($results);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php 

    $link =  mysqli_connect("localhost", "otthmane", "" , "user");
    $sql = "SELECT id, CONCAT(lastname, ' ', firstname) AS nom, email, message FROM `user`
            WHERE id BETWEEN 1 AND 4 ORDER BY nom LIMIT 1";
    $results = mysqli_query($link, $sql);
    $numberOfUsers = mysqli_num_rows($results);
    $row = mysqli_fetch_assoc($results);
    $key = array_keys($row);
?>
<?php echo "<table border = '1px' class='table table-dark'>" ?>

<?php   
    echo "<tr>";
        for($i=0; $i < count($key); $i++){
            echo "<th>$key[$i]</th>";
        }
    echo"</tr>";
?>
<?php foreach($results as $x => $v) : ?>
    <?php 
    $id = $v["id"];
    $lastname = $v["lastname"];
    $firstname = $v["firstname"];
    $email = $v["email"];
    $message = $v["message"];
    echo "<tr>";
        echo "<td><a href=./user.php?id=".$id.">{$id}</a></td>";
        echo "<td> {$lastname} </td>";
        echo "<td> {$firstname} </td>";
        echo "<td> {$email} </td>";
        echo "<td> {$message} </td>";
    echo "</tr>";
?>
<?php endforeach; ?>
<?php echo "</table>" ?>
<?php echo "<h1 class='text-center bg-dark text-light'>il y a " .$numberOfUsers . " utilisateurs dans la base de donées.</h1>"?>

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
                header("refresh:0; url=../index.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
    }
    mysqli_close($link);
?>

