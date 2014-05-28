<?php ob_start(); 
?>

<?php
 $reg = @$_POST['register'];
 $name = "" ;
 $rollno = "" ;
 $email = "";
 $phoneno = "";
 $gender = "";
 $marital="";
 $course="";
 $highest_degree="";
 $other_degree="";
 $institute="";
 $other_institute="";
 $status="";
 $exp="";
 $location="";
 $size="";
 $no="";
 $food="";
 $food2="";
 
 $name = strip_tags(@$_POST['name']) ;				//*
 $rollno = strip_tags(@$_POST['rollno']) ;			//*
 $email = strip_tags(@$_POST['email']) ;				//*
 $phoneno = strip_tags(@$_POST['phoneno']) ;			//*
 $gender = strip_tags(@$_POST['gender']) ;			//*
 $marital= strip_tags(@$_POST['marital_status']) ;
 $course= strip_tags(@$_POST['course']) ;					//*
 $highest_degree= strip_tags(@$_POST['highest_degree']);	  	//*
 $other_degree= strip_tags(@$_POST['other_degree']) ;		
 $institute= strip_tags(@$_POST['institute']) ;				//*
 $other_institute= strip_tags(@$_POST['other_institute']) ;
 $status= strip_tags(@$_POST['status']) ;					//*
 $exp= strip_tags(@$_POST['experience']) ;
 $location= strip_tags(@$_POST['present_location']) ;		//*			
 $size= strip_tags(@$_POST['size']) ;						//*
 $no= strip_tags(@$_POST['no']) ;							//*
 $food= strip_tags(@$_POST['food']) ;						//*
 $food2= strip_tags(@$_POST['food2']) ;						//*

 
 $to=$email;
 $subject='Alumini Meet at NITC,Revoir\'14';
 $message="
<html>
<body>
<p>Congrats!!!!.</p>

<p>You have been provisionally registered for Revoir’14. The confirmed registration is subject to payment verification from doattend.com. Your registration would be confirmed within 24 hours of making the payment and your name would appear in the confirmed list of .</p>

<p>Additionally you will also receive a confirmation email from revoir2014nitc@gmail.com.</p>
<P>Please confirm your registration by making the payment on or before 17.3.2014</p>

<a href=\"http://revoir14.doattend.com/\">MAKE PAYMENT</a>

</body>
</html>
";

$message = wordwrap($message, 70, "\r\n");

$headers = 'From: revoir2014nitc@gmail.com' . "\r\n";
$headers = 'Reply-To: revoir2014nitc@gmail.com' . phpversion(); 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
 if($reg)
 {
	if($name && $rollno && $email && $phoneno && $gender && $course && $highest_degree && $institute && $status && $location && $size && $food && $no)
	{			
				$email_check=mysql_query("SELECT Email FROM alumini WHERE Email='$email'");
				$check1 = mysql_num_rows($email_check);
				$rollno_check=mysql_query("SELECT RollNo FROM alumini WHERE RollNo='$rollno'");
				$check2 = mysql_num_rows($rollno_check);
				if($check1==0 && $check2==0)
				{
				$query = mysql_query("INSERT INTO alumini VALUES('$name','$rollno','$email','$phoneno','$gender','$marital','$course','$highest_degree','$other_degree','$institute','$other_institute','$status','$exp','$location','$size','$no','$food','$food2')");
				mail($to,$subject,$message,$headers);
				header("location:welcome.php");
				}
				else
				{
				echo "<span style=\"
				position :absolute;
				top:500px;
				left:900px;
				font-size:20px;
				z-index:1000;
				font-family:Times New Roman;
				font-weight:bold;\">EMAIL/ROLL NO REGISTERED <br/>";
				}
	}
	else
	{
		echo "<span style=\"
				position:absolute;
				top:500px;
				left:900px;
				font-size:20px;
				z-index:1000;
				font-family:Times New Roman;
				font-weight:bold;\">PLEASE FILL ALL FIELDS</span>";
	}
 }
 
 
?>

<?php
ob_flush();
?>