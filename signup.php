<!DOCTYPE html>
<html>
<?php
    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Placement Tracking System</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
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
					
						<div class="card-3d-wrap mx-auto" style="height:760px;">	
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
												<input type="text" name="reg_name" class="form-style" placeholder="Your Full name" id="reg_name" autocomplete="none" required>	
												<i class="input-icon fa fa-dot-circle-o"></i>	
											</div>
											<div class="form-group mt-2"> 
												<input type="text" name="reg_year" class="form-style" placeholder="Your Academic passout year" id="reg_year" autocomplete="none" required>	
												<i class="input-icon fa fa-dot-circle-o"></i>	
											</div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="reg_phone" class="form-style" placeholder="Your Phone number" id="reg_phone" autocomplete="none" required>	
												<i class="input-icon fa fa-phone-alt"></i>	
											</div>
                                            <div class="form-group mt-2"> 
												<input type="email" name="reg_email" class="form-style" placeholder="Your Email ID" id="reg_email" autocomplete="none" required>	
												<i class="input-icon fa fa-at"></i>	
											</div>
                                            <div class="form-group mt-2"> 
												<select name="reg_branch" class="form-style" id="reg_branch" autocomplete="none" required>
                                                <option selected disabled hidden>Select your branch</option>	
                                                <option value="cse">CSE</option>
		                                        <option value="ece">ECE</option>
		                                        <option value="eee">EEE</option>
		                                        <option value="etm">ETM</option>
		                                        <option value="it">IT</option>
                                            </select>
												<i class="input-icon fa fa-chevron-right"></i>	
											</div>
                                            <div class="form-group mt-2"> 
												<select name="reg_sec" class="form-style" id="reg_sec" autocomplete="none" required>
                                                <option selected disabled hidden>Select your Section</option>	
                                                <option value="a">A</option>
		                                        <option value="b">B</option>
		                                        <option value="c">C</option>
                                            </select>
												<i class="input-icon fa fa-chevron-right"></i>	
											</div>
                                            <div class="form-group mt-2" id="show_hide_password" > 
												<input type="password" name="reg_pass" class="form-style" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters, can have special characters" placeholder="Your Password" id="reg_pass" autocomplete="none" required>	
                                                <i class="input-icon fa fa-lock"></i>
                                                <!--i class="input-icon fa fa-eye-slash" aria-hidden="true"></i-->
											</div>	
											<button class="btn mt-4" name="reg_submit">Register</button>
                                            </form>
                                            <?php
                                                function validate_mobile($mobile)
                                                {
                                                    return preg_match('/^[0-9]{10}+$/', $mobile);
                                                }
                                                function generateRandomString($length) {
                                                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%^&*';
                                                    $charactersLength = strlen($characters);
                                                    $randomString = '';
                                                    for ($i = 0; $i < $length; $i++) {
                                                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                                                    }
                                                    return $randomString;
                                                }
	                                            if(isset($_POST['reg_submit']))
	                                            {
	                                              $r=$_POST['reg_roll'];
                                                  $n=$_POST['reg_name'];
	                                              $y=$_POST['reg_year'];
	                                              $m=$_POST['reg_phone'];
	                                              $e=$_POST['reg_email'];
	                                              $b=$_POST['reg_branch'];
	                                              $s=$_POST['reg_sec'];
	                                              $p=$_POST['reg_pass'];  
                                                  $r=strtoupper($r);
                                                  if(!validate_mobile($m))
														echo "<script type='text/javascript'>
														alert('Phone number is not valid, it should contain only \'10 digits\' it should not have any other characters except numbers! Please enter valid phone number.');
                                                        window.location.href='signup.php';
														</script>";
                                                  if($y<date("Y"))
                                                        echo "<script type='text/javascript'>
                                                        alert('Sorry, you are not allowed to enter!');
                                                        </script>;
                                                        window.location.href='index.php'";
                                                  else{
                                                    $c=mysqli_connect("localhost:3306","root","") or die("connection failed");
	                                              $db=mysqli_select_db($c,"cbit_placements");
                                                  $q=mysqli_query($c,"SELECT * FROM `register` where rollno='$r' and verified=1");
                                                  if(mysqli_num_rows($q)!=0){
                                                    echo "<script type='text/javascript'>
                                                    alert('Account with rollno $r already exists, please login now!');
                                                    window.location.href='login.php';
                                                    </script>";
                                                  }
                                                  require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
                                                    // use Twilio\Rest\Client;
                                                    // Your Account SID and Auth Token from twilio.com/console
                                                    $account_sid = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                                                    $auth_token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                                                    // In production, these should be environment variables. E.g.:
                                                    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
                                                    $randstring=generateRandomString(6);
                                                    // A Twilio number you own with SMS capabilities
                                                    $twilio_number = "+12058962706";
                                                    $phoneNum="+91".$m;
                                                    $client = new Twilio\Rest\Client($account_sid, $auth_token);
                                                    $client->messages->create(
                                                        // Where to send a text message (your cell phone?)
                                                        $phoneNum,
                                                        array(
                                                            'from' => $twilio_number,
                                                            'body' => "OTP for CBIT signup.Here is the verification code: $randstring",
                                                        )
                                                    );
                                                    $ins=mysqli_query($c,"insert into `register`(rollno, fullname, out_year, phone, email, branch, section, pass) values('$r','$n','$y','$m','$e','$b','$s',MD5('$p'))");
                                                    $q1=mysqli_query($c,"SELECT * FROM `signup_otp` where rollno='$r'");
                                                    if(mysqli_num_rows($q1)!=0){
                                                        $up=mysqli_query($c,"update `signup_otp` set verification_code='$randstring' where rollno='$r'");
                                                    }
                                                    else{
                                                        $inss=mysqli_query($c,"insert into `signup_otp` values('$r','$randstring')");
                                                    }
                                                    if($inss!=NULL || $up!=0)
                                                        echo "<script type='text/javascript'>
                                                        alert('Notification sent succesfully to your mobile $phoneNum');
                                                        window.location.href='signup_otp.php';
                                                        </script>";
                                                    else
                                                        echo "<script type='text/javascript'>
                                                        alert('Notification failed!');
                                                        window.location.href='signup.php';
                                                        </script>";
                                                  }
	                                              
                                                  }
	                                              
	  
                                            ?>
											<p class="mb-0 mt-4 text-center" style="color:#fff;"> 
												Already have an account? <a href="login.php" class="link">Login here</a> 
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






