<?php
        $link =  mysqli_connect("localhost", "otthmane", "" , "user");
        $sql = "SELECT * FROM `admin`";
        $results = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($results);
    