<html>
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var sel = '<?php echo $_POST['TableName1']; ?>';
    $("#" + sel).show();
});
</script>

<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Bata_DB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>

<div id="fieldform" width="600px" height="600px" >

<!--------------------------------CUSTOMER------------------------------------------------>
<form action="updatebata.php" id="customer" method="post" style="display:none;">
<?php
$x= $_POST['customer_id_pkey'];
$query1 = "SELECT * FROM customer WHERE customer_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
customer_id: <input type="text" name="customer_id"  value=<?php echo $row1['customer_id']; ?> /> <br><br>
dateofpurchase: <input type="text" name="dateofpurchase" value=<?php echo $row1['dateofpurchase']; ?> /><br><br>
<input  type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!---------------------------------EMPLOYEE----------------------------------------------->
<!--<form action="updatebata.php" id="employee" method="post" style="">
<?php
$x= $_POST['employee_id_pkey'];
$query1 = "SELECT * FROM employee WHERE  employee_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
employee_id : <input type="text" name="employee_id" value=<?php echo $row1['employee_id']; ?> /><br><br>
addr_state: <input type="text" name="addr_state" value=<?php echo $row1['addr_state']; ?> /><br><br>
addr_city: <input type="text" name="addr_city" value=<?php echo $row1['addr_city']; ?> /><br><br>
addr_housenumber: <input type="text" name="addr_housenumber" value=<?php echo $row1['addr_housenumber']; ?> /><br><br>
addr_streetnumber: <input type="text" name="addr_streetnumber" value=<?php echo $row1['addr_streetnumber']; ?> /><br><br>
name: <input type="text" name="name" value=<?php echo $row1['name']; ?> /><br><br>
salary:<input type="text" name="salary" value=<?php echo $row1['salary']; ?> /><br><br>
dateofbirth:<input type="text" name="dateofbirth" value=<?php echo $row1['dateofbirth']; ?> /><br><br>
age:<input type="text" name="age" value=<?php echo $row1['age']; ?> /><br><br>
salesman_flag:<input type="text" name="salesman_flag" value=<?php echo $row1['salesman_flag']; ?> /><br><br>
salesman_grade:<input type="text" name="salesman_grade" value=<?php echo $row1['salesman_grade']; ?> /><br><br>
supervisor_flag:<input type="text" name="supervisor_flag" value=<?php echo $row1['supervisor_flag']; ?> /><br><br>
supervisor_grade:<input type="text" name="supervisor_grade" value=<?php echo $row1['supervisor_grade']; ?> /><br><br>
storemanager_flag:<input type="text" name="storemanager_flag" value=<?php echo $row1['storemanager_flag']; ?> /><br><br>
storemanager_grade:<input type="text" name="storemanager_grade" value=<?php echo $row1['storemanager_grade']; ?>/><br><br>
billingstaff_flag:<input type="text" name="billingstaff_flag" value=<?php echo $row1['billingstaff_flag']; ?> /><br><br>
billingstaff_grade:<input type="text" name="billingstaff_grade" value=<?php echo $row1['billingstaff_grade']; ?> /><br><br>
qualityinspector_flag:<input type="text" name="qualityinspector_flag" value=<?php echo $row1['qualityinspector_flag']; ?> /><br></br>
qualityinspector_grade:<input type="text" name="qualityinspector_grade" value=<?php echo $row1['qualityinspector_grade']; ?> /><br><br>
tinnumber:<?php
$query = "SELECT tinnumber FROM showroom";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='tinnumber'>";
echo "<option value='{$row1['tinnumber']}'>{$row1['tinnumber']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['tinnumber']}'>{$row['tinnumber']}</option>" ;
}
echo "</select>";
?><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!---------------------------------INVOICE-------------------------------------------->
<!--<form action="updatebata.php" id="invoice" method="post" style="">
<?php
$x= $_POST['invoice_id_pkey'];
$query1 = "SELECT * FROM invoice WHERE  invoice_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
invoice_id:<input type="text" name="invoice_id" value=<?php echo $row1['invoice_id']; ?> /><br><br>
date:<input type="text" name="date" value=<?php echo $row1['date']; ?> /><br><br>
totalprofitperday:<input type="text" name="totalprofitperday" value=<?php echo $row1['totalprofitperday']; ?> /><br><br>
totalmrpperday:<input type="text" name="totalmrpperday" value=<?php echo $row1['totalmrpperday']; ?> /><br><br>
totalmanufacturingcostperday:<input type="text" name="totalmanufacturingcostperday" value=<?php echo $row1['totalmanufacturingcostperday']; ?> /><br><br>
RDC_id:<?php
$query = "SELECT RDC_id FROM retaildistributioncenter";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='RDC_id'>";
echo "<option value='{$row1['RDC_id']}'>{$row1['RDC_id']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['RDC_id']}'>{$row['RDC_id']}</option>" ;
}
echo "</select>";
?><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form> 

