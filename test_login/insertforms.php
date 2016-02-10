<html>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var sel = '<?php echo $_POST['formselecttable']; ?>';
    $("#" + sel).show();
});
</script>

<div id="fieldform" width="600px" height="600px" >

<form action="insertbata.php" id="customer" method="post" style="display:none;">
customer_id: <input type="text" name="customer_id" /><br><br>
dateofpurchase: <input type="text" name="dateofpurchase" /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="employee" method="post" style="display:none;">
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
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="invoice" method="post" style="display:none;">
invoice_id:<input type="text" name="invoice_id" /><br><br>
date:<input type="text" name="date" /><br><br>
totalprofitperday:<input type="text" name="totalprofitperday" /><br><br>
totalmrpperday:<input type="text" name="totalmrpperday" /><br><br>
totalmanufacturingcostperday:<input type="text" name="totalmanufacturingcostperday" /><br><br>
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
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form> 

<form action="insertbata.php" id="offer" method="post" style="display:none;">
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
offer_id:<input type="text" name="offer_id" /><br><br>
discount:<input type="text" name="discount" /><br><br>
startdate:<input type="text" name="startdate" /><br><br>
enddate:<input type="text" name="enddate" /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="product" method="post" style="display:none;">
article_number:<input type="text" name="article_number" /><br><br>
marketedby:<input type="text" name="marketedby" /><br><br>
modelname:<input type="text" name="modelname" /><br><br>
importedby:<input type="text" name="importedby" /><br><br>
manufacturedby:<input type="text" name="manufacturedby" /><br><br>
mrp:<input type="text" name="mrp" /><br><br>
trademark:<input type="text" name="trademark" /><br><br>
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
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="retaildistributioncenter" method="post" style="display:none;">
RDC_id:<input type="text" name="RDC_id" /><br><br>
name:<input type="text" name="name" /><br><br>
addr_area:<input type="text" name="addr_area" /><br><br>
addr_city:<input type="text" name="addr_city" /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="showroom" method="post" style="display:none;">
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
name:<input type="text" name="name" /><br><br>
addr_state:<input type="text" name="addr_state" /><br><br>
addr_city:<input type="text" name="addr_city" /><br><br>
addr_landmark:<input type="text" name="addr_landmark" /><br><br>
storemanager_name:<input type="text" name="storemanager_name" /><br><br>
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
stock_id:<input type="text" name="stock_id" /><br><br>
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id="stock" method="post" style="display:none;">
timeofarrival:<input type="text" name="timeofarrival" /><br><br>
stock_id:<input type="text" name="stock_id" /><br><br>
RDC_id:<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Bata_DB');
define('DB_USER','root');
define('DB_PASSWORD','ammuurthebest');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$query = "SELECT RDC_id FROM retaildistributioncenter";
$result = mysql_query($query) or die("Unable to query");
echo "<select name='RDC_id'>";
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['RDC_id']}'>{$row['RDC_id']}</option>" ;
}
echo "</select>";
mysql_close($con);
?>
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">Go</button>
</form>

<form action="insertbata.php" id=stock_description" method="post" style="display:none;">
stock_description_id:<input type="text" name="stock_description_id" /><br><br>
model:<input type="text" name="model" /><br><br>
quantity:<input type="text" name="quantity" /><br><br>
price:<input type="text" name="price" /><br><br>
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
<input type="hidden" name="TableName" value= <?php echo $_POST['formselecttable']; ?> />
<button id="go">GO</button>
</form>

</div>
</body>
</html>
