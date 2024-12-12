<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Signup</title>

  <!-- Tautkan CSS -->
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Tab Computer</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('register.store') }}" method="POST">
					@csrf
					<input class="text" type="text" id="name" name="name" placeholder="Username" required="">
					<input class="text email" type="email" id="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" id="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="/resources/views/login.blade.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<!--
	</div>
	<!-- //main -->
</body>
</html>