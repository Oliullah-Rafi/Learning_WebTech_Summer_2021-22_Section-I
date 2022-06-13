<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>

<html>
<head>

	<title>Home Page </title>
</head>
<body>
		<h1>Welcome</h1>
		<h3>Registration done</h3>
		
		<a href="logout.php"> logout </a>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>


