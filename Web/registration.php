<html>
<head>
	<title>Create a new account</title>
</head>
<body>
		<form action="CheckAccount.php" method="post" enctype="">
			<fieldset>
				<legend>Create a new account</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""></td>
					</tr>
					<tr>
						<td>National Id</td>
						<td><input type="text" name="id" value=""></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value=""></td>
					</tr>
							<tr>
						<td>DOB</td>
						<td><input type="date" name="date" value=""></td>
					</tr>
					
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Resister"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>