<!-- insert.php -->
<html>
<title>Users Address Book</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<h1 align="center">
Add Record </h1>
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<br>

<form action="index.php" method="post" >
  <table>
    <tr>
      <td>Name</td>
      <td><input type='text' name='uname' id="uname" placeholder="Enter your name" size="30" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type='text' name='uage' id="uage" placeholder="Enter your age"  size="30" maxlength="3" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type='text' name='uaddress' id="uaddress" placeholder="Enter your address" size="30" /></td>
    </tr>
	<tr>
      <td>Hobbies</td>
      <td><input type='text' name='uhobbies' id="uhobbies" placeholder="Enter your hobbies" size="30" /></td>
    </tr>
	<tr>
      <td>Work</td>
      <td><input type='text' name='uwork' id="uwork"  placeholder="Enter your work" size="30"/></td>
    </tr>
	<tr>
      <td>Mobile Number</td>
      <td><input type='text' name='umobile' id="umobile"placeholder="Enter your mobile number" size="30" maxlength="11" /></td>
    </tr>
    <tr>
      <td colspan='3'><input type='submit' name='submit' value='Save Record' 
	  title="Click here to save the record in the database."/></td>
    </tr>
  </table>
</form>
</body>
</html>