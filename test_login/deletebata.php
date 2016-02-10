<html>
<body>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Bata_DB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if ( $_POST['TableName1'] == "customer"){
$x=$_POST['customer_id_pkey'];
$sql=" DELETE FROM customer WHERE customer_id = $x ";
}


if ( $_POST['TableName'] == "employee"){
 $x=$_POST['employee_id_pkey'];
$sql=" DELETE FROM customer WHERE employee_id = $x "; 
}
 
if ( $_POST['TableName'] == "invoice"){
  $x=$_POST['invoice_id_pkey'];
$sql=" DELETE FROM customer WHERE invoice_id= $x "; 
}

if ( $_POST['TableName'] == "offer"){
  $x=$_POST['offer_id_pkey'];
$sql=" DELETE FROM customer WHERE offer_id = $x "; 
}

if ( $_POST['TableName'] == "product"){
  $x=$_POST['product_id_pkey'];
$sql=" DELETE FROM customer WHERE product_id = $x "; 
}

if ( $_POST['TableName'] == "retaildistributioncenter"){
 $x=$_POST['retaildistributioncenter_id_pkey'];
$sql=" DELETE FROM customer WHERE retaildistributioncenter_id = $x "; 
}

if ( $_POST['TableName'] == "showroom"){
 $x=$_POST['showroom_id_pkey'];
$sql=" DELETE FROM customer WHERE showroom_id_pkey = $x ";  
}

if ( $_POST['TableName'] == "stock"){
 $x=$_POST['stock_id_pkey'];
$sql=" DELETE FROM customer WHERE stock_id= $x ";  
}

if ( $_POST['TableName'] == "stock_description"){
$x=$_POST['stock_description_id_pkey'];
$sql=" DELETE FROM customer WHERE stock_description_id = $x ";   
}

mysql_select_db('Bata_DB');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
 
if (!mysql_query($sql,$con))

	  {
		    die('Error: ' . mysql_error());
		      }
echo "1 record added";
mysql_close($con)
?>

</body>
</html>
