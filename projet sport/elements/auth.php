<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

<style>
    body {

background: grey;

display: flex;

justify-content: center;

align-items: center;

height: 100vh;

flex-direction: column;

}
*{

font-family: cursive;

box-sizing: padding-box;

}

form {

width: 1000px;

border: 3px solid rgb(177, 142, 142);

padding: 20px;

background:#b58a50;

border-radius: 20px;

}

h2 {

text-align: center;

margin-bottom: 40px;

}

input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: #888;

font-size: 18px;

padding: 10px;

}

button {

float: right;

background: rgb(35, 174, 202);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

button:hover{

opacity: .10;

}

.error {

background: #F2DEDE;

color: #0c0101;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

}

h1 {

text-align: center;

color: rgb(134, 3, 3);

}

a {

float: right;

background: rgb(183, 225, 233);

padding: 10px 15px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}
a:hover{

opacity: .7;

}
</style>
</head>

<body>

    <?php echo "<form action='./db.php' method='POST'>" ?>
    <?php $id = $_GET['id']; ?>
        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <input type="hidden" name="id" value=<?php echo $id ?>>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>