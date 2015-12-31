<?php
/********PREVENETS SUBMIT-BACK-SUMBIT PROBLEM************/
/*header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");*/
?>
	<?php
session_start();
?>
		<html>

		<head>
			<title>Troika 16 Registration Form</title>
			
			<meta name="viewport" content="width=device-width">
			<script src="../lib/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
			<script src="js/formhelp.js"></script>
			<script src="js/register.js"></script>
			<link rel="stylesheet" type="text/css" href="css/register.css">
		</head>

		<body onload="loadfunction()">
			<div class="form">
				<header>Troika 16 Registration Form</header>
				<?php
if (isset($_POST["submit"])) //RECEIVING
{
    if ($_POST["formid"] == $_SESSION["formid"]) //PROPER SESSION
    {
        $_SESSION["formid"] = '';
        require_once("includes\dbinfo.php");
		/***FETCHING POST DATA ******/
		$bits=0;
		$bots=0;
		$brainwave=0;
		$designpro=0;
		$electrocution=0;
		$envision=0;
		$radix=0;
		$technovision=0;
		$events=['bits','bots','brainwave','designpro','electrocution','envision','radix','technovision'];
		$accomodation = 'no';
		$name1=$name2=$name3=$name4="";
		$contact1=$contact2=$contact3=$contact4=0;
		$email1=$email2=$email4=$email3="";
		$college1=$college2=$college3=$college4="";
 
		if(isset($_POST['bits']) && $_POST['bits'] == 'Yes') { $bits=1; }
		if(isset($_POST['bots']) && $_POST['bots'] == 'Yes') { $bots=1; }
		if(isset($_POST['brainwave']) && $_POST['brainwave'] == 'Yes') { $brainwave=1; }
		if(isset($_POST['designpro']) && $_POST['designpro'] == 'Yes') { $designpro=1; }
		if(isset($_POST['electrocution']) && $_POST['electrocution'] == 'Yes') { $electrocution=1; }
		if(isset($_POST['envision']) && $_POST['envision'] == 'Yes') { $envision=1; }
		if(isset($_POST['radix']) && $_POST['radix'] == 'Yes') { $radix=1; }
		if(isset($_POST['technovision']) && $_POST['technovision'] == 'Yes') { $technovision=1; }

		$teamname=$_POST["teamname"];
		$strength=$_POST["strength"];

		$name1=$_POST["name1"]; 
		$contact1=$_POST["contact1"];
		$email1=$_POST["email1"]; 
		$college1=$_POST["college1"];
		if($strength >= 2) {
		$name2=$_POST["name2"]; 
		$contact2=$_POST["contact2"];
		$email2=$_POST["email2"]; 
		$college2=$_POST["college2"];
		}
		if($strength >= 3) {
		$name3=$_POST["name3"]; 
		$contact3=$_POST["contact3"];
		$email3=$_POST["email3"]; 
		$college3=$_POST["college3"];
		}
		if($strength >= 4) {
		$name4=$_POST["name4"]; 
		$contact4=$_POST["contact4"];
		$email4=$_POST["email4"]; 
		$college4=$_POST["college4"];
		}

		if(isset($_POST['accomodation']) && $_POST['accomodation'] == 'yes') { $accomodation="yes"; }
		$comments = $_POST["comments"];

		/********* TEAM NAME CHECK ******/
		$teamredundancy=0;
		try 
		{
			$conn = new PDO("mysql:host=$SERVER;dbname=$DB", $USER, $PSWD);
    	// set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//prepare
		    //$sql = "SELECT * FROM hell Where visible=?; ";
		    $stmt=$conn->prepare("SELECT id,teamname FROM registration Where teamname LIKE :tn ;");
		    //bind
			$stmt->bindParam(':tn',$teamname);
			//set and execute
			
			$stmt->execute();
			
			$result = $stmt->fetchAll();
			if( count($result)>0 ) 
			{ 
				$teamredundancy=1;
				$_SESSION["error"]= "Team : ".$teamname." already exists. Kindly use another team name";
		    }
		}
		catch(PDOException $e)
		{
		    $_SESSION["error"]= "Unexpected Error, Kindly fill the form.";
		}
		$conn=NULL;
		if(isset($_SESSION["error"]))
		{
			header('Location: register.php');
			exit();
		}



		/******** INSERTION OF FORM DETAILS *******/
		try 
		{
		    $conn = new PDO("mysql:host=$SERVER;dbname=$DB", $USER, $PSWD);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		    $sqlq = "INSERT INTO registration (teamname,strength,
		    		name1,contact1,email1,college1,
		    		name2,contact2,email2,college2,
		    		name3,contact3,email3,college3,
		    		name4,contact4,email4,college4,
		    		bits,bots,brainwave,designpro,electrocution,envision,radix,technovision,
		    		accomodation,comments) ";
		    $sqlq .= " VALUES (?,?,?,?,
		    			?,?,?,?,
		    			?,?,?,?,
		    			?,?,?,?,
		    			?,?,?,?,
		    			?,?,?,?,
		    			?,?,?,?);";

		    $stmt = $conn->prepare($sqlq);
		    $stmt->bindParam(1,$teamname);
			$stmt->bindParam(2,$strength);
			$stmt->bindParam(3,$name1);
			$stmt->bindParam(4,$contact1);
			$stmt->bindParam(5,$email1);
			$stmt->bindParam(6,$college1);
			$stmt->bindParam(7,$name2);
			$stmt->bindParam(8,$contact2);
			$stmt->bindParam(9,$email2);
			$stmt->bindParam(10,$college2);
			$stmt->bindParam(11,$name3);
			$stmt->bindParam(12,$contact3);
			$stmt->bindParam(13,$email3);
			$stmt->bindParam(14,$college3);
			$stmt->bindParam(15,$name4);
			$stmt->bindParam(16,$contact4);
			$stmt->bindParam(17,$email4);
			$stmt->bindParam(18,$college4);
			$stmt->bindParam(19,$bits);
			$stmt->bindParam(20,$bots);
			$stmt->bindParam(21,$brainwave);
			$stmt->bindParam(22,$designpro);
			$stmt->bindParam(23,$electrocution);
			$stmt->bindParam(24,$envision);
			$stmt->bindParam(25,$radix);
			$stmt->bindParam(26,$technovision);
			$stmt->bindParam(27,$accomodation);
			$stmt->bindParam(28,$comments);
			//set and execute
			$stmt->execute();
			// use exec() because no results are returned
		    //$conn->exec($sql);
		    
			/** FETCH TEAM ID ****/
			require('fetchid.php');  //$teamid is intoduced in this file
		    /********EMAIL STUFF****/
		 	
			/*** FOR DEFAULT MAIL()
			// use wordwrap() if lines are longer than 70 characters
			$mailmsg = wordwrap($mailmsg,70);
			$headers = "From: webmaster@example.com";
			// send email
			mail($email1,"Registration Successfull",$mailmsg,$headers);
			******************************** DEFAULT MAIL() ********************/
			include 'includes/mailermodule.php';
			$mail->AddAddress($email1,$name1);                  // name is optional
			$mail->AddAddress($email2,$name2);
			$mail->AddAddress($email3,$name3);
			$mail->AddAddress($email4,$name4);
			$mail->Subject = "Troika Registration Successful";
			$mail->Body    = " Congratulations Team : <strong> ".$teamname. "<br>Kindly Note your Team ID is ".$teamid."</strong> You have successfully registered for Troika 2016 <br>" ;
			$mail->Body   .= " Team Member(s): <br> 1.".$name1."<br> 2.".$name2."<br> 3.".$name3."<br> 4.".$name4."<br>";
			$mail->AltBody = "Registration Completeted Successfully for team :".$teamname;

			if(!$mail->Send())
			{
				$_SESSION['message']="Team ".$teamname.", Registration Completeted Successfully, but confirmation mail could not be sent to your email ID <br>";
				$_SESSION['message'].= "<br><strong>Please NOTE DOWN your Team ID : ".$teamid."</strong>";	
				
			}
			else
			{
				$_SESSION['message']="Team ".$teamname.",Registration Completeted Successfully,also a confirmation mail has been sent to your email ID <br>";
				$_SESSION['message'].= "<br><strong>Please note down your Team ID : ".$teamid."</strong>";
			}
			$conn = null;
			header('Location: success.php');
			exit();

	    }
		catch(PDOException $e)
	    {
	    	$_SESSION["error"]= "Unexpected Error, Kindly fill the form.";
	    }

	    if(isset($_SESSION["error"]))
		{
			header('Location: register.php');
			exit();
		}
    }
    else
    {
    	/***** WILL HAPPEN IF CSRF *****/
    	/*** THIS BLOCK CHECKS HAPPENS WHEN formid is mismatch ****/
    	$_SESSION["error"]= "Unexpected Error, Kindly Refresh fill the form.";
    	/**** inform ADMIN VIA MAIL ****/


    	header('Location: register.php');
    	//or redirect to form page freshly.
    }
}
else //form to be rendered to be first time
{
    $_SESSION["formid"] = md5(rand(0,10000000));
    if(isset($_SESSION["error"]))
    {
    	echo '<div class="error">'.$_SESSION["error"].'</div>';
    	unset($_SESSION["error"]);
    }
?>

					<form method="POST" action="<?php echo $_SERVER[" PHP_SELF "]; ?>" onchange="savefunction()" autocomplete="off">
						<input type="hidden" name="formid" value="<?php echo $_SESSION[" formid "]; ?>" />
						<div class="Description">
							<p class="event">Events:</p>
							<input type="checkbox" name="bits" value="Yes">BITS
							<br>
							<input type="checkbox" name="bots" value="Yes">BOTS
							<br>
							<input type="checkbox" name="brainwave" value="Yes">Brainwave
							<br>
							<input type="checkbox" name="designpro" value="Yes">Design Pro
							<br>
							<input type="checkbox" name="electrocution" value="Yes">Electrocution
							<br>
							<input type="checkbox" name="envision" value="Yes">Envision
							<br>
							<input type="checkbox" name="radix" value="Yes">Radix
							<br>
							<input type="checkbox" name="technovision" value="Yes">Technovision
							<br>
							<p>There's a single registration required for an event, and there is no separate online registration for sub events.</p>
						</div>
						<div class="thead"> Team Details </div>
						<div class="Tdetails">
							Team Name:
							<input type="text" name="teamname" onkeyup="teamcheck()" maxlength="15" pattern="[A-Za-z0-9\s]+" placeholder="" required title="Name must consists of alphanumeric characters">
							<br>
							<div id="team-name-status" class="teamcheck"></div>
							<br>
							<br> Team Strength
							<select name="strength" required>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<br>
						<div class="mhead"> Member 1 </div>
						<br>
						<div class="m">
							Name:
							<input type="text" name="name1" maxlength="50" pattern="[A-Za-z\s]+" placeholder="Full Name" required title="Name must contain only alphabets and spaces">
							<br> Contact Number:
							<input type="number" name="contact1" maxlength="10" placeholder="10 digits" required>
							<br> Email:
							<input type="email" name="email1" maxlength="50" placeholder="" required>
							<br> College Name:
							<input type="text" name="college1" maxlength="100" pattern="[A-Za-z\s]+" placeholder="" required title="Name must contain only alphabets and spaces">
							<br>
						</div>
						<br>
						<div class="mhead"> Member 2 </div>
						<br>
						<div class="m">
							Name:
							<input type="text" name="name2" maxlength="50" pattern="[A-Za-z\s]+" placeholder="Full Name" title="Name must contain only alphabets and spaces">
							<br> Contact Number:
							<input type="number" name="contact2" maxlength="10" placeholder="10 digits">
							<br> Email:
							<input type="email" name="email2" maxlength="50" placeholder="">
							<br> College Name:
							<input type="text" name="college2" maxlength="100" pattern="[A-Za-z\s]+" placeholder="" title="Name must contain only alphabets and spaces">
							<br>
						</div>
						<br>
						<div class="mhead"> Member 3 </div>
						<br>
						<div class="m">
							Name:
							<input type="text" name="name3" maxlength="50" pattern="[A-Za-z\s]+" placeholder="Full Name" title="Name must contain only alphabets and spaces">
							<br> Contact Number:
							<input type="number" name="contact3" maxlength="10" placeholder="10 digits">
							<br> Email:
							<input type="email" name="email3" maxlength="50" placeholder="">
							<br> College Name:
							<input type="text" name="college3" maxlength="100" pattern="[A-Za-z\s]+" placeholder="" title="Name must contain only alphabets and spaces">
							<br>
						</div>
						<br>
						<div class="mhead"> Member 4 </div>
						<br>
						<div class="m">
							Name:
							<input type="text" name="name4" maxlength="50" pattern="[A-Za-z\s]+" placeholder="Full Name" title="Name must contain only alphabets and spaces">
							<br> Contact Number:
							<input type="number" name="contact4" maxlength="10" placeholder="10 digits">
							<br> Email:
							<input type="email" name="email4" maxlength="50" placeholder="">
							<br> College Name:
							<input type="text" name="college4" maxlength="100" pattern="[A-Za-z\s]+" placeholder="" title="Name must contain only alphabets and spaces">
							<br>
						</div>
						<br>
						<br>
						<input type="checkbox" name="accomodation" value="yes"> Accomodation
						<br>
						<br>Additional Comments
						<br>
						<textarea name="comments" rows="7" cols="50"></textarea>
						<br>
						<input type="submit" name="submit" value="Submit" id="submit">
					</form>
			</div>
			<?php } ?>
		</body>

		</html>