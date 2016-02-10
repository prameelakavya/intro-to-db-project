<html>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var sel = '<?php echo $_POST['formselecttable']; ?>';
    alert(sel);
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

<!----------------------------------------CUSTOMER------------------------------->
<form action="updateforms.php" id="customer" method="post" style="display:none;">
<select name="customer_id_pkey">
<?php
$query = "SELECT customer_id FROM customer";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['customer_id']}'>{$row['customer_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!---------------------------------------EMPLOYEE----------------------------------->
<form action="updateforms.php" id="employee" method="post" style="display:none;">
<select name="employee_id_pkey">
<?php
$query = "SELECT employee_id FROM employee";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['employee_id']}'>{$row['employee_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!------------------------------------INVOICE------------------------------------------>
<form action="updateforms.php" id="invoice" method="post" style="display:none;">
<select name="invoice_id_pkey">
<?php
$query = "SELECT invoice_id FROM invoice";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['invoice_id']}'>{$row['invoice_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!------------------------------------OFFER----------------------------------------------->
<form action="updateforms.php" id="offer" method="post" style="display:none;">
<select name="offer_id_pkey">
<?php
$query = "SELECT offer_id FROM offer";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['offer_id']}'>{$row['offer_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!----------------------------------PRODUCT----------------------------------------------->
<form action="updateforms.php" id="product" method="post" style="display:none;">
<select name="product_id_pkey">
<?php
$query = "SELECT product_id FROM product";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['product_id']}'>{$row['product_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!-------------------------------RETAILDISTRIBUTIONCENTER--------------------------------->
<form action="updateforms.php" id="retaildistributioncenter" method="post" style="display:none;">
<select name="retaildistributioncenter_id_pkey">
<?php
$query = "SELECT RDC_id FROM retaildistributioncenter";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['RDC_id']}'>{$row['RDC_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!-----------------------------SHOWROOM--------------------------------------------------->
<form action="updateforms.php" id="showroom" method="post" style="display:none;">
<select name="showroom_id_pkey">
<?php
$query = "SELECT showroom_id FROM showroom";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['showroom_id']}'>{$row['showroom_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!-------------------------------------STOCK------------------------------------------------>
<form action="updateforms.php" id="stock" method="post" style="display:none;">
<select name="stock_id_pkey">
<?php
$query = "SELECT stock_id FROM stock";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['stock_id']}'>{$row['stock_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!---------------------------------STOCK_DESCRIPTION------------------------------------------->
<form action="updateforms.php" id=stock_description" method="post" style="display:none;">
<select name="stock_description_id_pkey">
<?php
$query = "SELECT stock_description_id FROM stock_description";
$result = mysql_query($query) or die("Unable to query");
while($row=mysql_fetch_array($result))
{
 echo "<option value='{$row['stock_description_id']}'>{$row['stock_description_id']}</option>" ;
}
?>
</select>
<input type="submit" name="submit" value="submit" />
<input name="TableName1" value= <?php echo $_POST['formselecttable']; ?> />
</form>

<!------------------------------------------------------------------------------------------------>
<?php
mysql_close($con);
?>
</body>
</html>
