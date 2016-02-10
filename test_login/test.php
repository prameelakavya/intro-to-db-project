<html>

<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#sub").click(function(){
    var sel = document.getElementById("tables").selectedIndex;
    $("#" + document.getElementsByTagName("option")[sel].value).show();
  });
  $("#go").click(function(){
    $("#fieldform").hide();
  });
});
</script>

</head>

<body>
<form action="#" method="post">
<select name="formselecttable" id="tables">
   <option value="">select...</option>
   <option value="customer">customer</option>
   <option value="employee">employee</option>
   <option value="invoice">invoice</option>
   <option value="offer">offer</option>
   <option value="product">product</option>
   <option value="retaildistributioncenter">retaildistributioncenter</option>
   <option value="showroom">showroom</option>
   <option value="stock">stock</option>
   <option value="stock_description">stock_description</option>
</select>
   
<select name="formselectoperation">
   <option value="">select...</option>
   <option value="insert">insert</option>
   <option value="update">update</option>
   <option value="delete">delete</option>
</select> 
</form>
<button id="sub" >submit</button> 

<br><br>

<div id="fieldform" width="600px" height="600px" >

<form action="#" id="customer" method="post" style="display:none;">
customer_id: <input type="text" name="customer_id" /><br><br>
dateofpurchase: <input type="text" name="dateofpurchase" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="employee" method="post" style="display:none;">
employee_id : <input type="text" name="employee_id" /><br><br>
addr_state: <input type="text" name="addr_state" /><br><br>
addr_city: <input type="text" name="addr_city" /><br><br>
addr_housenumber: <input type="text" name="addr_housenumber" /><br><br>
addr_streetnumber: <input type="text" name="addr_streetnumber" /><br><br>
name: <input type="text" name="name" /><br><br>
salary:<input type="text" name="salary" /><br><br>
dateofbirth:<input type="text" name="dateofbirth" /><br><br>
age:<input type="text" name="age" /><br><br>
salesman_flag:<input type="text" name="salesman_flag" /><br><br>
salesman_grade:<input type="text" name="salesman_grade" /><br><br>
supervisor_flag:<input type="text" name="supervisor_flag" /><br><br>
supervisor_grade:<input type="text" name="supervisor_grade" /><br><br>
storemanager_flag:<input type="text" name="storemanager_flag" /><br><br>
storemanager_grade:<input type="text" name="storemanager_grade" /><br><br>
billingstaff_flag:<input type="text" name="billingstaff_flag" /><br><br>
billingstaff_grade:<input type="text" name="billingstaff_grade"/><br><br>
qualityinspector_flag:<input type="text" name="qualityinspector_flag"/><br></br>
qualityinspector_grade:<input type="text" name="qualityinspector_grade"/><br><br>
tinnumber:<input type="text" name="tinnumber"/><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="invoice" method="post" style="display:none;">
invoice_id:<input type="text" name="invoice_id" /><br><br>
date:<input type="text" name="date" /><br><br>
totalprofitperday:<input type="text" name="totalprofitperday" /><br><br>
totalmrpperday:<input type="text" name="totalmrpperday" /><br><br>
totalmanufacturingcostperday:<input type="text" name="totalmanufacturingcostperday" /><br><br>
RDC_id:<input type="text" name="RDC_id" /><br><br>
<button id="go">Go</button>
</form> 

<form action="#" id="offer" method="post" style="display:none;">
article_number:<input type="text" name="article_number" /><br><br>
offer_id:<input type="text" name="offer_id" /><br><br>
discount:<input type="text" name="discount" /><br><br>
startdate:<input type="text" name="startdate" /><br><br>
enddate:<input type="text" name="enddate" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="product" method="post" style="display:none;">
article_number:<input type="text" name="article_number" /><br><br>
marketedby:<input type="text" name="marketedby" /><br><br>
modelname:<input type="text" name="modelname" /><br><br>
importedby:<input type="text" name="importedby" /><br><br>
manufacturedby:<input type="text" name="manufacturedby" /><br><br>
mrp:<input type="text" name="mrp" /><br><br>
trademark:<input type="text" name="trademark" /><br><br>
tinnumber:<input type="text" name="tinnumber" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="retaildistributioncenter" method="post" style="display:none;">
RDC_id:<input type="text" name="RDC_id" /><br><br>
name:<input type="text" name="name" /><br><br>
addr_area:<input type="text" name="addr_area" /><br><br>
addr_city:<input type="text" name="addr_city" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="showroom" method="post" style="display:none;">
tinnumber:<input type="text" name="tinnumber" /><br><br>
name:<input type="text" name="name" /><br><br>
addr_state:<input type="text" name="addr_state" /><br><br>
addr_city:<input type="text" name="addr_city" /><br><br>
addr_landmark:<input type="text" name="addr_landmark" /><br><br>
storemanager_name:<input type="text" name="storemanager_name" /><br><br>
RDC_id:<input type="text" name="RDC_id" /><br><br>
stock_id:<input type="text" name="stock_id" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id="stock" method="post" style="display:none;">
stock_id:<input type="text" name="" /><br><br>
timeofarrival:<input type="text" name="" /><br><br>
RDC_id:<input type="text" name="" /><br><br>
<button id="go">Go</button>
</form>

<form action="#" id=stock_description" method="post" style="display:none;">
stock_description_id:<input type="text" name="" /><br><br>
model:<input type="text" name="" /><br><br>
quantity:<input type="text" name="" /><br><br>
price:<input type="text" name="" /><br><br>
stock_id:<input type="text" name="" /><br><br>
<button id="go">GO</button>
</form>

</div>

<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Bata_DB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if ( $_POST['formselecttable'] == "customer"){

  $sql="INSERT INTO customer (customer_id,dateofpurchase)
VALUES
('$_POST[customer_id]','$_POST[dateofpurchase]')";
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
mysql_close($con);
?>

</body>

</html>
