<?php

require('top.php');

$msg='';
$msg1='';
if (isset($_POST['signin'])){
    $name=get_safe_value($con, $_POST['name']);
    $password=get_safe_value($con, $_POST['password']);
    $sql="select * from users where name= '$name' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if ($count>0){
		$row=mysqli_fetch_assoc($res);
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_ID']=$row['id'];
	    $_SESSION['USER_NAME']=$row['name'];
        header('location:index.php');
        die();
    }
    else{
        $msg="Please enter correct login details";
    }
}

if(isset($_POST['register'])){
    $name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$password=get_safe_value($con,$_POST['password']);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if($check_user>0){
	$msg1="Email already exists";
}else{
	
	mysqli_query($con,"insert into users(name,email,mobile,password) values('$name','$email','$mobile','$password')");
	echo "insert";
}
}


?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang="en">

	<title>login/registration</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>
		<script src="jquery/jquery.min.js"></script>
		<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!---- boostrap.min link local ----->
		
		<link rel="stylesheet" href="css/style.css">
		<!---- boostrap.min link local ----->

		<script src="js/bootstrap.min.js"></script>
		<!---- Boostrap js link local ----->
		
		<link rel="icon" href="images/icon.png" type="image/x-icon" />
		<!---- Icon link local ----->
		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->
	</head>
	<body>
	<div class="container-fluid mt-0 py-0">
		<div class="container py-0">
			<h2 class="text-center" style="color: rgb(248, 26, 92);" id="title">Login/Register</h2>
			
 			<hr>
			<div class="row">
				<div class="col-md-5">
 					<form  method="post">
						<fieldset>							
							<p class="text-uppercase pull-center"> SIGN UP.</p>	
 							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-lg" placeholder="username">
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
							</div>
								<div class="form-group">
								<input type="mobile" name="mobile" id="mobile" class="form-control input-lg" placeholder="Mobile">
							</div>
							
 							<div>
                             <button class="mt-3 btn1" type="submit" name="register">Register</button>
 							</div>
						</fieldset>
					</form>
                    <div class=" text-danger py-1 mt-2"><?php echo $msg1?></div> 
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form method="post">
						<fieldset>							
							<p class="text-uppercase"> Login using your account: </p>	
 								
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-lg" placeholder="username">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
							</div>
							<div>
                            <button class=" mt-3 btn1" type="submit" name="signin">Sign in</button>
							</div>
                            
 						</fieldset>
				</form>	
                <div class=" text-danger py-1 mt-2"><?php echo $msg?></div> 
				</div>
                
			</div>
            
		</div>
		
	</div>
	</body>
	 

</html>
<?php
    require('footer.php');
    ?>