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
<td><center><b><a STYLE="text-decoration:none; color:azure;"><div class="dropdown">Report<div class="dropdown-content">
    <a href="orderdate.php">sales as per date</a>
    <a href="orderitem.php">sales as per item</a>
    <a href="#">total earnings</a>
  </div>
</div></b></td></p>
<td><center><b><a STYLE="text-decoration:none; color:azure;" href="logout.php"><font color=azure><div class="dropdown">Log_out</a>
</div></b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-repeat:none;">
<center>
<h2>TOTAL EARNING</h2>
<form action="" method="post">
<h4> From date:<input type="date" name="from"><br>
<h4>To date:<input type="date" name="to"><br>
<button type="submit" class="submit" name="submit">CALCULATE</button></font><br>
</form>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$from = $_POST['from'];
$to = $_POST['to'];
if($from !='' || $to !=''){
//Insert Query of SQL
$query = mysql_query("SELECT SUM(total_amount) FROM takeorder where date BETWEEN '".$from."' and '".$to."'");
while ($row = mysql_fetch_array($query))   
{
echo "<font color=white>Total Earning:".$row['SUM(total_amount)'];
}
}
}
mysql_close($connection);  
?>
</body>
</html>
