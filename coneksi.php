<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "data_mahasiswa";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db_select = mysqli_select_db($conn, $db);
?> 