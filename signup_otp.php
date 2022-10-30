<!DOCTYPE html>
<html>
	<?php
        session_start();
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CBIT placements</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/img/placement.jpg"/>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switches.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
	<br>
	<br>

    <div class="section">	
		<div class="container"> 
			<div class="row full-height justify-content-center">	
				<div class="col-12 text-center align-self-center py-5">	
						<div class="card-3d-wrap mx-auto">	
							<div class="card-3d-wrapper">	
								<div class="card-front">	
									<div class="center-wrap">	
										<div class="section text-center">	
											<h4 class="mb-4 pb-3">Sign Up</h4>	
											<div class="form-group"> 
                                            <form method="post" name="reg_form">
												<input type="text" name="reg_roll" class="form-style" placeholder="Your complete Roll number" id="reg_roll" autocomplete="none" pattern="[1-9]{2}[2][5][1-5]{1}[A-Fa-f]{1}[0-5]{2}[\D\d][0-9]{1}" title="Enter complete roll number!" required>
												<i class="input-icon fa fa-at"></i>	
                                                </div>	
                                            <div class="form-group mt-2"> 
												<input type="text" name="verify_code" class="form-style" placeholder="Enter Verification code" id="verify_code" autocomplete="none" title="It is case-sensitive!" required>	
												<i class="input-icon fa fa-lock"></i>	
											</div>	
											<button class="btn mt-4" name="verify_submit">Signup</button>
										    </form>	
											<?php
	                                            if(isset($_POST['verify_submit']))
	                                            {
	                                              $r=$_POST['reg_roll'];  
                                                  $v=$_POST['verify_code'];
                                                  $r=strtoupper($r);
                                                  $c=mysqli_connect("localhost:3306","root","") or die("connection failed");
	                                              $db=mysqli_select_db($c,"cbit_placements");
                                                  $q=mysqli_query($c,"SELECT * FROM `signup_otp` where rollno='$r'");
                                                  if(mysqli_num_rows($q)!=0){
                                                    while ($row = mysqli_fetch_assoc($q)){
                                                        $verify=$row['verification_code'];
                                                    }
                                                    if($v==$verify){
                                                        $ins=mysqli_query($c,"update `register` set verified=1 where rollno='$r'");
                                                        if($ins!=NULL)
                                                        {  
                                                            echo "<script type='text/javascript'>
                                                            alert('Registered Successfully, you can Login now!');
                                                            window.location.href='login.php';
                                                            </script>";
                                                        } 
                                                    }
                                                    else{
                                                        echo "<script type='text/javascript'>
                                                        alert('Verification code is wrong! Enter again! Note: It is case-sensitive.');
                                                        </script>";
                                                    }
                                                  }
                                                  else{
                                                    echo "<script type='text/javascript'>
                                                    window.location.href='signup.php';
                                                    </script>";
                                                  }
                                                }
	                                        ?>
                                            <p class="mb-0 mt-2 text-center" style="color:#fff;"> 
												Didn't receive verification code? <a href="reset_pwd.php" class="link">Resend it!</a> 
											</p>
										</div>	
									</div>	
								</div>	
									
							</div>	
						</div>	
					</div>	
				</div>	
			</div> 
		</div>	
	</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>