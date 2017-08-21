
<!DOCTYPE html>
<html lang="en">

<head>
<style>
		.error {
			color:red;
			text-align: center;
			font-weight: 260;
			font-size: 30px;
			position:fixed;bottom:0;left:0;right:0;height:420px;
		}
	</style>
	<meta charset="utf-8">
	<title>Login Page</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo ROOT_URL;?>/assets/admin/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo ROOT_URL;?>/assets/admin/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<?php if(isset($_SESSION['status']['error'])) {?>
	<div class="error">
		<?php echo $_SESSION['status']['error'];?>
		<?php unset($_SESSION['status']);?>
	</div>
<?php } ?>

<?php if(isset($data['error']) && $data['error']) {?>
	<div class="error">
		<?php foreach($data['error'] as $e) {?>
				- <?php echo $e?> <br>
		<?php } ?>
	</div>
<?php } ?>

	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">ADMIN <span>PANEL</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form name="frmlogin" method="post" action="">

			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username" placeholder="Username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password" placeholder="Valid Password">
			<br/>
			<button type="submit" value="login">Log In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
			</form>
		</div>
	</div>
</body>

 <script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>  

</html>