<?php
ob_start();
include("db/db_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="description" content="Alumini Meet">
 <meta name="keywords" content="NITC,Alumini">
 <meta name="author" content="Karun Thankachan">
 
 <title>Revoir'14</title>
 <link rel="icon" href="img/favicon.ico" type="image/x-icon">
 <link rel="stylesheet" type="text/css" href="css/header_footer.css">
 <link rel="stylesheet" type="text/css" href="css/content.css">
 
 <script src="js/dynamic.js"></script>
 <script src="js/validate.js"></script>
</script>
</head>

<body>
 <?php include("header.php"); ?>
 
 <form enctype="" action="" method="POST" id="container" name="form1" onsubmit="return( validate());">
 
 <span style="color:#5f0fff"> If you have any issues while registering kindly contact us at <b>revoir2014nitc@gmail.com</b>. Based on the preferences you have selected a nominal registration fee would be charged for dinner on 4.4.14, lunch on 5.4.14, Souvenir T-Shirt, PickUp and DropOff from Hotel Monad/Hotel Malayoram GateWay.<br/><br/>
 Last date for registration is 17.3.2014<br/><br/>
 </span>
 
 <table cellpadding="5" cellspacing="10">
 
	<tr>
	<td colspan="2" style="border-bottom:1px solid #555555;"><b>BASIC DETAILS</b></td>
	</tr>
	<tr>
		<td>NAME<span style="color:red"> </span> :</td>
		<td><input type="textfield" name="name"></td>
	</tr>
	<tr>
		<td>ROLL NUMBER<span style="color:red"> </span> :</td>
		<td><input type="textfield" name="rollno"> <a style="color:black;font-size:15px;font-weight:bold;" target="_blank" href="batch_list.php">FORGOT?</a></td>
	</tr>
	<tr>
		<td>EMAIL ID  :</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>PHONE NO  :</td>
		<td><input type="textfield" name="phoneno"></td>
	</tr>
	<tr>
		<td>GENDER  :</td>
		<td><input type="radio" name="gender" value="male">MALE
			<input type="radio" name="gender" value="female" checked="checked">FEMALE</td>
		
	</tr>
	<tr>
		<td>MARITIAL STATUS :</td>
		<td><select name="marital_status">
			<option value="unmarried">UNMARRIED</option>
			<option value="married">MARRIED</option>
			</select>
		</td>
	</tr> 
	<tr>
		<td>COURSE ATTENDED<br/> AT CSED, NITC  :</td>
		<td><select name="course">
			<option value="b.tech" selected="selected">B.TECH</option>
			<option value="m.tech">M.TECH</option>
			<option value="mca">MCA</option>
			</select></td>
	</tr>
	
	<tr>
	<td colspan="2" style="border-bottom:1px solid #555555;"><b>PROFESSIONAL DETAILS</b></td>
	</tr>
	<tr>
		<td>HIGHEST DEGREE  : </td>
		<td><select name="highest_degree" onchange="change_deg(this.value)">
			<option value="btech" selected="selected">B.TECH</option>
			<option value="mtech">M.TECH</option>
			<option value="mca">MCA</option>
			<option value="mba">MBA</option>
			<option value="ms">MS</option>
			<option value="phd">PhD</option>
			<option value="other">OTHER</option>
			</select></td>
	</tr>
	<tr id="change_deg">
		<td>OTHER DEGREE<br/> : </td>
		<td><input type="text" name="other_degree" id="change_deg_value"></td>
	</tr>
	<tr>
		<td>INSTITUTE OF HIGHEST DEGREE  : </td>
		<td><select name="institute" onchange="change_inst(this.value)">
			<option value="nitc" selected="selected">NITC</option>
			<option value="other">OTHER</option>
			</select></td>
	</tr>
	<tr id="change_inst">
		<td>NAME OF INSTITUTE<br/>  : </td>
		<td><input type="text" name="other_institute" id="change_inst_value"></td>
	</tr>
	<tr>
		<td>STATUS PRESENTLY  : </td>
		<td><input type="radio" name="status" value="Student">STUDENT
			<input type="radio" name="status" value="Professional" checked="checked">PROFESSIONAL</td>
	</tr>
	<tr>
		<td>EXPERIENCE IN INDUSTRY (Max:500 Words): </td>
		<td><textarea name="expereince" cols="50" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>PRESENTLY LOCATED AT(Company/Institute)  : </td>
		<td><textarea name="present_location" cols="50" rows="5"></textarea></td>
	</tr>
	
	<tr>
	<td colspan="2" style="border-bottom:1px solid #555555;"></td>
	</tr>
	
	<tr>
		<td>T-SHIRT SIZE :  </td>
		<td><select name="size">
		<option value="s">S</option>
		<option value="m">M</option>
		<option value="l">L</option>
		<option value="xl">XL</option>
		<option value="xxl">XXL</option>
		</select></td>
	</tr>

	
	<tr>
		<td colspan="2" style="color:blue"> If you would like to order more T-Shirts contact us at <i>revoir2014nitc@gmail.com</i> with subject as 'Extra T-Shirts required followed by your RollNo' and mention the quantity and size. </td>
	</tr>
	
	
	<tr>
		<td>NO:OF PEOPLE PARTICIPATING: </td>
		<td><select name="no" onchange="food_disp(this.value)">
		<option value="1">1</option>
		<option value="2">2</option>
		</select></td>
	</tr>
	<tr>
		<td>FOOD PREFERENCE  : </td>
		<td><input type="radio" name="food" value="non-veg" checked="checked">NON-VEG
			<input type="radio" name="food" value="veg">VEG</td>
	</tr>
	<tr id="food_disp">
		<td>FOOD PREFERENCE  : </td>
		<td><input type="radio" name="food2" value="non-veg" id="food_disp_value">NON-VEG
			<input type="radio" name="food2" value="veg" id="food_disp_value1">VEG</td>
	</tr>
	
	<tr>
		<td>PROVE YOU'RE HUMAN,<br/>
		<script type="text/javascript">
		document.write(a + " + " + b);
		</script>
		= ? </td>
		<td><input type="text" name="captcha"></td>
	</tr>
 </table>
 
 <input type="submit" value="REGISTER" name="register">
 </form>

 <?php include("footer.php");?>
 
 <script src="js/jquery.js"></script>
 <script src="js/form.js"></script>
 
</body>
</html>
<?php
include("db/registration.php");
ob_flush();
?>