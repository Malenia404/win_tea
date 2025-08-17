<?php

    $conn  = mysqli_connect('localhost','root','root1234','win');
    if(!$conn){
        echo "Error: ". mysqli_connect_error();
    }

?>