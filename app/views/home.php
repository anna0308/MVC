<html >
	<head>
	  <meta charset="UTF-8">
	  <title>Welcome to The Petra</title>
	  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<h1><?php if(isset($this->status)){echo $this->status;}?></h1>
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
				<div class="login-form">
				<form method="post" action="" >
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="user" >
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" name="pass">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In" name="sign_in">
						</div>
						<div class="hr"></div>
					</div>
					<div class="sign-up-htm">
							<div class="group">
								<label for="user" class="label">Username</label>
								<input id="user" type="text" class="input" name='username'>
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass" type="password" class="input" name='password'>
							</div>
							<div class="group">
								<label for="pass" class="label">Repeat Password</label>
								<input id="pass" type="password" class="input" name='repeat_password'>
							</div>
							<div class="group">
								<label for="pass" class="label">Email Address</label>
								<input id="pass" type="text" class="input" name='email'>
							</div>
							<div class="group">
								<input type="submit" class="button" value="Sign Up" name='sign_up'>
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<label for="tab-1">Already Member?</a>
							</div>
						</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>

