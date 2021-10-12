<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>

	<center>
		<a href="home.php">Back </a> |
		<a href="logout.php">logout </a>
	</center>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<tr>
			<td>1</td>
			<td>alamin</td>
			<td>123</td>
			<td>alamin@aiub.edu</td>
			<td>
				<a href="edit.php?id=1"> EDIT </a> |
				<a href="delete.php?id=1"> DELETE</a>
			</td>

		</tr>
		<tr>
			<td>1</td>
			<td>alamin</td>
			<td>123</td>
			<td>alamin@aiub.edu</td>
			<td>
				<a href="edit.php?id=2"> EDIT </a> |
				<a href="delete.php?id=2"> DELETE</a>
			</td>
		</tr>
	</table>
</body>
</html>