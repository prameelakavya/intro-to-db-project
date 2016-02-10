<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script>
 $(document).ready(function(){
 $("#1").change(function(){
         alert($("#1 option:selected").text()) ;
});
});
</script>
</head>
<body>
<?php
<select name="taskOption" id="1">
      <option value="first">First</option>
      <option value="second">Second</option>
      <option value="third">Third</option>
</select>
?>
</body>
</html>
