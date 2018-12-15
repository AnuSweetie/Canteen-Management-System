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
<td><center><b><font color=azure><div class="dropdown"><a STYLE="text-decoration:none; color:white;"  href="logout.php">log_out</a>
</div></b></td></p></tr>
</table>
<body background="images\00.jpg">
<center><H1>CUSTOMER ORDER DETAILS</H1>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
//Insert Query of SQL
$query = mysql_query("SELECT * from takeorder");
echo "<table border='1' style='border-collapse: collapse;' height=200 width=900>"; 
echo "<th><font color=white> Transaction ID</th><th><font color=white> Customer Name</th><th><font color=white> Date</th>
<th><font color=white> Time</th><th><font color=white> Food Name</th><th><font color=white> Quantity</th>
<th><font color=white> Total Amount</th><th><font color=white> Delivered</th>";  
while ($row = mysql_fetch_array($query))   
{  
echo "<tr><td><font color=white><center> ".$row['transaction_id']."</td>
<td><font color=white><center> ".$row['customer_name']."</td>
<td><font color=white><center> ".$row['date1']."</td>
<td><font color=white><center> ".$row['time1']."</td>
<td><font color=white><center> ".$row['food_name']."</td>
<td><font color=white><center> ".$row['quantity']."</td>
<td><font color=white><center> ".$row['total_amount']."</td>
<td><input type=checkbox name=check /></td>
</tr>";
}

echo "</table>";
//$check=$_POST['submit'];
if(isset($_POST['submit'])) 
{
	$query=mysql_query("insert into canteen..order_delivered from canteen..addfood");
}
mysql_close($connection);  
?> 
<a href="EditableInvoice/index.php"><button type="submit" class="submit" name="submit" action="staffs.php">Submit</button>
</body>

</html>
