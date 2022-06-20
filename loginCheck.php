<?php 
	session_start();

	$User_Id = $_REQUEST['id'];
	$Password = $_REQUEST['password'];
	
	

	if ($User_Id == null || $Password == null ) {
		echo "invalid username/password <br>";
	}else{
		file =fopen(user.txt, 'r');
		while (!feof(file)) {
			$line =fgets($file);
			$user = explode('|',$line);
			print_r($user);

			echo "<br>";
			if($User_Id == trim($user[0]) && $Password == trim($user[1]))
			{
				setcookie('status', 'true',time()+3600,'/');
				header('location :home.php');
			}
		}
		echo "Invalid User";
	}

?>