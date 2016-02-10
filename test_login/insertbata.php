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

  $sql="INSERT INTO customer (customer_id,dateofpurchase)
VALUES
('$_POST[customer_id]','$_POST[dateofpurchase]')";
}


if ( $_POST['TableName'] == "employee"){
  $sql="INSERT INTO employee (employee_id,addr_state,addr_city,addr_housenumber,addr_streetnumber,name,salary,dateofbirth,age,salesman_flag,salesman_grade,supervisor_flag,supervisor_grade,storemanager_flag,storemanager_grade,billingstaff_flag,billingstaff_grade,qualityinspector_flag,qualityinspector_grade,tinnumber)
VALUES
('$_POST[employee_id]','$_POST[addr_state]','$_POST[addr_city]','$_POST[addr_housenumber]','$_POST[addr_streetnumber]','$_POST[name]','$_POST[salary]','$_POST[dateofbirth]','$_POST[age]','$_POST[salesman_flag]','$_POST[salesman_grade]','$_POST[supervisor_flag]','$_POST[supervisor_grade]','$_POST[storemanager_flag]','$_POST[storemanager_grade]','$_POST[billingstaff_flag]','$_POST[billingstaff_grade]','$_POST[qualityinspector_flag]'),'$_POST[qualityinspector_grade]','$_POST[tinnumber]')";
}
 
if ( $_POST['TableName'] == "invoice"){
  $sql="INSERT INTO invoice (invoice_id,date,totalprofitperday,totalmrpperday,totalmanufacturingcostperday,RDC_id)
VALUES
('$_POST[invoice_id]','$_POST[date]','$_POST[totalprofitperday]','$_POST[totalmrpperday]','$_POST[totalmanufacturingcostperday]','$_POST[RDC_id]')";
}

if ( $_POST['TableName'] == "offer"){
  $sql="INSERT INTO offer (article_number,offer_id,discount,startdate,enddate)
VALUES
('$_POST[article_number]','$_POST[offer_id]','$_POST[discount]','$_POST[startdate]','$_POST[enddate]')";
}

if ( $_POST['TableName'] == "product"){
  $sql="INSERT INTO product (article_number,marketedby,modelname,importedby,manufacturedby,mrp,trademark,tinnumber)
VALUES
('$_POST[article_number]','$_POST[marketedby]','$_POST[modelname]','$_POST[importedby]','$_POST[manufacturedby]','$_POST[mrp]','$_POST[trademark]','$_POST[tinnumber]')";
}

if ( $_POST['TableName'] == "retaildistributioncenter"){
  $sql="INSERT INTO retaildistributioncenter (RDC_id,name,addr_area,addr_city)
VALUES
('$_POST[RDC_id]','$_POST[name]','$_POST[addr_area]','$_POST[addr_city]')";
}

if ( $_POST['TableName'] == "showroom"){
  $sql="INSERT INTO showroom (tinnumber,name,addr_state,addr_city,addr_landmark,storemanager_name,RDC_id,stock_id)
VALUES
('$_POST[tinnumber]','$_POST[name]','$_POST[addr_state]','$_POST[addr_city]','$_POST[addr_landmark]','$_POST[storemanager_name]','$_POST[RDC_id]','$_POST[stock_id]')";
}

if ( $_POST['TableName'] == "stock"){
  echo "entered";
  $sql="INSERT INTO stock (timeofarrival,RDC_id)
VALUES
('$_POST[timeofarrival]','$_POST[RDC_id]')";
}

if ( $_POST['TableName'] == "stock_description"){
  $sql="INSERT INTO stock_description(stock_description_id,model,quantity,price,stock_id)
VALUES
('$_POST[stock_description_id]','$_POST[model]','$_POST[quantity]','$_POST[price]','$_POST[stock_id]')";
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
