<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="../images/2ndhomeforum.png" />
	<link rel="stylesheet" href="../dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="../dist/css/material-fullpalette.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="../dist/css/material-wfont.min.css">

	<link rel="stylesheet" href="../dist/css/ripples.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../dist/js/jquery-1.11.1.min.js"></script>
	<script src="../dist/js/bootstrap.min.js"></script>
	<script src="../dist/js/material.min.js"></script>
	<script src="../dist/js/ripples.min.js"></script>
	<script type="text/javascript" src="../dist/js/jquery.canvasjs.min.js"></script>
	<style type="text/css">
		h4{
			margin-top: 23.940px ;
			font-size: 15px;
		}
		.container.jumbotron{
		  	padding: 5px;
		}
		hr{
		  	margin: 0px;
		}
		.nav>li>a>img{
			margin-top: -3px;
		}
		.nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
		    background:#fff;
		}
		a, a:hover, a:focus {
  			color: #D7EEEC;
		}
		 a:focus{
		 	color: #D7EEEC;
		 }
		.active{
			color: black;
		}
		/* Dropdown */
		.dropdown {
		    
		}
		.dropdown-menu>li>a {
		    color:#009587;
		}
		.dropdown-menu>li>a:hover {
		    color:rgba(0, 149, 135, 0.50);
		}

		.dropdown ul.dropdown-menu {
		    border-radius:4px;
		    box-shadow: 0 3px 10px rgba(0,0,0,.23),0 3px 10px rgba(0,0,0,.16);
		    width:100px;
		    z-index: 10;
		}
		
		.noti ul.dropdown-menu {
		    border-radius:4px;
		    box-shadow: 0 3px 10px rgba(0,0,0,.23),0 3px 10px rgba(0,0,0,.16);
		    width:300px;
		    z-index: 10;
		}
		.noti-text{
			color: rgba(0,0,0,.77);
		}
		.dropdown ul.dropdown-menu:before {
		    content: "";
		    border-bottom: 10px solid #fff;
		    border-right: 10px solid transparent;
		    border-left: 10px solid transparent;
		    position: absolute;
		    top: -10px;
		    right: 16px;
		    z-index: 10;
		}
		.dropdown ul.dropdown-menu:after {
		    content: "";
		    border-bottom: 12px solid #ccc;
		    position: absolute;
		    top: -12px;
		    right: 14px;
		    z-index: 9;
		}
		.badge-notify{
		   background:red;
		   position:absolute;
		   left: 35px;
		}
		.list-group .list-group-item .list-group-item-heading{
			font-size: 15px;
		}
		.list-group .list-group-item .row-content .least-content{
			font-size: 12px;
		}
		.btn-danger:not(.btn-link):not(.btn-flat){
			margin-left:90%;
		}

		/* Pagination */
		.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
		  z-index: 2;
		  color: #fff;
		  cursor: default;
		  background-color: #009587;
		  border-color: #428bca;
		}
		/* differen screen */
		@media screen and (max-width: 767px) {
			  .row-offcanvas {
			    position: relative;
			    -webkit-transition: all 0.25s ease-out;
			    -moz-transition: all 0.25s ease-out;
			    transition: all 0.25s ease-out;
			  }
			  .row-offcanvas-right
			  .sidebar-offcanvas {
			    right: -41.6%;
			  }

			  .row-offcanvas-left
			  .sidebar-offcanvas {
			    left: -41.6%;
			  }
			  .row-offcanvas-right.active {
			    right: 41.6%;
			  }
			  .row-offcanvas-left.active {
			    left: 41.6%;
			  }
			  .sidebar-offcanvas {
			    position: absolute;
			    top: 0;
			    width: 41.6%;
			  }
			  #sidebar {
			    padding-top:0;
			  }
			  h4{
				margin-top: 23.940px ;
				font-size: 12px;
			  }
			  .navbar-toggle.sideleft{
			  	float: left;
			  }
			  .sidebar-offcanvas.jumbotron{
			  	padding: 5px;
			  }
			  .container-fluid {
			  	padding-right: 5px;
  				padding-left: 5px;
			  }
			  .container.jumbotron{
			  	padding: 5px;
			  }
			  img.navbar-brand{
			  	width: 30px;
			  }
			  .col-md-9{
			  	padding-right: 0px;
			  	padding-left: 0px;
			  }
			  body .well, .container .well, .container-fluid .well, body .jumbotron, .container .jumbotron, .container-fluid .jumbotron{
			  	padding: 10px;
			  }
			  .list-group .list-group-item {

			  	padding: 0 5px;
			  }
			  .list-group li.list-group-item {
			  	color: #009587;
			  }
			  .navbar-nav .open .dropdown-menu{
			  	background: white;
			  }
			  .navbar .navbar-nav .open .dropdown-menu>li>a{
			  	color: #009587;
			  }
			  .dropdown ul.dropdown-menu:before {
			    content: none;
			  }
			  .btn-danger:not(.btn-link):not(.btn-flat){
				margin-left:80%;
			   }
		}
	</style>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		            <span class="mdi-action-settings"></span>
		        </button>
		        <button type="button" class="navbar-toggle sideleft" data-toggle="offcanvas" data-target=".sidebar-nav">
	             	<a href ="adminpage.php"><span class="mdi-navigation-arrow-back"></span></a>
	           </button>
		        <a class="navbar-brand" href="adminpage.php"><span> Home2NDForum</span></a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		        <ul class="nav navbar-nav navbar-right">
		            <li><a href="javascript:void(0)"> Admin</a></li>
		            <li class="dropdown noti">
		            	<a href="" class="dropdown-toggle" data-toggle="dropdown">
		            		<span class = "noti-icon">
			            		<span class="badge badge-notify">3</span>
			            		<i class = "mdi-social-notifications"></i>
		            		</span>
		            	</a>
			          <ul class="list-group dropdown-menu" role="menu">
			          	<a>
				          	<li class="list-group-item">
							    <center><h3>Notifications</h3></center>
							</li>
						</a>
						<li class="divider"></li>
			          	<a href="">
						    <li class="list-group-item">
						        <div class="row-picture">
	            					<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
	        					</div>
						        <div class="row-content">
						            <div class="least-content">15m</div>
						            <h4 class="list-group-item-heading">Tile with a label</h4>
						            <p class="noti-text">sadads</p>
						        </div>
						    </li>
					    </a>
					    <div class="list-group-separator"></div>
					    <a href="">
						    <li class="list-group-item">
						        <div class="row-picture">
	            					<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
	        					</div>
						        <div class="row-content">
						            <div class="least-content">10m</div>
						            <h4 class="list-group-item-heading">Tile with a label</h4>
						            <p class="noti-text">Maecenas sed diam eget risus varius blandit.</p>
						        </div>
						    </li>
					    </a>
					    <div class="list-group-separator"></div>
					    <a href="">
						    <li class="list-group-item">
						        <div class="row-picture">
						            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
						        </div>
						        <div class="row-content">
						            <div class="least-content">8m</div>
						            <h4 class="list-group-item-heading">Tile with a label</h4>
						            <p class="noti-text">Maecenas sed diam eget risus varius blandit.</p>
						        </div>
						    </li>
					    </a>
					    <li class="divider"></li>
					    <a href="">
					    <li class="list-group-item">
						    <center><h4>Loading more</h4></center>
						</li>
						</a>
					</ul>
		            </li>
		            <li class="dropdown"><a href = "" class="dropdown-toggle" data-toggle="dropdown"><img id="profile-img" class="img-circle" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" width="30" /></a>
		              <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Edit Profile</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="loginpage.php">Log out</a></li>
			          </ul>
			        </li>
		        </ul>
		    </div>
	    </div>
	</div>
	<div class="container">
		<div class="jumbotron">
			<h2>Add New News</h2>
			<form class="form-horizontal" action = "adminpage.php">
			    <fieldset>
			        <div class="form-group">
			            <label for="inputTitle" class="col-lg-2 control-label">Title</label>
			            <div class="col-lg-10">
			                <input type="text" class="form-control" id="inputEmail" placeholder="title">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="inputFile" class="col-lg-2 control-label">File</label>
			            <div class="col-lg-10">
			                <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
			                <input type="file" id="inputFile" multiple="">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="textArea" class="col-lg-2 control-label">Detail</label>
			            <div class="col-lg-10">
			                <textarea class="form-control" row = "3" id="textArea" style="height:200px;"></textarea>
			                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
			            </div>
			        </div>
			        <div class="form-group">
			            <div class="col-lg-10 col-lg-offset-2">
			                <button class="btn btn-default">Cancel</button>
			                <button type="submit" class="btn btn-primary">Submit</button>
			            </div>
			        </div>
			    </fieldset>
			</form>
		</div>
	</div>

</body>
</html>