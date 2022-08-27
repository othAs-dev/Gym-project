<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 
    $link =  mysqli_connect("localhost", "otthmane", "" , "user");
    $sql = "SELECT id, lastname, firstname, email, message FROM `user`";
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