<?php  
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" cellspacing="0" cellpadding="10">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $phone; ?></td>

			</tr>
		</tbody>
	</table>

</body>
</html>