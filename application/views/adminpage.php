<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<script type="text/javascript" src=<?php echo base_url("assets/dist/js/jquery.canvasjs.min.js")?>></script>
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
		a:hover{
			color: rgba(0, 149, 135, 0.50);
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
		$(document).ready(function() {
		  $('[data-toggle=offcanvas]').click(function() {
		    $('.row-offcanvas').toggleClass('active');
		  });

		  $(function () {
				//Better to construct options first and then pass it as a parameter
				var options = {
					title: {
						text: "Member Active"
					},
			                animationEnabled: true,
					data: [
					{
						type: "column", //change it to line, area, column, pie, etc
						dataPoints: [
							{ x: 10, y: 10 },
							{ x: 20, y: 12 },
							{ x: 30, y: 8 },
							{ x: 40, y: 14 },
							{ x: 50, y: 6 },
							{ x: 60, y: 24 },
							{ x: 70, y: -4 },
							{ x: 80, y: 10 }
						]
					}
					]
				};

				
				$("#chartContainer").CanvasJSChart(options);
				

			});
		});
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
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	           </button>
		        <a class="navbar-brand" href="javascript:void(0)"><span> Home2NDForum</span></a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		        <ul class="nav navbar-nav navbar-right">
		            <li>
		            	<a href="javascript:void(0)"> Welcome, <?= $this->session->userdata('username'); ?></a>
		            </li>
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
			            <li><a href="<?php echo base_url("index.php/admin/logout")?>">Log out</a></li>
			          </ul>
			        </li>
		        </ul>
		    </div>
	    </div>
	</div>

	<div class="container">
		<div class="row row-offcanvas row-offcanvas-left">
		  	<div class="col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">
			  	<div class="jumbotron">
				    <div class="list-group">
					    <div class="list-group-item">
					    	<a class="a" id = "bdashboard">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-action-home" style="vertical-align:middle"></i> Dashboard</h4>
						        </div>
						    </a>
					    </div>
					    <hr/>
					    <div class="list-group-item">
					    	<a  class = "a" id = "bposts">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-av-my-library-add" style="vertical-align:middle" ></i> Posts</h4>
						        </div>
					        </a>
					    </div>
					    <hr/>
					    <div class="list-group-item">
					    	<a  class = "a" id = "bmemebers">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-image-timer-auto" style="vertical-align:middle" ></i>Members</h4>
						        </div>
					        </a>
					    </div>
					    <hr/>
					    <div class="list-group-item">
					    	<a class = "a" id = "breport">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-av-equalizer" style="vertical-align:middle"></i> Report</h4>
						        </div>
					        </a>
					    </div>
					    <hr/>
					    <div class="list-group-item">
					    	<a class = "a" id = "bnews">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-av-my-library-books" style="vertical-align:middle"></i> News</h4>
						        </div>
					        </a>
					    </div>
					    <hr/>
					    <div class="list-group-item">
					    	<a class = "a" id = "bsetting">
						        <div class="row-content">
						            <h4 class="list-group-item-text"><i class = "mdi-action-settings"></i> Setting</h4>
						        </div>
					        </a>
					    </div>
			    	</div>
				</div>
			</div>
	  	<div class="col-md-9 content">
			<div class="jumbotron" id = 'dashboard'>
			    <h2>Dashboard</h2>
			    <div class="container-fluid">
			    <div class="row">
			    <div class="col-md-12">
			    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-primary">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Overview
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					      	<div class="container-fluid">
						      	<div class="row">
						      		<div class="col-md-12">
							      		<div id = "chartContainer"  style="height: 300px; width: 100%;">
							      			
							      		</div>
						      		</div>
						      	</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-primary">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          All Member
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					        <div class="container-fluid">
						      	
					      	</div>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-primary">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Collapsible Group Item #3
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>
					</div>
					</div>
					</div>
			    </div>
			</div>
			<div class="jumbotron hidden" id = "posts">
				<h2>All Posts</h2>
				<div class="form-group">
					<div class="col-md-12 ">
						<div class="form-group">
							<label for="inputTitle" class="col-md-1 control-label">Search </label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="inputEmail" placeholder="posts id, post name">
						</div>
						<div class="col-md-2">
							<input type="submit" value="Search" class="btn btn-primary">
						</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive" id = "member-table">
								<table class="table table-striped table-hover">
									<thead>
									<tr>
										<th>#</th>
										<th>Member ID</th>
										<th>E-mail</th>
										<th>Register Date</th>
										<th>View</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Admin@hotmail.com</td>
											<td>03-May-15</td>
											<td><a href="member.php">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>2</td>
											<td>Admin22@hotmail.com</td>
											<td>02-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>3</td>
											<td>Admin@hotmail.com</td>
											<td>02-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>4</td>
											<td>Admin151@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>5</td>
											<td>5</td>
											<td>Admin212@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>6</td>
											<td>6</td>
											<td>Admin2@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>7</td>
											<td>7</td>
											<td>Admin551@hotmail.com</td>
											<td>30-April-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ul class="pagination pagination-sm">
									<li class="disabled"><a href="javascript:void(0)">«</a></li>
									<li class="active primary"><a href="javascript:void(0)">1</a></li>
									<li><a href="javascript:void(0)">2</a></li>
									<li><a href="javascript:void(0)">3</a></li>
									<li><a href="javascript:void(0)">4</a></li>
									<li><a href="javascript:void(0)">5</a></li>
									<li><a href="javascript:void(0)">»</a></li>		    
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron hidden" id = "members">
				<h2>All Member</h2>
				<div class="form-group">
					<div class="col-md-12 ">
						<div class="form-group">
							<label for="inputTitle" class="col-md-1 control-label">Search </label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="inputEmail" placeholder="member id, email">
						</div>
						<div class="col-md-2">
							<input type="submit" value="Search" class="btn btn-primary">
						</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive" id = "member-table">
								<table class="table table-striped table-hover">
									<thead>
									<tr>
										<th>#</th>
										<th>Member ID</th>
										<th>E-mail</th>
										<th>Register Date</th>
										<th>View</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>Admin@hotmail.com</td>
											<td>03-May-15</td>
											<td><a href="member.php">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>2</td>
											<td>Admin22@hotmail.com</td>
											<td>02-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>3</td>
											<td>Admin@hotmail.com</td>
											<td>02-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>4</td>
											<td>Admin151@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>5</td>
											<td>5</td>
											<td>Admin212@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>6</td>
											<td>6</td>
											<td>Admin2@hotmail.com</td>
											<td>01-May-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
										<tr>
											<td>7</td>
											<td>7</td>
											<td>Admin551@hotmail.com</td>
											<td>30-April-15</td>
											<td><a href="">View<div class="ripple-wrapper"></div></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ul class="pagination pagination-sm">
									<li class="disabled"><a href="javascript:void(0)">«</a></li>
									<li class="active primary"><a href="javascript:void(0)">1</a></li>
									<li><a href="javascript:void(0)">2</a></li>
									<li><a href="javascript:void(0)">3</a></li>
									<li><a href="javascript:void(0)">4</a></li>
									<li><a href="javascript:void(0)">5</a></li>
									<li><a href="javascript:void(0)">»</a></li>		    
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron hidden" id = "report">
				<h2>Reports</h2>
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="#">แจ้งกระทู้ไม่เหมาะสม</a></li>
				  <li role="presentation"><a href="#">Profile</a></li>
				  <li role="presentation"><a href="#">Messages</a></li>
				</ul>
				<div class="jumbotron reportlist">
					<div class="list-group">
					    <div class="list-group-item">
					    <a href="">
					    	<div class="row-picture">
					            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
					        </div>
					        <div class="row-content">
					            <h4 class="list-group-item-heading">แจ้งกระทู้ไม่เหมาะสม</h4>
					            <p class="list-group-item-text">กระทู้นี้มีข้อความที่ไม่เหมาะสม</p>
					        </div>
					    </a>					        
					    </div>
					    <div class="list-group-separator"></div>
					    <div class="list-group-item">
					    <a href="">
					    	<div class="row-picture">
					            <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
					        </div>
					        <div class="row-content">
					            <h4 class="list-group-item-heading">แจ้งกระทู้ไม่เหมาะสม</h4>
					            <p class="list-group-item-text">กระทู้นี้มีข้อความที่ไม่เหมาะสม</p>
					        </div>
					    </a>
					    </div>
					    <div class="list-group-separator"></div>
					    <div class="list-group-item">
					    <a href="">
					        <div class="row-picture">
					            <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
					        </div>
					        <div class="row-content">
					            <h4 class="list-group-item-heading">แจ้งกระทู้ไม่เหมาะสม</h4>
					            <p class="list-group-item-text">กระทู้นี้มีข้อความที่ไม่เหมาะสม</p>
					        </div>
					    </a>
					    </div>
					    <div class="list-group-separator"></div>
					</div>
				</div>
			</div>			
			<div class="jumbotron hidden" id = "news">
				<div class="container-fluid">
					<h2>News</h2>
					<div class="table-responsive">
						<table class="table table-striped table-hover ">
						    <thead>
						        <tr>
						            <th>#</th>
						            <th>Headline</th>
						            <th>Writer</th>
						            <th>Date</th>
						            <th>View</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>15 ข้ออย่าทำ เพราะจะทำให้ขาย “บ้าน”  ไม่ออก</td>
						            <td>Admin</td>
						            <td>03-May-15</td>
						            <td><a href="news.php">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>อยากขายบ้านให้ได้ราคาดีมีวิธีอย่างไร?</td>
						            <td>Admin22</td>
						            <td>02-May-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>โอทีหายกระทบบ้านระดับล่าง บรรยากาศไม่เอื้อ-กู้ไม่ผ่านพุ่ง คาดปีนี้ทั่วประเทศหดตัว 10%</td>
						            <td>Admin</td>
						            <td>02-May-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>4</td>
						            <td>วิธีถ่ายรูปเพื่อประกาศขายบ้าน</td>
						            <td>Admin</td>
						            <td>01-May-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>5</td>
						            <td>ปิดตำนาน “บ้านเอื้ออาทร” การเคหะฯ เทขาย 2.8 แสนยูนิต</td>
						            <td>Admin22</td>
						            <td>01-May-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>6</td>
						            <td>คนนราฯ ประกาศขายบ้าน หวั่นโดนลูกหลงโจรใต้</td>
						            <td>Admin22</td>
						            <td>01-May-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						        <tr>
						            <td>7</td>
						            <td>ผวา! ชาวจีนสยอง ถูกหลอกขายบ้านผีสิง</td>
						            <td>Admin5515321</td>
						            <td>30-April-15</td>
						            <td><a href="">View<div class="ripple-wrapper"></div></a></td>
						        </tr>
						    </tbody>
						</table>
					</div>
					<ul class="pagination pagination-sm">
						<li class="disabled"><a href="javascript:void(0)">«</a></li>
						<li class="active primary"><a href="javascript:void(0)">1</a></li>
						<li><a href="javascript:void(0)">2</a></li>
						<li><a href="javascript:void(0)">3</a></li>
						<li><a href="javascript:void(0)">4</a></li>
						<li><a href="javascript:void(0)">5</a></li>
						<li><a href="javascript:void(0)">»</a></li>
					</ul>
					<a href="addnews.php" class="btn btn-danger btn-fab btn-raised  mdi-content-add"></a>
				</div>
			</div>
			<div class='jumbotron' id = "content"></div>
		</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('#bdashboard').addClass('active');
		$('#dashboard').removeClass('hidden');
		$('.a').click(function() {
			var id = $(this).attr('id');
			//$('.content .jumbotron:not(.reportlist)').addClass('hidden');
			if(id==("bdashboard")){
				$('#dashboard').removeClass('hidden');
			}else if(id==("bposts")){
				$('#posts').removeClass('hidden');
			}else if(id==("breport")){
				$('#report').removeClass('hidden');
			}else if(id==("bnews")){
				$('#news').removeClass('hidden');
			}else if(id==("bsetting")){
				$('#setting').removeClass('hidden');
			}else if(id==("bmemebers")){
				$('#members').removeClass('hidden');
					$.ajax({
			             type: "POST",
			             url: "<?php echo base_url(); ?>"+"index.php/member/member/page",
			             cache: false,
			             dataType:"json",
			             data: "",
			             success: function(res){
			              if (res!=null)
			                  {
			                  // Show Entered Value
			                    $("#content").html(res);
			                  }else{
			                    $("#content").html("test"); 
			                  }
			                
			              /*try{        
			                  var obj = jQuery.parseJSON(res);
			                  if (obj)
			                  {
			                  // Show Entered Value
			                    $("#cart").html(obj.userid);
			                  }else{
			                    $("#cart").html("msg.userid"); 
			                  }


			              }catch(e) {     
			                  alert('Exception while request..');
			              }
			              finally{
			                  alert('Exception while request..');
			              }    */
			            }

			      	});
			}else{

			}
			$('.a').removeClass('active');
		    $(this).toggleClass('active');
		});
	});
</script>
</html>