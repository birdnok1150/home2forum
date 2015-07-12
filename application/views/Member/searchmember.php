<html>
	<head>
		<title>Test Json</title>
	</head>
	<body>
		<h1>Member</h1>
		<h3>Test get Member</h3>
		<form action = "<?php echo base_url('index.php/member/member/getmember') ?>" method="post">
			Member ID : <input type = "text" name="member_id"/>
			<input type = "submit" value="Search"/>
		</form>
		<hr/>
		<h3>Test Login</h3>
		<form action = "<?php echo base_url('index.php/member/member/login') ?>" method="post">
			Email : <input type = "text" name="email"/><br/>
			Password : <input type = "password" name="password"/><br/>
			<input type = "submit" value="Login"/>
		</form>
		<hr/>
		<h3>Test Register</h3>
		<form action = "<?php echo base_url('index.php/member/member/register') ?>" method="post">
			Email : <input type = "text" name="email"/><br/>
			Password : <input type = "password" name="password"/><br/>
			<input type = "submit" value="Register"/>
		</form>
		<hr/>
		<h3>Test Approved</h3>
		<form action = "<?php echo base_url('index.php/member/member/approved') ?>" method="post">
			<input type = "text" name="member_id"/><br/>
			<input type = "file" name="pic_card"/><br/>
			<input type = "file" name="pic_with_card"/><br/>
			<input type = "submit" value="Approved"/>
		</form>
	</body>
</html>