<!-----------------------------OFFER---------------------------------------------------->
<!--<form action="updatebata.php" id="offer" method="post" style="">
<?php
$x= $_POST['offer_id_pkey'];
$query1 = "SELECT * FROM offer WHERE  offer_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
article_number:<?php
$query = "SELECT article_number FROM product";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='article_number'>";
echo "<option value='{$row1['article_number']}'>{$row1['article_number']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['article_number']}'>{$row['article_number']}</option>" ;
}
echo "</select>";
?><br><br>
offer_id:<input type="text" name="offer_id"  value=<?php echo $row1['offer_id']; ?> /><br><br>
discount:<input type="text" name="discount"  value=<?php echo $row1['discount']; ?> /><br><br>
startdate:<input type="text" name="startdate"  value=<?php echo $row1['startdate']; ?> /><br><br>
enddate:<input type="text" name="enddate"  value=<?php echo $row1['enddate']; ?> /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!--------------------------------PRODUCT------------------------------------------------------->
<!--<form action="updatebata.php" id="product" method="post" style="">
<?php
$x= $_POST['product_id_pkey'];
$query1 = "SELECT * FROM product WHERE  product_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
article_number:<input type="text" name="article_number" value=<?php echo $row1['article_number']; ?> /><br><br>
marketedby:<input type="text" name="marketedby" value=<?php echo $row1['marketedby']; ?> /><br><br>
modelname:<input type="text" name="modelname" value=<?php echo $row1['modelname']; ?> /><br><br>
importedby:<input type="text" name="importedby" value=<?php echo $row1['importedby']; ?> /><br><br>
manufacturedby:<input type="text" name="manufacturedby" value=<?php echo $row1['manufacturedby']; ?> /><br><br>
mrp:<input type="text" name="mrp" value=<?php echo $row1['mrp']; ?> /><br><br>
trademark:<input type="text" name="trademark" value=<?php echo $row1['trademark']; ?> /><br><br>
tinnumber:<?php
$query = "SELECT tinnumber FROM showroom";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='tinnumber'>";
echo "<option value='{$row1['tinnumber']}'>{$row1['tinnumber']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['tinnumber']}'>{$row['tinnumber']}</option>" ;
}
echo "</select>";
?><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!------------------------------RETAILDISTRIBUTIONCENTER--------------------------------------------->
<!--<form action="updatebata.php" id="retaildistributioncenter" method="post" style="">
<?php
$x= $_POST['retaildistributioncenter_id_pkey'];
$query1 = "SELECT * FROM retaildistributioncenter WHERE  RDC_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
RDC_id:<input type="text" name="RDC_id" value=<?php echo $row1['RDC_id']; ?> /><br><br>
name:<input type="text" name="name" value=<?php echo $row1['name']; ?> /><br><br>
addr_area:<input type="text" name="addr_area" value=<?php echo $row1['addr_area']; ?> /><br><br>
addr_city:<input type="text" name="addr_city" value=<?php echo $row1['addr_city']; ?> /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!---------------------------SHOWROOM---------------------------------------------------->
<!--<form action="updatebata.php" id="showroom" method="post" style="">
<?php
$x= $_POST['showroom_id_pkey'];
$query1 = "SELECT * FROM showroom WHERE  showroom_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
tinnumber:<?php
$query = "SELECT tinnumber FROM showroom";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='tinnumber'>";
echo "<option value='{$row1['tinnumber']}'>{$row1['tinnumber']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['tinnumber']}'>{$row['tinnumber']}</option>" ;
}
echo "</select>";
?><br><br>
name:<input type="text" name="name" value=<?php echo $row1['name']; ?> /><br><br>
addr_state:<input type="text" name="addr_state" value=<?php echo $row1['addr_state']; ?> /><br><br>
addr_city:<input type="text" name="addr_city" value=<?php echo $row1['addr_city']; ?> /><br><br>
addr_landmark:<input type="text" name="addr_landmark" value=<?php echo $row1['addr_landmark']; ?> /><br><br>
storemanager_name:<input type="text" name="storemanager_name" value=<?php echo $row1['storemanager_name']; ?> /><br><br>
RDC_id:<?php
$query = "SELECT RDC_id FROM retaildistributioncenter";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='RDC_id'>";
echo "<option value='{$row1['RDC_id']}'>{$row1['RDC_id']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['RDC_id']}'>{$row['RDC_id']}</option>" ;
}
echo "</select>";
?><br><br>
stock_id:<input type="text" name="stock_id" value=<?php echo $row1['stock_id']; ?> /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!---------------------------------STOCK------------------------------------------------------>
<form action="updatebata.php" id="stock" method="post" style="">
<?php
$x= $_POST['stock_id_pkey'];
$query2 = "SELECT * FROM stock WHERE  stock_id = $x ";
$result2 = mysql_query($query2) or die("Unable to query");
$row2=mysql_fetch_assoc($result2);
?>
RDC_id:<?php
$query = "SELECT RDC_id FROM retaildistributioncenter";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='RDC_id'>";
echo "<option value='{$row2['RDC_id']}'>{$row2['RDC_id']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['RDC_id']}'>{$row['RDC_id']}</option>" ;
}
echo "</select>";
?><br><br>
stock_id:<input type="text" name="stock_id" value=<?php echo $row2['stock_id']; ?> /><br><br>
timeofarrival:<input type="text" name="timeofarrival" value=<?php echo $row2['timeofarrival']; ?> /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">Go</button>
</form>

