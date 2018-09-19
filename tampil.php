<?php 
session_start();
include("coneksi.php");

$sql = "SELECT * from mahasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<img width='200px' src='uploads/" . $row["nama_file"] . "'>";
	}
}else {
	echo "0 result";
}
?>
<br>
<a href="logout.php">Log Out</a>