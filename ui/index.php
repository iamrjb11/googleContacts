
<?php
	include './dbms.php';

	if(isset($_POST['submit'])){
		$name = $_POST['nameTxt'];
		$age = $_POST['ageTxt'];
		$salary = $_POST['salaryTxt'];
		$email = $_POST['emailTxt'];
		$sql = "INSERT INTO data_info (name,age,salary,email) VALUES ('$name','$age','$salary','$email')";
		$query = mysqli_query($conn,$sql);
		
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form method="POST">
		<input type="text" name="nameTxt" placeholder="Enter your name"><br>
		<input type="text" name="ageTxt" placeholder="Enter your age"><br>
		<input type="text" name="salaryTxt" placeholder="Enter your salary"><br>
		<input type="text" name="emailTxt" placeholder="Enter your email"><br>
		<input type="submit" name="submit" value="submit-rjb" class="btn btn-success">
	</form>
	<table>
		<tr>
			<th>Srl</th>
			<th>Name</th>
			<th>Age</th>
			<th>Salary</th>
			<th>Email</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM data_info";
			$result = $conn->query($sql);
			while($row =  $result->fetch_assoc()){
				echo "
				<tr>
					<th>$row[id]</th>
					<td>$row[name]</td>
					<td>$row[age]</td>
					<td>$row[salary]</td>
					<td>$row[email]</td>
				</tr>
				";

			}
		?>
	</table>
	
	



	
	
</body>
</html>


