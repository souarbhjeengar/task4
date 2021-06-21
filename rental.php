<?php
include_once "header.php";
include_once "db.php";
$name= rtrim(basename($_SERVER['PHP_SELF']),".php");

        $records = mysqli_query($con,"select * from $name");
        
        $index=1;
        ?>