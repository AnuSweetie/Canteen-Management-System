 <?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$addfood = $_POST['food'];
$price = $_POST['amount'];
if($addfood !=''||$price !=''){
//Insert Query of SQL
$query = mysql_query("insert into addfood(food, price) values ('$addfood', $price)");
echo "<br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
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
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href=""><div class="dropdown">
  Add details
  <div class="dropdown-content">
    <a href="administrator.php">add food</a>
    <a href="addoffer.php">add offers</a>
  </div>
</div></b></td>
<td><center><b><div class="dropdown"><a STYLE="text-decoration:none;color:azure;" href="removefood.php">Remove food</a>
</div></b></td>
<td><center><b><div class="dropdown"><a STYLE="text-decoration:none;color:azure;"  href="Orderdetail.php">Take order</a>
</div></b></td></p>
<td><center><b><div class="dropdown"><font color=azure>Report<div class="dropdown-content">
    <a href="orderdate.php">sales as per date</a>
    <a href="orderitem.php">sales as per item</a>
    <a href="ordertotal.php">total earnings</a>
  </div>
</div></b></td></p>
<td><center><b><div class="dropdown"><a STYLE="text-decoration:none;color:azure;" href="logout.php">Log out</a>
</div></b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-size:cover;">
<center>
<h2>Add FOOD items</h2>
<form action="" method="post">
<h4> Food name:<input type="text" name="food"><br>
Amount:<input type="text" name="amount"><br>
<button type="submit" class="cancelbtn">Cancel</button>
<button type="submit" class="submit" name="submit">Add Food</button><br></font>
</form>
</body>
</html>
