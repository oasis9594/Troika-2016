<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Troika 16 Registration Form</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<div class="form">
	<header>Troika 16 Registration</header>
	<p> 

	<?php 
		if(isset($_SESSION['message']))
		{
			echo $_SESSION['message'];
			session_destroy(); /* END THE CURRENT SESSION */
			/* AS THE FORM SUBMITTED SUCCESSFULLY, CLEAR FORM DATA */
			?>
			<script>
				localStorage.clear();
			</script>
			<?php
		}
		else /* IF THE USER REFRESHES, REDIRECT TO FORM PAGE */
			header('Location: register.php');
	?>

	</p>
</div>
</body>
</html>