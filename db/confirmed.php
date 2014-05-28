<?php
$query = mysql_query("SELECT DISTINCT Name,RollNo,Course_at_NIT FROM alumini");
while($row = mysql_fetch_array($query))
			{
			 echo "$row['Name'] <br/>";
			 echo "$row['RollNo'] <br/>";
			}
?>