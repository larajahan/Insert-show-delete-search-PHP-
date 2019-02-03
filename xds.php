
<?php include('includes/connection.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title>Data Insert</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		$Insert=mysqli_query($conn,"INSERT INTO student(Name,Roll) values('$_POST[name]','$_POST[roll]')");
		if (!$Insert) {
		die("Query failed".mysqli_connect_error());
		}
		
		
		?>
		<div class="table">
			<table>
				<th>Name</th>
				<th>Roll</th>
				
				<?php
				$result=mysqli_query($conn,"SELECT * FROM student");
				$num=mysqli_num_rows($result);
				echo "Total Found :".$num;
				while ($row=mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";	
				echo $row['Name'] ;
				echo "</td>";

				echo "<td>";
				echo $row['Roll'] ;
				echo "</td>";
				echo "</tr>";
				}
				
				?>
			</table>
		</div>
	</body>
</html>


<?php include('includes/footer.php');?>