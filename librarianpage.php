<?php 
session_start();  
if (isset($_SESSION['name']))
{    
    header("Location:login.php"); 
}
if (isset($_SESSION['name']))
{    
    header("Location:login.php"); 
}
?> 

<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="addusers.php" method = "post">
  First name:<input type="text" name="forename"><br>
  Last name:<input type="text" name="surname"><br>
  Password:<input type="password" name="passwd"><br>
  <!--Creates a drop down list-->
  Gender:<select name="gender">
		<option value="M">Male</option>
		<option value="F">Female</option>
	</select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="role" value="User" checked>User<br>
  <input type="radio" name="role" value="Librarian">Librarian<br>
  <input type="submit" value="Add User">
</form>

</body>
</html>