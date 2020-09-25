<?php

$query = mysqli_query($connect,"SELECT * FROM menu");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

// $query2 = mysqli_query($connect,"SELECT * FROM content");
// $results2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);

$query3 = mysqli_query($connect,"SELECT * FROM slider");
$results3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);

$query4 = mysqli_query($connect,"SELECT * FROM footer");
$results4 = mysqli_fetch_all($query4, MYSQLI_ASSOC);

?>