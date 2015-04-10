<?php
require_once('user.php');

//Instantiate user object
$user = new user();
?>

<html>
<title>Users Address Book</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<h1 align="center">
Update Record </h1>
<hr style="height:5px;border:none;color:#333;background-color:#333;" />
<br>

<head>


</head>

<body>
  
  <?php
    $uid = $_GET['uid'];
    $row = $user->getUserById($uid);
  ?>
  
  <form action="index.php" method="post">
   <input type="hidden" name="uid" value="<?php echo $uid;?>"  />
    <tr>
      <td>Name</td>
      <td><input type='text' name='uname' id="uname" value="<?php echo $row['name']?>"  size="30" /></td>
    </tr><br>
    <tr>
      <td>Age</td>
      <td><input type='text' name='uage' id="uage" value="<?php echo $row['age']?>"  size="30" maxlength="3" /></td>
    </tr> <br>
    <tr>
      <td>Address</td>
      <td><input type='text' name='uaddress' id="uaddress" value="<?php echo $row['address']?>"  size="30" /></td>
    </tr> <br>
	<tr>
      <td>Hobbies</td>
      <td><input type='text' name='uhobbies' id="uhobbies" value="<?php echo $row['hobbies']?>"  size="30" /></td>
    </tr><br>
	<tr>
      <td>Work</td>
      <td><input type='text' name='uwork' id="uwork" value="<?php echo $row['work']?>"   size="30"/></td>
    </tr>
	<tr><br>
      <td>Mobile Number</td>
      <td><input type='text' name='umobile' id="umobile" value="<?php echo $row['mobile']?>" size="30" maxlength="11" /></td>
    </tr> <br>   
   <tr>
      <td colspan='3'><input type='submit' name='update' value='Update Record' 
	  title="Click here to save the record in the database."/></td>
    </tr> </table>
  </form>        
  
</body>
</html>