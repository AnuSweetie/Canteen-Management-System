<!doctype html>
<title>Automated centeen system</title>
<head>
<table background="images\216.jpg"><link rel="stylesheet" type="text/css" href="style.css" media="all">
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr>
<tr>
<td><p class="head1"><a href="front.php"><img src="images\logo.png" width="210" height="210"></a></p></td>
<td><p class="head"><left><img src="images\8.jpg" height=190 width=900></p></td>
</tr>
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr></table>
</head>
<table border="3px solid" width=1300  style="border-collapse:collapse">
<tr><td><center><b><a STYLE="text-decoration:none; color:azure;" href=""><div class="dropdown">
  Add_details
  <div class="dropdown-content">
    <a href="administrator.php">add food</a>
    <a href="addoffer.php">add offers</a>
  </div>
</div></b></td>
<td><center><b><a STYLE="text-decoration:none; color:azure;" href="removefood.php"><div class="dropdown">Remove_food</a>
</div></b></td>
<td><center><b><a STYLE="text-decoration:none; color:azure;" href="Orderdetail.php"><div class="dropdown">Take_order</a>
</div></b></td></p>
<td><center><b><a STYLE="text-decoration:none; color:azure;" href=""><div class="dropdown">Report<div class="dropdown-content">
    <a href="orderdate.php">sales as per date</a>
    <a href="orderitem.php">sales as per item</a>
    <a href="ordertotal.php">total earnings</a>
  </div>
</div></b></td></p>
<td><center><b><a STYLE="text-decoration:none; color:azure;" href="logout.php"><font color=azure><div class="dropdown">Log_out</a>
</div></b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-repeat:none;">
<center>
<h2>ORDER FORECASTING as per ITEM</h2>
<form action="" method="post">
<h4> From date:<input type="date" name="from"><br>
<h4>To date:<input type="date" name="to"><br>
<h4>Food name:<input type="text" name="food">

<br>
<button type="submit" class="submit" name="submit">Show</button></font>
</form>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$from = $_POST['from'];
$to = $_POST['to'];
$food = $_POST['food'];
if($from !='' || $to !=''){
//Insert Query of SQL
$query = mysql_query("SELECT food_name, quantity, total_amount FROM takeorder where date1 BETWEEN '".$from."' and '".$to."' AND food_name='".$food."'");
echo "<table border='3' style='border-collapse: collapse;' height=200 width=400>"; 
echo "<th><font color=white> Item</th><th><font color=white> Quantity</th><th><font color=white> Amount</th>";  
while ($row = mysql_fetch_array($query))   
{  
echo "<tr><td><font color=white><center> ".$row['food_name']."</td>
<td><font color=white><center> ".$row['quantity']."</td>
<td><font color=white><center> ".$row['total_amount']."</td>
</tr>";
}
echo "</table>";
}
}
mysql_close($connection);  
?>  
</body>
</html>
