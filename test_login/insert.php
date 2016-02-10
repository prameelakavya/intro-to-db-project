<html>
<body>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'myDB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$sql="INSERT INTO nametable (firstname, lastname)
VALUES
('$_POST[fname]','$_POST[lname]')";
 
if (!mysql_query($sql,$con))

	  {
		    die('Error: ' . mysql_error());
		      }
echo "1 record added";
mysql_close($con)
	?>
	</body>
	</html>
