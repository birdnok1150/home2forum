<!DOCTYPE html>
<html>
<head>
	<title>Home2Forum Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href=<?php echo base_url("assets/dist/css/bootstrap.min.css")?>>

	<link rel="stylesheet" href=<?php echo base_url("assets/dist/css/material-fullpalette.min.css")?>>
	<!-- Optional theme -->
	<link rel="stylesheet" href=<?php echo base_url("assets/dist/css/material-wfont.min.css")?>>

	<link rel="stylesheet" href=<?php echo base_url("assets/dist/css/ripples.min.css")?>>

	<!-- Latest compiled and minified JavaScript -->
	<script src=<?php echo base_url("assets/dist/js/jquery-1.11.1.min.js")?>></script>
	<script src=<?php echo base_url("assets/dist/js/bootstrap.min.js")?>></script>
	<script src=<?php echo base_url("assets/dist/js/material.min.js")?>></script>
	<script src=<?php echo base_url("assets/dist/js/ripples.min.js")?>></script>
	<style>
	.card-container {
    /*padding: 40px 40px;*/width: 35%;
    margin-top: 50px;
    /*padding: 40px 40px;*/
	}
	.card-container.card {

	}
	.card {
    background-color: #F7F7F7;
    width: 100%;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    /*margin-top: 50px;*/
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    
    -moz-border-top-left-radius: 0px;
    -webkit-border-top-left-radius: 0px;
    border-top-left-radius: 0px;
    -moz-border-top-right-radius: 0px;
    -webkit-border-top-right-radius: 0px;
    border-top-right-radius: 0px;

    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

@media (max-width: 767px){
	.card-container{
    width: 100%;
    /*padding: 40px 40px;*/
	}
	.card-container.card {
    width: 100%;
    /*padding: 40px 40px;*/
	}
	.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    
    -moz-border-top-left-radius: 0px;
    -webkit-border-top-left-radius: 0px;
    border-top-left-radius: 0px;
    -moz-border-top-right-radius: 0px;
    -webkit-border-top-right-radius: 0px;
    border-top-right-radius: 0px;

    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}
}
.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
#header{
	padding: 20px;
	background: #009587;
	color: white;
	-moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;

    -moz-border-bottom-left-radius: 0px;
    -webkit-border-bottom-left-radius: 0px;
    border-bottom-left-radius: 0px;
    -moz-border-bottom-right-radius: 0px;
    -webkit-border-bottom-right-radius: 0px;
    border-bottom-right-radius: 0px;

    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}


	</style>
</head>
<body>
	<center>
		<div class="container">
        	
           <div class = "card-container">
            <div id = "header">
        		<h3>Home2NDForum</h3>
        	</div>
        	<div class="card">
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <form class="form-group" action = "<?php echo base_url('index.php/admin/login') ?>" method="post">
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="Username" required autofocus>
	                <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
	                <div id="remember" class="checkbox">
	                    <label>
	                        <input type="checkbox"/>
	                        <span class = "checkbox-material">
	                        	<span class = "check"></span>
	                        	Remember me
	                        </span>
	                        
	                    </label>
	                </div>
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Log In</button>
	            </form>
	            <a href="#" class="forgot-password">
	                Forgot the password?
	            </a>
	            <p><?php echo $this->session->flashdata('msg');?><p>
        	</div>
        </div>
    </div>
    </center>


	<!-- <div class="container">
			<div class="row login_box">
			    <div class="col-md-12 col-xs-12" align="center">
		            <div class="line"><h3>12 : 30 AM</h3></div>
		            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>   
		            <h1>Hi Guest</h1>
		            <span>INDIAN</span>
			    </div>
		       
		        <div class="col-md-12 col-xs-12 login_control">
		                
		                <div class="control">
		                    <div class="label">Email Address</div>
		                    <input type="text" class="form-control" value="admin@gmail.com"/>
		                </div>
		                
		                <div class="control">
		                     <div class="label">Password</div>
		                    <input type="password" class="form-control" value="123456"/>
		                </div>
		                <div align="center">
		                     <button class="btn btn-orange">LOGIN</button>
		                </div>
		        </div>
		    </div>
		</div> -->
	
</body>
</html>