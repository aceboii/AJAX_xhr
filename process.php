<?php

//Connect to a database
$conn =mysqli_connect("localhost","root","", "tost");

echo "processing....";

if(isset($_GET['name'])){
    echo "GET: your name is ". $_GET['name'];
}
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo "POST: your name is ". $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn,$query)){
        echo "user added...";
    }else{
        echo "error". mysqli_error($conn);
    }
}

?>