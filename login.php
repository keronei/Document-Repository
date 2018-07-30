<?php

//session_start();

//Using PDO

//if( isset($_SESSION['user_id']) ){
	//if there is a session from previous login then take the user straight to dashboard
	//header("location: /dashboard.html");

	 //echo "<script> window.location.assign('viewrepo.php'); </script>";
//}

if (isset($_POST['submit'])){

require_once"connection.php";

//Recheck that the variables are not null
if(!empty($_POST['mail']) && !empty($_POST['password'])){
	
	$mail = $_POST['mail'];
	
	//$un_hashed_password = 
	
	//Prepare the query statement -- id is autogenerate, never mind about it for now
	$records = "SELECT headName,head_mail,password FROM departments WHERE head_mail = '$mail' ";
	

	//this message variable will store errors and success messages
	$message = '';
	
	//	$result=mysqli_query($conn, $records);
		 //$result = $conn->query($records);
		
//z$passg = $result['password'];
	//perfom a check before creating a session if the user can be granted access or not.
	
	
	$result = mysqli_query($conn,$records) or die(mysql_error());
					$rows = mysqli_num_rows($result);
        				if($rows==1){
	    		//		$_SESSION['username'] = $username;
							
							//$passs = $result['password']; 
									
									if(password_verify($_POST['password'],$result['password'])){
            				// Redirect user to index.php
	    				//header("Location: viewrepo.php");
									$message = '<p style="color:green">Successful, Redirecting...</p>';
									
									echo "<script> window.location.assign('viewrepo.php'); </script>";
									
								}else{$message = '<p style="color:red">Sorry, your password was wrong</p>';}
         				}else{
									$message='<p style = "color:red">Did entered email correctly?</p>';
					}
	

	
}else{
	$message = 'Nothing sent';
}
}else{
	$message='Not submitted';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document Repo Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
</head>




<body>

	<div class="container">
		<div class="page-header">
			<figure>
				<img src="images/logo.jpg" alt="Logo image" width="100" height="100">
				<figcaption>Kisumu County</figcaption>
			</figure>

			<h1>Document Repository</h1>
			
		</div>

		<section>
			<div id="loginCard">
				<h3>Login</h3>
				<form action="" method="POST">
					
					<p  <?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?></p>
					<p>
						
						<label for="mail">E-mail:</label>
						<input type="email"  placeholder = "Your email" name="mail" required>
					</p>
					<p>
						<label for="password">Password:</label>
						<input type="password"  placeholder="Password" name="password" required>
					</p>
					<p>
					
					</p>
					<p>
						<input type="submit" name="submit" value="Login">
					</p>
				</form>
				<a href="signUp.php">Forgot password?</a>
			</div>
		</section>
	</div>

	<footer class="footer">
		2018@Kisumu County
	</footer>
</body>
</html>