<?php
ob_start(); 
include ("db/db_connect.php");
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
 <link rel="stylesheet" type="text/css" href="css/tables.css">
</head>

<body> 
 <?php include_once("header.php") ?>
 
 <div id="btech">
 
 <table>
 <tr>
 <td colspan="2" style="border-bottom : 1px solid grey">B.Tech</td>
 </tr>
 
 <?php
  $query = mysql_query("SELECT DISTINCT Name,RollNo,Course_at_NIT FROM alumini");
  while($row = mysql_fetch_array($query))
 {
  if(!strcmp($row['Course_at_NIT'],"b.tech"))
  {
  echo "<tr><td>".$row['Name']."</td><td>".$row['RollNo']."</td></tr>";
  }
 }
 ?>
 
 </table>
 
 </div>
 
 <div id="mtech">
 <table>
 <tr>
 <td colspan="2" style="border-bottom : 1px solid grey">M.Tech</td>
 </tr>
 
 <?php
 $query = mysql_query("SELECT DISTINCT Name,RollNo,Course_at_NIT FROM alumini");
 while($row = mysql_fetch_array($query))
 { 
 if(!strcmp($row['Course_at_NIT'],"m.tech"))
  {
  echo "<tr><td>".$row['Name']."</td><td>".$row['RollNo']."</td></tr>";
  }
 }
 ?>
 
 </table>
 </div>
 
 <div id="mca">
 <table>

 <tr>
 <td colspan="2" style="border-bottom : 1px solid grey">MCA</td>
 </tr>
 
 <?php
 $query = mysql_query("SELECT DISTINCT Name,RollNo,Course_at_NIT FROM alumini");
 while($row = mysql_fetch_array($query))
 {
  if(!strcmp($row['Course_at_NIT'],"mca"))
  {
  echo "<tr><td>".$row['Name']."</td><td>".$row['RollNo']."</td></tr>";
  }
 }
 ?>
 
 </table>
 </div>

 <!--<span style=\"font-size:28px\">TO BE UPDATED.</span><hr/>-->
 
 <!--
 <div id="poster" style="position:absolute;bottom:0px;right:50px;">
 <img src="img/bg.png" height="620px" width="750px" style="opacity:0.5;position:relative;left:45px;">
 </div>
 -->
 
 <?php include_once("footer.php") ?>
</body>
</html>