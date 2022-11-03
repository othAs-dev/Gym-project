<?php   $link =  mysqli_connect("localhost", "otthmane", "" , "user");
        $id = $_GET['id'];
        $sqlX = "SELECT * FROM `user` WHERE id=$id";
        $results = mysqli_query($link, $sqlX);
        $row = mysqli_fetch_assoc($results);
        $email = $row["email"];
?>
<?php echo "<button><a href='./logOut.php'>LogOut</a></button>" ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<h1>Formulaire de modification</h1>
<div class="d-flex justify-content-center">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value=<?php echo $id ?>>
        <div class="row w-full form-group">
            <label for="email">Email</label>
            <input type="email" name="email"  value=<?php echo htmlspecialchars($email) ?> class="form-control text-center">
        </div>
        <div class="d-flex justify-content-center">
            <a href="../index.php"><input type="button" class="btn text-dark btn-block mt-4 btn-1" value="Home"/></a>
            <input type="submit" value="Modifier" class="btn text-dark btn-block mt-4 btn-1" />
        </div>
    </form>
</div>