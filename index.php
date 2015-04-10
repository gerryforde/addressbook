<?php
	require_once('user.php');

	//Instantiate user object
	$user = new user();
	
	// Add new user
	if(isset($_POST['submit'])){
		$user->uname = strtoupper($_POST['uname']);
		$user->uage = $_POST['uage'];
		$user->uaddress  = strtoupper($_POST['uaddress']);    
		$user->uhobbies  = strtoupper($_POST['uhobbies']);    
		$user->uwork  = strtoupper($_POST['uwork']);    
		$user->umobile = $_POST['umobile'];    
		
		if($user->uname == "" || $user->uage == "" || $user->uaddress == "" || $user->uhobbies == "" || $user->uwork == "" || $user->umobile == ""){
			echo "please insert all the fields <br>";
		} else {		
			$user->insert();
			echo "<script>";
			echo "alert('Record has been saved in the database.');";
			echo "</script>";
		}
	}
  
	// Edit user
	if(isset($_POST['update'])){
		$user->uid = $_POST['uid'];
		$user->uname = strtoupper($_POST['uname']);
		$user->uage = $_POST['uage'];
		$user->uaddress  = strtoupper($_POST['uaddress']);    
		$user->uhobbies  = strtoupper($_POST['uhobbies']);    
		$user->uwork  = strtoupper($_POST['uwork']);    
		$user->umobile = $_POST['umobile'];    
     
		if($user->uname =="" || $user->uage=="" || $user->uaddress=="" || $user->uhobbies =="" || $user->uwork=="" || $user->umobile==""){
			echo "Please insert all the fields <br>";
		} else {
			$user->update();
			header("Location:index.php");
			exit;
		}
	}
  
	// Delete user
	if (isset($_GET['uid'])){      
		$user->uid = $_GET['uid'];
		echo "<script>";
		echo "alert('Record has been erased in the database.');";
		echo "</script>";
		$user->delete();
		header("Location:index.php");
		//exit;
	}
?>

<html>
	<title>Users Address Book</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<body bgcolor="lightgreen">
	<br><br>
	<hr style="height:5px;border:none;color:#333;background-color:#333;" />
	<h1 align="center"> OOP Address Book </h1> 
	<hr style="height:5px;border:none;color:#333;background-color:#333;" />
	<br>
	<center>
		<input type='button' name='add' value='Create User' onclick=javascript:location.href='create.php' title="Click here to add records in the database." />
	</center>
	<br>
	<table border='1' align="center">
		<tr>
			<th>USERS ID</th>
			<th>NAME</th>
			<th>AGE</th>
			<th>ADDRESS</th>
			<th>HOBBIES</th>
			<th>WORK</th>
			<th>MOBILE NUMBER</th>
			<th>ACTIONS</th>
		</tr>
	
	<?php 
		$data = $user->display(); 
		$i = 0; 
		foreach( $data as $eachrecord ) {
			$i++;
	?>
		<tr>
			<td><?php echo $i; ?> </td>
			<td><?php echo $eachrecord ['name']; ?></td>
			<td><?php echo $eachrecord ['age']; ?></td>
			<td><?php echo $eachrecord ['address']; ?></td>
			<td><?php echo $eachrecord ['hobbies']; ?></td>
			<td><?php echo $eachrecord ['work']; ?></td>
			<td><?php echo $eachrecord ['mobile']; ?></td>
			<td>
				<a href="index.php?uid=<?php echo $eachrecord['id']; ?>" title="Click here to delete record in the database." >DELETE</a> 
				<a href="update.php?uid=<?php echo $eachrecord['id']; ?>" title="Click here to update record in the database.">UPDATE</a> 
			</td>
		</tr>
	<?php 
		} 
	?>
	</table>
</body>
</html>
