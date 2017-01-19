<?php

/*session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}
*/
$profpic = "img1.jpg";
?>


<!DOCTYPE html>
<html lang="en">

<head>

<title>Tanishk-Internshala</title>    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="script1.js"></script>


<style>  
  html,body
{
height:100%;
background-image: url('<?php echo $profpic;?>');
}


#wrap
{
min-height: 100%;
}

#main
{
overflow:auto;
padding-bottom:150px;
}

.footer
{
position: relative;
margin-top: -100px;
height: 100px;
clear:both;
padding-top:20px;
color:#000000;
}
</style>

</head>


<!-- Navigation -->
<body>

   <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
	    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
	     <span class='sr-only'>Toggle Navigation</span>
	     <span class='icon-bar'></span>
	     <span class='icon-bar'></span>
	     <span class='icon-bar'></span>
	   </button>
       <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
	    <li><a class="btn btn-default" role="button" data-toggle="modal" data-target="#m1">Log-in</a></li>
	    <li><a class="btn btn-default" role="button" data-toggle="modal" data-target="#m2">Sign-up</a></li>
       </ul>
    </div>
	</div>
</nav>

<!-- footer -->
<div id="wrap">
<div id="main" class="container clear-top">
<div class="row">
<div class="span12">
</div>
</div>
</div>
</div>
<footer class="footer" style="background-color:#000000">
<div class='row'>
<div class='col-xs-4 col-sm-3 col-sm-offset-1'><a href='#'><h4>About us</h4></a></div>
<div class='col-xs-4 col-sm-3 col-sm-offset-5 col-xs-offset-4'><a href='#'><h4>Refund</h4></a></div>
</div>
<div class='row'>
<div class='col-xs-4 col-sm-3 col-sm-offset-1'><a href='#'><h4>Contact us</h4></a></div>
<div class='col-xs-4 col-sm-3 col-sm-offset-5 col-xs-offset-4'><a href='#'><h4>Support</h4></a></div>
</div>
</footer>


 <!-- Modal for Signup -->
 
<div class="modal fade" id="m2">

   <div class="modal-dialog">  
	 <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
        
         <div class="modal-body">
	          <!-- Form for Signup -->
	
	         <div class="signin-form">

	         <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="First name" name="first_name" id="first_name" />
        </div>
		
		 <div class="form-group">
        <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
		
		 <div class="form-group">
        <input type="number" class="form-control" placeholder="Phone number" name="phone" id="phone" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>
        <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
             <span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
            </button> 
        </div>  
      
 </form>
 
 </div></div></div></div></div></div>
 
 
 <!-- Modal for Login -->

<div class="modal fade" id="m1">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <div class="modal-body">
		
          <!-- Form Login -->
		  
		  <div class="signin-form">
          
     
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Log In</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">

            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
			</button> 
			 <p class="text-right"><a href="#">Forgot password?</a></p>
        </div>  
      
	    
      </form>

    </div>
    
</div></div></div></div>
     


</body>
</html>