<?php
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="description" content="Alumini Meet">
 <meta name="keywords" content="NITC,Alumini">
 <meta name="author" content="Karun Thankachan">
 
 <title>Revoir'14</title>
 
 <link rel="stylesheet" type="text/css" href="css/header_footer.css">
 <link rel="stylesheet" type="text/css" href="css/content.css">
 <link rel="icon" href="img/favicon.ico" type="image/x-icon">
 <script>
 function OpenInNewTab()
{
  var win=window.open("http://revoir14.doattend.com/", '_blank');
  win.focus();
}
</script>
 </head>

<body onload="OpenInNewTab();">

 <?php include_once("header.php") ?>
  
 <div id="container">
<span style="font-size:35px">Congrats!!!!</span><br/><br/>
You have been provisionally registered for Revoir'14. The confirmed registration is subject to payment verification from doattend.com. Kindly confirm your registration by making the payment before <b>17th March</b>.<br/><br/>Your registration would be confirmed within 24 hours of making the payment and your name would appear in the CONFIRMED LIST section.<br/><br/>
Additionally you will also receive a confirmation email from <b>revoir2014nitc@gmail.com</b><br/><br/>
<a href="http://revoir14.doattend.com/" target="_blank" style="color:blue">MAKE PAYMENT</a>
 </div>
 <!--
 <div style="position:fixed;bottom:80px;right:20px">
 <a href="download.php"><img src="img/download.png" height="80px" width="80px"></a>
 </div>
 -->
 <?php include_once("footer.php") ?>
 
</body>
</html>

<?php
ob_flush();
?>