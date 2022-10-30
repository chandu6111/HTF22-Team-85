<!DOCTYPE html>
<?php
    session_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CBIT placements</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/img/placement.jpg"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switches.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-142-hover_effect_style_142.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-142.css">
    <link rel="stylesheet" href="assets/css/FlipCard-F19687.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Ludens---5-Multiple-Cards-inside-Show-v2.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
				<li class="nav-item"><a class="nav-link" href="student_home.php">Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
				<li class="nav-item"><a class="nav-link" style='color:#fed136;' href="student_home.php">Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="clean-block about-us">
        <?php
            $con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"cbit_placements");
            $query1=mysqli_query($con, "select * from `opportunities` where CURRENT_TIMESTAMP between reg_start and reg_end");
            $query2=mysqli_query($con, "select * from `opportunities` where CURRENT_TIMESTAMP>reg_end");
            if(mysqli_num_rows($query1)!=0){
                echo "<div class='container' style='text-align: center;'>
                <h1 style='background: var(--bs-yellow);color: var(--bs-black);padding: 12px;font-size: 26px;font-family: Acme, sans-serif;'>Active Opportunities</h1>
                </div>
                <div class='row justify-content-center' style='margin-top: 10px;margin-right: 0px;margin-left: 0px;'>
                ";
                while($x=mysqli_fetch_assoc($query1)){
                    $opid=$x['op_id'];
                    $role=$x["role"];
                    $comp=$x["company_name"];
                    $jtype=$x["job_type"];
                    $ctc=$x["ctc"];
                    $loc=$x["location"];
                    $ind=$x["industry"];
                    $reg_end=$x["reg_end"];
                    $d=date($reg_end, 1299446702);
                    $link=$x["reg_link"];
                    echo "
                    <div class='col-sm-6 col-lg-4' style='padding-top: 38px;padding-bottom: 69px;margin-bottom: -3px;margin-top: 0px;'>
                <div class='card clean-card text-center'><img class='card-img-top w-100 d-block'src='logos/$opid.jpg'>
                    <div class='card-body info'>
                        <h4 class='card-title' style='font-family: Acme, sans-serif;'>$role at&nbsp;$comp</h4>
                        <div class='container-fluid'>
                            <div class='card' id='TableSorterCard'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='table-responsive'>
                                            <table class='table table-striped table tablesorter' id='ipi-table'>
                                                <thead class='thead-dark'>
                                                    <tr></tr>
                                                </thead>
                                                <tbody class='text-center' style='border-style: solid;border-color: var(--bs-card-bg);'>
                                                    <tr>
                                                        <td style='text-align: center;'>Job Type</td>
                                                        <td style='text-align: left;'>$jtype</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CTC<br></td>
                                                        <td style='text-align: left;'>$ctc</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location<br></td>
                                                        <td style='text-align: left;'>$loc</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Industry<br></td>
                                                        <td style='text-align: left;'>$ind</td>
                                                    </tr>
                                                    <tr></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class='card-title' style='padding-top: 0px;font-size: 15px;margin-bottom: 16px;margin-top: 13px;'>Closes on $d</h5>";
                        $_SESSION["op_id"]=$opid;
                    echo "</div><button class='btn btn-primary overlay' type='button' style='color: var(--bs-black);font-family: ABeeZee, sans-serif;background: var(--bs-yellow);margin-top:98px;'><i class='fa fa-plus'></i>&nbsp;<a href='application_form.php' style='text-decoration: none;color:black;'>Apply</a></button>
                    </div>
                </div>
                    ";
                }
                echo "</div>
                </div>";
            }
            if(mysqli_num_rows($query2)!=0){
                echo "<div class='container' style='text-align: center;'>
                <h1 style='background: var(--bs-danger);color: var(--bs-white);padding: 12px;font-size: 26px;font-family: Acme, sans-serif;'>Previous Opportunities</h1>
                </div>
                <div class='row justify-content-center' style='margin-top: 10px;margin-right: 0px;margin-left: 0px;'>
                ";
                while($x=mysqli_fetch_assoc($query2)){
                    $opid=$x['op_id'];
                    $role=$x["role"];
                    $comp=$x["company_name"];
                    $jtype=$x["job_type"];
                    $ctc=$x["ctc"];
                    $loc=$x["location"];
                    $ind=$x["industry"];
                    $reg_end=$x["reg_end"];
                    $d=date($reg_end, 1299446702);
                    $link=$x["reg_link"];
                    echo "
                    <div class='col-sm-6 col-lg-4' style='padding-top: 38px;padding-bottom: 69px;margin-bottom: -3px;margin-top: 0px;'>
                <div class='card clean-card text-center'><img class='card-img-top w-100 d-block'src='logos/$opid.jpg'>
                    <div class='card-body info'>
                        <h4 class='card-title' style='font-family: Acme, sans-serif;'>$role at&nbsp;$comp</h4>
                        <div class='container-fluid'>
                            <div class='card' id='TableSorterCard'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='table-responsive'>
                                            <table class='table table-striped table tablesorter' id='ipi-table'>
                                                <thead class='thead-dark'>
                                                    <tr></tr>
                                                </thead>
                                                <tbody class='text-center' style='border-style: solid;border-color: var(--bs-card-bg);'>
                                                    <tr>
                                                        <td style='text-align: center;'>Job Type</td>
                                                        <td style='text-align: left;'>$jtype</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CTC<br></td>
                                                        <td style='text-align: left;'>$ctc</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location<br></td>
                                                        <td style='text-align: left;'>$loc</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Industry<br></td>
                                                        <td style='text-align: left;'>$ind</td>
                                                    </tr>
                                                    <tr></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class='card-title' style='padding-top: 0px;font-size: 15px;margin-bottom: 16px;margin-top: 13px;'>Closed on $d</h5>
                </div>
                    ";
                }
                echo "</div>
                </div>";
            }            
        ?>
        
            
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>