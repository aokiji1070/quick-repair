
<!DOCTYPE html>
<html>
    
<head>
	<title>My repair interface</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
  
</head>


<body>
<div class="main_bloc_login">
	<div class="container h-100">
		<div class="d-flex justify-content-center  h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container ">
						<img src="/img/logo_rond.png" class="brand_logo_login" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="verify.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Identifiant">



						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="mot de passe">



						</div>
						
						
						<div class="d-flex justify-content-center mt-3 ">
				 	        <input class="" type="submit" value="se connecter">
				        </div>
					</form>
				</div>
		
				<div class="mt-4">				
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>