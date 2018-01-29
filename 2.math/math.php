<html>
<head>
<title> PHP MATHS <title>
<body>
<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);
echo "<table border ='1' style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 3; $col++) { 
		   $p = $row ** $col;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
</body>
</html>