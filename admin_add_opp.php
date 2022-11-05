<!DOCTYPE html>
<html>
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
				<li class="nav-item"><a class="nav-link" href="admin_home.php">Opportunities</a></li>
                <li class="nav-item"><a class="nav-link" href="admin_add_opp.php">Add Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
				<li class="nav-item"><a class="nav-link" href="admin_home.php">Opportunities</a></li>
                <li class="nav-item"><a class="nav-link" style='color:#fed136;' href="admin_add_opp.php">Add Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
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
						<div class="card-3d-wrap mx-auto" style="height:1500px;">	
							<div class="card-3d-wrapper">	
								<div class="card-front">	
									<div class="center-wrap">	
										<div class="section text-center">	
											<h4 class="mb-4 pb-3">Add new placements</h4>	
											<div class="form-group"> 
                                            <form method="post" name="event_form" enctype="multipart/form-data">
                                            <div class="form-group mt-3"> 
                                                <label class='text-light' style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px; float:left !important;">Upload Company logo:</label>
                                                <input type="file" name="comp_logo" id="comp_logo" class='bg-light text-dark' style="
                                                width: 100%;
                                                font-weight: 500;
                                                border-radius: 4px;" required>
                                            </div>
                                            <div class="form-group mt-2"> 
                                                <input type="text" name="company_name" class="form-style" placeholder="Company Name" id="company_name" autocomplete="none" required>	
                                                <i class="input-icon fa fa-building"></i>	
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="about" name="about" rows="4" cols="40" placeholder="About the company" class="form-style" required></textarea>	
                                                <i class="input-icon fa fa-file"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <input type="text" name="size" class="form-style" placeholder="Company Size" id="size" autocomplete="none" required>	
                                                <i class="input-icon fa fa-users"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <input type="text" name="company_url" class="form-style" placeholder="Company URL" id="company_url" autocomplete="none" required>	
                                                <i class="input-icon fa fa-globe"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <input type="text" name="op_id" class="form-style" placeholder="companyName_batch_role" id="op_id" autocomplete="none" required>	
                                                <i class="input-icon fa fa-id-badge"></i>
                                            </div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="role" class="form-style" placeholder="Role" id="role" autocomplete="none" required>	
                                                <i class="input-icon fa fa-user-tag"></i>
											</div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="job_type" class="form-style" placeholder="Job Type" id="job_type" autocomplete="none" required>	
                                                <i class="input-icon fa fa-suitcase"></i>
											</div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="ctc" class="form-style" placeholder="CTC" id="ctc" autocomplete="none" required>	
                                                <i class="input-icon fa fa-rupee-sign"></i>
											</div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="location" class="form-style" placeholder="Location" id="location" autocomplete="none" required>	
                                                <i class="input-icon fa fa-map-marker-alt"></i>
											</div>
                                            <div class="form-group mt-2"> 
												<input type="text" name="industry" class="form-style" placeholder="Industry" id="industry" autocomplete="none" required>	
                                                <i class="input-icon fa fa-industry"></i>
											</div>
                                            <div class="form-group mt-3"> 
                                            <label class="text-light" style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px; float:left !important;">Registration start Date:</label>
                                            <input type="datetime-local" name="reg_start" class="form-style" id="reg_start" autocomplete="none" required>
											</div>
                                            <div class="form-group mt-2"> 
                                            <label class="text-light" style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px; float:left !important;">Registration end Date:</label>
                                            <input type="datetime-local" name="reg_end" class="form-style" id="reg_end" autocomplete="none" required>
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="reg_link" name="reg_link" rows="4" cols="40" placeholder="Registration Link" class="form-style" required></textarea>	
                                                <i class="input-icon fa fa-external-link-alt"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="eligible_courses" name="eligible_courses" rows="4" cols="40" placeholder="Eligible courses" class="form-style" required></textarea>	
                                                <i class="input-icon fa fa-user-check"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="eligibility_criteria" name="eligibility_criteria" rows="4" cols="40" placeholder="Eligibility criteria" class="form-style" required></textarea>	
                                                <i class="input-icon fa fa-users"></i>
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="process" name="process" rows="4" cols="40" placeholder="Selection process" class="form-style" required></textarea>
                                                <i class="input-icon fa fa-stream"></i>	
											</div>
                                            <div class="form-group mt-2"> 
                                                <textarea id="schedule" name="schedule" rows="4" cols="40" placeholder="Schedule" class="form-style" required></textarea>	
                                                <i class="input-icon fa fa-calendar-check"></i>
											</div>
                                            <div class="form-group mt-3"> 
                                                <label class='text-light' style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px; float:left !important;">Upload attachments:</label>
                                                <input type="file" name="attach[]" id="attach" class='bg-light text-dark' style="
                                                width: 100%;
                                                font-weight: 500;
                                                border-radius: 4px;" required multiple>
                                            </div>
											<button class="btn mt-4" name="add_submit">Add</button>
                                            </form>
                                            <?php
	                                            if(isset($_POST['add_submit']))
	                                            {
                                                    $con=mysqli_connect("localhost","root","");
                                                    mysqli_select_db($con,"cbit_placements");
                                                    $cname=$_POST['company_name'];
                                                    $about=$_POST['about'];
                                                    $size=$_POST['size'];
                                                    $curl=$_POST['company_url'];
                                                    $opid=$_POST['op_id'];
                                                    $role=$_POST['role'];
                                                    $jtype=$_POST['job_type'];
                                                    $ctc=$_POST['ctc'];
                                                    $loc=$_POST['location'];
                                                    $ind=$_POST['industry'];
                                                    $regs=$_POST['reg_start'];
                                                    $rege=$_POST['reg_end'];
                                                    $regl=$_POST['reg_link'];
                                                    $elig_courses=$_POST['eligible_courses'];
                                                    $elig_criteria=$_POST['eligibility_criteria'];
                                                    $process=$_POST['process'];
                                                    $sch=$_POST['schedule'];
                                                    $ins=mysqli_query($con, "insert into `opportunities` values('$opid','$cname','$role','$size','$jtype','$ctc','$loc','$ind','$about','$curl','$regs','$rege','$regl','$elig_courses','$elig_criteria','$process','$sch')");
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
                                                                    'body' => "New Opportunity For You!<br>
                                                                     $cname is hiring for $role. Job type: $jtype. Please check the website for further details and registration instructions. Thank you!",
                                                                )
                                                            );
                                                        }}

                                                    if (($_FILES['comp_logo']['name']!="")){
                                                        $target_dir = "./logos/";
                                                        $file = $_FILES['comp_logo']['name'];
                                                        $path = pathinfo($file);
                                                        $filename = $path['filename'];
                                                        $ext = $path['extension'];
                                                        $temp_name = $_FILES['comp_logo']['tmp_name'];
                                                        $path_filename_ext = $target_dir.$opid.".".$ext;
                                                        // Check if file already exists
                                                        if (file_exists($path_filename_ext)) {
                                                            unlink($path_filename_ext);
                                                        }
                                                        if(!empty($_FILES["comp_logo"]["name"])) { 
                                                            // Get file info 
                                                            $fileName = basename($_FILES["comp_logo"]["name"]); 
                                                            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                                                             
                                                            // Allow certain file formats 
                                                            $allowTypes = array('jpg'); 
                                                            if(in_array($fileType, $allowTypes)){ 
                                                                $image = $_FILES['comp_logo']['tmp_name']; 
                                                                $imgContent = addslashes(file_get_contents($image)); 
                                                                move_uploaded_file($temp_name,$path_filename_ext);
                                                            }else{ 
                                                                echo "<script type='text/javascript'>
                                                                alert('Sorry, only JPG files are allowed to upload.');
                                                                </script>";
                                                            } 
                                                        }else{ 
                                                            echo "<script type='text/javascript'>
                                                            alert('Please select an image file to upload.'; 
                                                            </script>";
                                                        } 
                                                    }  
                                                    
                                                    //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

                                                    // Count # of uploaded files in array
                                                    $total = count($_FILES['attach']['name']);

                                                    // Loop through each file
                                                    for( $i=0 ; $i < $total ; $i++ ) {

                                                    //Get the temp file path
                                                    $tmpFilePath = $_FILES['attach']['tmp_name'][$i];

                                                    //Make sure we have a file path
                                                    if ($tmpFilePath != ""){
                                                        //Setup our new file path
                                                        $newFilePath = "./attachments/" . $opid.".".$i.".pdf";

                                                        //Upload the file into the temp dir
                                                        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                                                            echo "<script type='text/javascript'>
                                                                    alert('Opportunity succesfully added!');
                                                                    window.location.href='admin_home.php';
                                                                    </script>";
                                                        }
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