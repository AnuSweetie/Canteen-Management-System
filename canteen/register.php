<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$adminorstaff = $_POST['adminorstaff'];
$fullname = $_POST['fullname'];
$password = $_POST['psw'];
if($adminorstaff !=''||$fullname !='' ||$password !=''){
//Insert Query of SQL
$query = mysql_query("insert into register(admin_or_staff, full_name, password) values ('$adminorstaff', '$fullname', '$password')");
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
<td><p class="head1"><a STYLE=text-decoration:none href="front.php"><img src="images\logo.png" width="210" height="210"></a></p></td>
<td><p class="head"><left><img src="images\8.jpg" height=190 width=900></p></td>
</tr>
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr></table>
</head>
<table border="3px solid" width=1300  style="border-collapse:collapse">
<tr><td><center><b><a STYLE=text-decoration:none href="front.php"><font color=azure>Home</b></td>
<td><center><b><a STYLE=text-decoration:none href="about.php"><font color=azure>About Us</b></td>
<td><center><b><a STYLE=text-decoration:none href="contact.php"><font color=azure>Contact Us</b></td>
<td><center><b><a STYLE=text-decoration:none href="register.php"><font color="azure">Register here</b></td></p>
</tr>
</table>
<body background="images\00.jpg"><center>
<form action="register.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1><b><font color="grey">Sign Up</b></h1></font>
    <p><font color="azure">Please fill in this form to create an account.</p>
    <hr>
	
    <b><input type="radio" name="adminorstaff" value="Admin"> <b><em>Admin</em></b>
  <input type="radio" name="adminorstaff" value="Staff"><b><em> Staff</em></b><br></b>
	<input type="text" placeholder="Enter Full Name" name="fullname" maxlength=20 required>
	<br>
   
    <input type="password" placeholder="Enter Password" name="psw" maxlength=4 required>
	<br>
   
    
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="TnC.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <center><button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="submit" type="submit">Sign Up</button></center>
    </div>
  </div>
</form></font></center>
</body>
</html>
