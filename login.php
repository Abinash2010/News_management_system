

<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link href="css/custom.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
    <?php
		global $failed;
		if(isset($_GET["msg"]) && $_GET["msg"]=='failed')
		{
			echo '<h3 class="error">'.'You entered wrong password or id'.'<br/></h3>';
		}
		
	?>
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action="Admin/log.php" method="post">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

        </div>
        <div class="forgot">
        
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>

</div></div></div>


</body>
</html>
