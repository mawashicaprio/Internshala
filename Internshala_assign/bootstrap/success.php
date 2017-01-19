<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

<style>  
  html,body
{
height:100%;
}

#wrap
{
min-height: 100%;
}

#main
{
overflow:auto;
padding-bottom:150px; /* this needs to be bigger than footer height*/
}

.footer
{
position: relative;
margin-top: -100px; /* negative value of footer height */
height: 100px;
clear:both;
padding-top:20px;
color:#000000;
}
</style>

</head>


<!-- Navigation -->
<body background="img.jpg">

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

<!--
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Successfully Registered.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
    </button>
    
</div>

</div>

-->
</body>
</html>