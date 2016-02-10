<html>
<body>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Bata_DB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if ( $_POST['TableName'] == "customer"){
$x1=$_POST[dateofpurchase];
$x2=$_POST[customer_id];
$sql="UPDATE customer SET dateofpurchase = $x1 WHERE customer_id = $x2";
}


if ( $_POST['TableName'] == "employee"){
$x1=$_POST[employee_id];
$x2=$_POST[addr_state];
$x3=$_POST[addr_city];
$x4=$_POST[addr_housenumber];
$x5=$_POST[addr_streetnumber];
$x6=$_POST[name];
$x7=$_POST[salary];
$x8=$_POST[dateofbirth];
$x9=$_POST[age];
$x10=$_POST[salesman_flag];
$x11=$_POST[salesman_grade];
$x12=$_POST[supervisor_flag];
$x13=$_POST[supervisor_grade];
$x14=$_POST[storemanager_flag];
$x15=$_POST[storemanager_grade];
$x16=$_POST[billingstaff_flag];
$x17=$_POST[billingstaff_grade];
$x18=$_POST[qualityinspector_flag];
$x19=$_POST[qualityinspector_grade];
$x20=$_POST[tinnumber];
$sql="UPDATE employee SET addr_state=$x2, addr_city=$x3, addr_housenumber=$x4, addr_streetnumber=$x5 ,name=$x6 ,salary=$x7 ,dateofbirth=$x8, age=$x9, salesman_flag=$x10, salesman_grade=$x11, supervisor_flag=$x12, supervisor_grade=$x13, storemanager_flag=$x14, storemanager_grade=$x15, billingstaff_flag=$x16, billingstaff_grade=$x17 ,qualityinspector_flag=$x18, qualityinspector_grade=$x19, tinnumber=$x20 WHERE employee_id=$x1 ";  
}
 
if ( $_POST['TableName'] == "invoice"){
$x1=$_POST[invoice_id];
$x2=$_POST[date];
$x3=$_POST[totalprofitperday];
$x4=$_POST[totalmrpperday];
$x5=$_POST[totalmanufacturingcostperday];
$x6=$_POST[RDC_id];
$sql="UPDATE invoice SET date=$x2, totalprofitperday=$x3, totalmrpperday=$x4, totalmanufacturingcostperday=$x5, RDC_id=$x6 WHERE invoice_id=$x1";
}

if ( $_POST['TableName'] == "offer"){
$x1=$_POST[article_number];
$x2=$_POST[offer_id];
$x3=$_POST[discount];
$x4=$_POST[startdate];
$x5=$_POST[enddate];
$sql="UPDATE offer SET article_number=$x1, discount=$x3, startdate=$x4, enddate=$x5 WHERE offer_id=$x2";
}

if ( $_POST['TableName'] == "product"){
$x1=$_POST[article_number];
$x2=$_POST[marketedby];
$x3=$_POST[modelname];
$x4=$_POST[importedby];
$x5=$_POST[manufacturedby];
$x6=$_POST[mrp];
$x7=$_POST[trademark];
$x8=$_POST[tinnumber];
$sql="UPDATE product SET marketedby=$x2, modelname=$x3, importedby=$x4, manufacturedby=$x5, mrp=$x6, trademark=$x7, tinnumber=$x8 WHERE article_number=$x1";
}

if ( $_POST['TableName'] == "retaildistributioncenter"){
$x1=$_POST[RDC_id];
$x2=$_POST[name];
$x3=$_POST[addr_area];
$x4=$_POST[addr_city];
 $sql="UPDATE retaildistributioncenter SET name=$x2, addr_area=$x3, addr_city=$x4 WHERE RDC_id=$x1";
}

if ( $_POST['TableName'] == "showroom"){
$x1=$_POST[tinnumber];
$x2=$_POST[name];
$x3=$_POST[addr_state];
$x4=$_POST[addr_city];
$x5=$_POST[addr_landmark];
$x6=$_POST[storemanager_name];
$x7=$_POST[RDC_id];
$x8=$_POST[stock_id];
$sql="UPDATE showroom SET name=$x2, addr_state=$x3, addr_city=$x4, addr_landmark=$x5, storemanager_name=$x6, RDC_id=$x7, stock_id=$x8 WHERE tinnumber=$x1 ";
}

if ( $_POST['TableName'] == "stock"){
$x1=$_POST[timeofarrival];
$x2=$_POST[RDC_id];
$x3=$_POST[stock_id];
$sql="UPDATE stock SET timeofarrival=$x1, RDC_id=$x2 WHERE stock_id=$x3";
}

if ( $_POST['TableName'] == "stock_description"){
$x1=$_POST[stock_description_id];
$x2=$_POST[model];
$x3=$_POST[quantity];
$x4=$_POST[price];
$x5=$_POST[stock_id];
$sql="UPDATE stock_description SET model=$x2, quantity=$x3, price=$x4, stock_id=$x5 WHERE  stock_description_id=$x1";
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
