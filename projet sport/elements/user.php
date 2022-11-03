
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<?php 
$link =  mysqli_connect("localhost", "otthmane", "" , "user");
$id = $_GET["id"];
$sql = "SELECT id, email, password FROM `user` WHERE id = '$id'";
$results = mysqli_query($link, $sql);
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
<?php if (isset($_GET["id"]) && $row["id"] == $id) : ?>
    <tr>
    <?php echo "<td>{$id}</td>"; ?>
        <td><?= $row["email"] ?></td>
        <td><?= $row["password"] ?></td>
        <td>
            <button class="btn btn-danger">
                <?php echo "<a href=./del.php?id=".$id.">Supprimer</a>"?>
            </button>
        </td>
        <td>
            <button class="btn btn-danger">
                <?php echo "<a href=./auth.php?id=".$id.">Mettre à jour</a>"?>
            </button>
        </td>
    </tr>
    </table>
    <?php endif; ?>
<?php echo "</table>" ?>