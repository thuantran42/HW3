<!doctype html>
<head>
 <a class="btn btn-primary" href="#" role="button">Button</a>

</head>
<body>

<?php
$servername = "localhost";
$username = "traeoucr_homework3User";
$password = "mysqltt1024332";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</body>
</html>
