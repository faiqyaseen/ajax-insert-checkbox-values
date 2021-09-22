<?php

use JetBrains\PhpStorm\Language;

$conn = mysqli_connect("localhost","root","","test1") or die("Connection Failed.!");

    if(isset($_POST['fname'])){
        $name = $_POST['fname'];
        $language = $_POST['languages'];
    
        $sql = "INSERT INTO user_tbl(name, language) VALUES ('{$name}','{$language}')";

        if(mysqli_query($conn,$sql)){
            echo "Successfully Saved.!";
        }else{
            echo "Can't Save Data";
        }

    }

?>