
 <?php

require 'includes/constant.php';

 $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);
 if (!$conn)
  {
	die("database connect failed".mysqli_connect_error());
  }
 else
	
 $db_select=mysqli_select_db($conn,DB_NAME);
 if (!$db_select)

 {
	die("Db Select failed".mysqli_connect_error());
 }
?>