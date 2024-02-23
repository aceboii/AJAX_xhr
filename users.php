<?php

//Connect to a database
$conn =mysqli_connect("localhost","root","", "tost");


$query = "SELECT * from users";

//GET result
$result = mysqli_query($conn, $query);

//Fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);




?>