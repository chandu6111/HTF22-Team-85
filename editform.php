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
					
						<div class="card-3d-wrap mx-auto" style="height:400px;">	
							<div class="card-3d-wrapper">	
								<div class="card-front">	
									<div class="center-wrap">	
										<div class="section text-center">	
											<h4 class="mb-4 pb-3">Edit opportunity</h4>	
											<div class="form-group"> 

                                            <form method="post" name="reg_form" enctype="multipart/form-data">
													
                                            <div class="form-group mt-2"> 
												<input type="text" name="company_id" class="form-style" placeholder="companyName_batch_role" id="company_id" autocomplete="none" required>	
                                                <i class="input-icon fa fa-id-badge"></i>
											</div>
                                           
                                            <div class="form-group mt-3"> 
                                                <label class='text-light' style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px; float:left !important;">Upload attachment:</label>
                                                <input type="file" name="attach" id="attach" class='bg-light text-dark' style="
                                                width: 100%;
                                                font-weight: 500;
                                                border-radius: 4px;" required>
                                            </div>
											<button class="btn mt-4" name="reg_submit">Submit</button>
                                            </form>
                                           <?php
                                            if(isset($_POST['reg_submit'])){
                                                $opid=$_POST['company_id'];
                                                if (($_FILES['attach']['name']!="")){
                                                    $target_dir = "./shortlisted/";
                                                    $file = $_FILES['attach']['name'];
                                                    $path = pathinfo($file);
                                                    $filename = $path['filename'];
                                                    $ext = $path['extension'];
                                                    $temp_name = $_FILES['attach']['tmp_name'];
                                                    $path_filename_ext = $target_dir.$opid.".".$ext;
                                                    // Check if file already exists
                                                    if (file_exists($path_filename_ext)) {
                                                        unlink($path_filename_ext);
                                                    }
                                                    if(move_uploaded_file($temp_name,$path_filename_ext)){
                                                        require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
                                                            // use Twilio\Rest\Client;
                                                            // Your Account SID and Auth Token from twilio.com/console
                                                            $account_sid = 'xxxx';
                                                            $auth_token = 'xxxx';
                                                            // In production, these should be environment variables. E.g.:
                                                            // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
                                                            // A Twilio number you own with SMS capabilities
                                                            $twilio_number = "xxxx";
                                                            $pq=mysqli_query($con, "select * from `register`");
                                                            if(mysqli_num_rows($pq)!=0){
                                                                while($x=mysqli_fetch_assoc($pq)){
                                                                $m=$x["phone"];
                                                                $phoneNum="+91".$m;
                                                                $client = new Twilio\Rest\Client($account_sid, $auth_token);
                                                            $client->messages->create(
                                                                // Where to send a text message (your cell phone?)
                                                                $phoneNum,
                                                                array(
                                                                    'from' => $twilio_number,
                                                                    'body' => "Shortlisted students are announced for job with id: $opid. Please check the website for further instructions.",
                                                                )
                                                            );
                                                        }}
                                                        echo "<script type='text/javascript'>
                                                                    alert('Opportunity succesfully edited!');
                                                                    window.location.href='admin_home.php';
                                                                    </script>";
                                                    }
                                            }
                                        }
                                           ?>
                                           
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






