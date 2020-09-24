<?php 
	
	error_reporting(0);

	session_start();
	
	include("connection.php");
	
	$userid_st = 0;
	$password_st = 0;
	
	if(isset($_POST['logged'])==1){
		$password = mysqli_real_escape_string($dbc, $_POST['password']);
		
		$q1 = "SELECT * FROM users WHERE id='$_POST[userid]'";
		$q2 = "SELECT * FROM users WHERE id='$_POST[userid]' AND pwd=SHA1('$password')";
				
		if(mysqli_num_rows(mysqli_query($dbc, $q1))==1){
			$userid_st = 1;
			if(mysqli_num_rows(mysqli_query($dbc, $q2))==1){
				$password_st = 1;
				$_SESSION['username'] = $_POST['userid'];
				header("Location: ide.php");
			}
			else{
				$password_st = -1;
			}
		}
		else{
			$userid_st = -1;
			$password_st = -1;
		}
	}
	 
?>



<html>
<head>
    <title>SIGNUP</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	 <title>ide2</title>
	 
	 <link rel="shortcut icon" type="image/x-icon" href="assets/img/ide2.png">
    
	<!-- css plugin ----------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/aos.css">
    
	<!-- main css ------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-responsives.css">
	<!-- google fonts ---------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
       body{
        
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        } 
        h2{
        padding-top: 1.5rem;
        }
        a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
  
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}
.form-control:focus {
    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;
}
.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {
    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Register<h2>
                        <div class="card-body">
                          
						<form action="" method="post">
	        		<div class="form-group<?php if($userid_st==1){echo " has-success has-feedback";}elseif($userid_st==-1){echo " has-error has-feedback";} ?>">
	          			<input type="text" id="userid" name="userid" class="form-control" placeholder="UserID" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" required>
					    <?php if($userid_st==1){ ?>
					    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					    <?php }elseif($userid_st==-1){ ?>
					    	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					    <?php } ?>
	        		</div>
	        		<br />
	        		<div class="form-group<?php if($password_st==1){echo " has-success has-feedback";}elseif($password_st==-1){echo " has-error has-feedback";} ?>">
	          			<input type="password" id="password" name="password" class="form-control" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Password" required>
					    <?php if($password_st==1){ ?>
					    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					    <?php }elseif($password_st==-1){ ?>
					    	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					    <?php } ?>
	        		</div>
	        		<br />
	        		<div class="form-group">
	        			<input type="submit" class="btn btn-primary" name="logged" value="Sign In"></input>
					<a href="signup.php" type="submit" class="btn btn-primary">Sign Up</a>
	        		</div>
	      		</form>




                     </div>
                </div>
            </div>
        </div>
    </div>
</body>






