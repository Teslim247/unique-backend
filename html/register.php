<?php $AppName='UBS Admin'; 

/*
Author: Harry Lifford
URL: https://www.harrylifford.com/
*/
require_once('classes/core.php');
$user= new user();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="register.js"></script>

</head>

<body>
    <?php
    include('header.php');
    ?>
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Register Account.</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Fullname" name="fullname" id="fullname" />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="email Address" name="useremail" id="useremail" />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>

       <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword" />
        </div>
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-register" id="btn-register">
    		<span class="glyphicon glyphicon-user"></span> &nbsp; Create
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>