<!------------------------------- STOCK_DESCRIPTION------------------------------------->
<!--<form action="updatebata.php" id=stock_description" method="post" style="">
<?php
$x= $_POST['stock_description_id_pkey'];
$query1 = "SELECT * FROM stock_description WHERE  stock_description_id = $x ";
$result1 = mysql_query($query1) or die("Unable to query");
$row1=mysql_fetch_assoc($result1);
?>
stock_description_id:<input type="text" name="stock_description_id" value=<?php echo $row1['stock_description_id']; ?> /><br><br>
model:<input type="text" name="model" value=<?php echo $row1['model']; ?> /><br><br>
quantity:<input type="text" name="quantity" value=<?php echo $row1['quantity']; ?> /><br><br>
price:<input type="text" name="price" value=<?php echo $row1['price']; ?> /><br><br>
stock_id:<?php
$query = "SELECT stock_id FROM stock";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='stock_id'>";
echo "<option value='{$row1['stock_id']}'>{$row1['stock_id']}</option>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['stock_id']}'>{$row['stock_id']}</option>" ;
}
echo "</select>";
?><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['TableName1']; ?> />
<button id="go">GO</button>
</form>
<!--------------------------------------------------------------------------------------->

</div>
<?php
mysql_close($con);
?>
</body>
</html>
