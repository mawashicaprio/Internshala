<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Tanishk-Internshala</title>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <a class="navbar-brand">Your Profile</a>
      </div>
	  
	  
</nav>
       
    
    
<div class="body-container">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
		
    </div>
</div>



<div class="container">
<table class="table">
<tr>
<td>
<strong>First-Name '<?php echo $row['first_name']; ?></strong> 
</td>

<td>
<strong>Last-Name '<?php echo $row['last_name']; ?></strong> 
</td>

<td>
<strong>Email-Address '<?php echo $row['user_email']; ?></strong> 
</td>

<td>
<strong>Phone number '<?php echo $row['phone']; ?></strong> 
</td>


</tr>
</table>
</div>
</div>

</body>
</html>