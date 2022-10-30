<!DOCTYPE html>
<?php
  session_start();
?>
<html class="text-center" lang="en" style="font-weight: bold">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>CBIT placements</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/img/placement.jpg"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap"
    />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="assets/css/Article-Cards.css" />
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css" />
    <link rel="stylesheet" href="assets/css/Features-Cards-icons.css" />
    <link
      rel="stylesheet"
      href="assets/css/Modal-commerce-popup-button-bs4_modal.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/css/Modal-commerce-popup-button-styles.css"
    />
  </head>

  <body style="text-align:center;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;text-decoration:none;" id="mainNav">
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
    <br><br><br> <br><br>
  <?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"cbit_placements");
    $opid=$_SESSION["op_id"];
    $q1=mysqli_query($con, "select * from `opportunities` where op_id='$opid'");
    if(mysqli_num_rows($q1)!=0){
      while($row=mysqli_fetch_array($q1)){
        $cname=$row['company_name'];
        $about=$row['about'];
        $size=$row['size'];
        $curl=$row['company_url'];
        $opid=$row['op_id'];
        $role=$row['role'];
        $jtype=$row['job_type'];
        $ctc=$row['ctc'];
        $loc=$row['location'];
        $ind=$row['industry'];
        $regs=$row['reg_start'];
        $rege=$row['reg_end'];
        $regl=$row['reg_link'];
        $elig_courses=$row['eligible_courses'];
        $elig_criteria=$row['eligibility_criteria'];
        $process=$row['process'];
        $sch=$row['schedule'];
      }
      echo "
      <div
      class='container align-items-stretch align-content-stretch py-4 py-xl-5'
      style='
        text-align: center;
        border-style: none;
        width: 1076px;
        font-family: Acme, sans-serif;
      '
    >
      <div class='row mb-5'>
        <div
          class='col-md-8 col-xl-6 text-center mx-auto'
          style='text-align: center'
        >
          <h2
            style='
              width: 697px;
              text-align: center;
              margin-left: -60px;
              font-family: Acme, sans-serif;
            '
          >
            <img
              class='img-fluid'
              src='./logos/$opid.jpg'
              width='150'
              height='100'
            />$role - $cname
          </h2>
        </div>
      </div>
      <div
        class='row justify-content-center align-items-center'
        style='margin: 20px; text-align: center'
      >
        <div
          class='col-lg-4'
          style='
            padding: 10px 10px;
            box-shadow: 0px 0px 5px;
            width: 280px;
            height: 100px;
            margin: 10px;
          '
        >
          <p
            class='text-center justify-content-center align-content-center'
            style='box-shadow: 0px 0px'
          >
            <i
              class='fas fa-briefcase'
              style='margin: 5px; color: var(--bs-black)'
            ></i
            >&nbsp;Employment Type<br />
          </p>
          <p
            class='text-center bg-light border rounded-pill border-2 border-dark shadow-lg d-table-cell d-lg-flex justify-content-center align-content-center m-auto justify-content-lg-center'
            style='
              padding: 3px 10px;
              height: 36px;
              width: 100px;
              font-family: Actor, sans-serif;
              text-align: center;
              box-shadow: 0px 0px 0px 0px;
            '
          >
            $jtype
          </p>
          <div class='text-center'>
            <div
              id='bs4_sngl_cmrce'
              class='modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce'
              role='dialog'
              data-modal-backdrop='true'
              data-show-on='click'
              data-modal-delay='false'
              data-modal-duration='false'
            >
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <a
                    class='bs4_btn_x_out_shtr bs4_sngl_cmrce_close'
                    href='#'
                    data-bs-dismiss='modal'
                    >close</a
                  >
                  <div class='row'>
                    <div class='col-12 col-md-5'>
                      <div class='bs4_sngl_cmrce_img'>
                        <img
                          src='assets/img/bs4_single_commerce_01.png'
                          alt='bs4_single_commerce_01'
                        />
                      </div>
                    </div>
                    <div class='col-12 col-md-7' style='padding-bottom: 30px'>
                      <div class='bs4_sngl_cmrce_txt'>
                        <h1>name of product, company plus modal number</h1>
                        <ul>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li>
                            <i class='fa fa-star-half-full rate-star'></i>
                          </li>
                        </ul>
                        <h2>130.00</h2>
                        <p class='text-start' style='padding-top: 15px'>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing
                          elit. Nam nibh. Nunc varius facilisis eros. Sed erat.
                          In in velit quis arcu ornare laoreet. Curabitur
                          adipiscing luctus massa.
                        </p>
                        <form
                          class='d-xl-flex'
                          action='#'
                          style='padding-top: 15px'
                        >
                          <div class='bs4_form_num' style='padding-top: 15px'>
                            <label class='form-label'>quantity</label
                            ><input
                              class='form-control'
                              type='number'
                              min='1'
                              max='20'
                            />
                          </div>
                          <div class='bs4_form_color' style='padding-top: 15px'>
                            <label class='form-label'>colours</label
                            ><select class='form-select form-select-sm'>
                              <optgroup label='Pick a color'>
                                <option value='12' selected=''>red</option>
                                <option value='13'>green</option>
                                <option value='14'>blue</option>
                              </optgroup>
                            </select>
                          </div>
                          <div
                            class='bs4_form_size&quot;'
                            style='margin-left: 15px; margin-top: 15px'
                          >
                            <label class='form-label'>Pick your size</label
                            ><select
                              class='form-select'
                              name='size'
                              style='max-width: 128px'
                            >
                              <optgroup label='Select size'>
                                <option value='12' selected=''>10</option>
                                <option value='13'>12</option>
                                <option value='14'>14</option>
                              </optgroup>
                            </select>
                          </div>
                        </form>
                      </div>
                      <div
                        class='bs4_form_cmrce_btn'
                        style='padding-left: 20px'
                      >
                        <button
                          class='btn btn-primary d-flex justify-content-start bs4_btn_x_out_shtr'
                          type='submit'
                        >
                          ADD TO CART
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class='col-lg-4'
          style='
            padding: 10px 10px;
            box-shadow: 0px 0px 5px;
            width: 260px;
            height: 100px;
            margin: 10px;
          '
        >
          <p class='text-center justify-content-center align-content-center' >
            <i
              class='fas fa-globe-americas'
              style='margin: 5px;  color: var(--bs-black)'
            ></i
            >Location
          </p>
          <p
            class='text-center bg-light border rounded-pill border-2 border-dark shadow-lg d-table-cell d-lg-flex justify-content-center align-content-center m-auto justify-content-lg-center'
            style='
              padding: 3px 10px;
              height: 36px;
              width: 100px;
              font-family: Actor, sans-serif;
              text-align: center;
            '
          >
            $loc
          </p>
          <div class='text-center'>
            <div
              id='bs4_sngl_cmrce-1'
              class='modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce'
              role='dialog'
              data-modal-backdrop='true'
              data-show-on='click'
              data-modal-delay='false'
              data-modal-duration='false'
            >
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <a
                    class='bs4_btn_x_out_shtr bs4_sngl_cmrce_close'
                    href='#'
                    data-bs-dismiss='modal'
                    >close</a
                  >
                  <div class='row'>
                    <div class='col-12 col-md-5'>
                      <div class='bs4_sngl_cmrce_img'>
                        <img
                          src='assets/img/bs4_single_commerce_01.png'
                          alt='bs4_single_commerce_01'
                        />
                      </div>
                    </div>
                    <div class='col-12 col-md-7' style='padding-bottom: 30px'>
                      <div class='bs4_sngl_cmrce_txt'>
                        <h1>name of product, company plus modal number</h1>
                        <ul>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li>
                            <i class='fa fa-star-half-full rate-star'></i>
                          </li>
                        </ul>
                        <h2>130.00</h2>
                        <p class='text-start' style='padding-top: 15px'>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing
                          elit. Nam nibh. Nunc varius facilisis eros. Sed erat.
                          In in velit quis arcu ornare laoreet. Curabitur
                          adipiscing luctus massa.
                        </p>
                        <form
                          class='d-xl-flex'
                          action='#'
                          style='padding-top: 15px'
                        >
                          <div class='bs4_form_num' style='padding-top: 15px'>
                            <label class='form-label'>quantity</label
                            ><input
                              class='form-control'
                              type='number'
                              min='1'
                              max='20'
                            />
                          </div>
                          <div class='bs4_form_color' style='padding-top: 15px'>
                            <label class='form-label'>colours</label
                            ><select class='form-select form-select-sm'>
                              <optgroup label='Pick a color'>
                                <option value='12' selected=''>red</option>
                                <option value='13'>green</option>
                                <option value='14'>blue</option>
                              </optgroup>
                            </select>
                          </div>
                          <div
                            class='bs4_form_size&quot;'
                            style='margin-left: 15px; margin-top: 15px'
                          >
                            <label class='form-label'>Pick your size</label
                            ><select
                              class='form-select'
                              name='size'
                              style='max-width: 128px'
                            >
                              <optgroup label='Select size'>
                                <option value='12' selected=''>10</option>
                                <option value='13'>12</option>
                                <option value='14'>14</option>
                              </optgroup>
                            </select>
                          </div>
                        </form>
                      </div>
                      <div
                        class='bs4_form_cmrce_btn'
                        style='padding-left: 20px'
                      >
                        <button
                          class='btn btn-primary d-flex justify-content-start bs4_btn_x_out_shtr'
                          type='submit'
                        >
                          ADD TO CART
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class='col-lg-4'
          style='
            padding: 10px 10px;
            box-shadow: 0px 0px 5px;
            width: 280px;
            height: 100px;
            margin: 10px;
          '
        >
          <p class='text-center justify-content-center align-content-center'>
            <i class='fas fa-rupee-sign' style='margin: 5px'></i>Cost to Company
          </p>
          <p
            class='text-center bg-light border rounded-pill border-2 border-dark shadow-lg d-table-cell d-lg-flex justify-content-center align-content-center m-auto justify-content-lg-center'
            style='
              padding: 3px;
              height: 36px;
              width: 150px;
              font-family: Actor, sans-serif;
              text-align: center;
            '
          >
            Rs $ctc
          </p>
          <div class='text-center'>
            <div
              id='bs4_sngl_cmrce-2'
              class='modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce'
              role='dialog'
              data-modal-backdrop='true'
              data-show-on='click'
              data-modal-delay='false'
              data-modal-duration='false'
            >
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <a
                    class='bs4_btn_x_out_shtr bs4_sngl_cmrce_close'
                    href='#'
                    data-bs-dismiss='modal'
                    >close</a
                  >
                  <div class='row'>
                    <div class='col-12 col-md-5'>
                      <div class='bs4_sngl_cmrce_img'>
                        <img
                          src='assets/img/bs4_single_commerce_01.png'
                          alt='bs4_single_commerce_01'
                        />
                      </div>
                    </div>
                    <div class='col-12 col-md-7' style='padding-bottom: 30px'>
                      <div class='bs4_sngl_cmrce_txt'>
                        <h1>name of product, company plus modal number</h1>
                        <ul>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li><i class='fa fa-star rate-star'></i></li>
                          <li>
                            <i class='fa fa-star-half-full rate-star'></i>
                          </li>
                        </ul>
                        <h2>130.00</h2>
                        <p class='text-start' style='padding-top: 15px'>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing
                          elit. Nam nibh. Nunc varius facilisis eros. Sed erat.
                          In in velit quis arcu ornare laoreet. Curabitur
                          adipiscing luctus massa.
                        </p>
                        <form
                          class='d-xl-flex'
                          action='#'
                          style='padding-top: 15px'
                        >
                          <div class='bs4_form_num' style='padding-top: 15px'>
                            <label class='form-label'>quantity</label
                            ><input
                              class='form-control'
                              type='number'
                              min='1'
                              max='20'
                            />
                          </div>
                          <div class='bs4_form_color' style='padding-top: 15px'>
                            <label class='form-label'>colours</label
                            ><select class='form-select form-select-sm'>
                              <optgroup label='Pick a color'>
                                <option value='12' selected=''>red</option>
                                <option value='13'>green</option>
                                <option value='14'>blue</option>
                              </optgroup>
                            </select>
                          </div>
                          <div
                            class='bs4_form_size&quot;'
                            style='margin-left: 15px; margin-top: 15px'
                          >
                            <label class='form-label'>Pick your size</label
                            ><select
                              class='form-select'
                              name='size'
                              style='max-width: 128px'
                            >
                              <optgroup label='Select size'>
                                <option value='12' selected=''>10</option>
                                <option value='13'>12</option>
                                <option value='14'>14</option>
                              </optgroup>
                            </select>
                          </div>
                        </form>
                      </div>
                      <div
                        class='bs4_form_cmrce_btn'
                        style='padding-left: 20px'
                      >
                        <button
                          class='btn btn-primary d-flex justify-content-start bs4_btn_x_out_shtr'
                          type='submit'
                        >
                          ADD TO CART
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col' style='width: 1050px; box-shadow: 0px 0px 0px'>
          <p style='margin: 20px; font-size: 20px; text-align: left'>
            <i class='fas fa-bullhorn' style='margin: 3px'></i
            ><strong>&nbsp;About the Organization</strong>
          </p>
          <p
            style='
              width: 1040px;
              box-shadow: 0px 0px 3px;
              padding: 5px;
              font-family: Actor, sans-serif;
            '
          >
            <br /><span style='color: rgb(77, 81, 86)'
              >$about</span
            >&nbsp;&nbsp;<br /><br />&nbsp;<i class='fas fa-globe'></i
            >&nbsp;$curl&nbsp; &nbsp; &nbsp;<i
              class='fas fa-user-plus'
            ></i
            >&nbsp; $size +&nbsp; &nbsp;&nbsp;<i class='fas fa-industry'></i
            >&nbsp; $ind
          </p>
          <p style='text-align: left'></p>
        </div>
      </div>
      <div
        class='row'
        style='
          box-shadow: 0px 0px 0px;
          margin: 20px;
          width: 1076px;
          margin-left: -20px;
        '
      >
        <div
          class='col text-center align-self-center m-auto'
          style='margin: 20px; box-shadow: 0px 0px; margin-left: 2px'
        >
          <p
            class='text-center'
            style='margin: 20px; font-size: 20px; text-align: left'
          >
            <i class='fas fa-user-check' style='margin: 3px'></i
            ><strong>&nbsp;Eligible Courses</strong>
          </p>
          <p
            style='
              margin: 10px;
              padding: 3px;
              box-shadow: 0px 0px 3px;
              text-align: justify;
              font-family: Actor, sans-serif;
            '
          >
            <br /><span style='color: rgb(102, 102, 102)'
              >$elig_courses&nbsp;</span
            ><br /><br />
          </p>
        </div>
        <div
          class='col text-center align-self-center m-auto'
          style='margin: 20px; box-shadow: 0px 0px'
        >
          <p
            class='text-center'
            style='margin: 20px; font-size: 20px; text-align: left'
          >
            <i class='fas fa-users' style='margin: 3px'></i
            ><strong
              >&nbsp;<span
                style='color: rgb(0, 0, 0); background-color: transparent'
                >Eligibility criteria</span
              ></strong
            ><br />
          </p>
          <p
            style='
              margin: 10px;
              padding: 10px;
              box-shadow: 0px 0px 3px;
              height: 100px;
              text-align: justify;
              font-family: Actor, sans-serif;
            '
          >
            <br /><span
              style='color: rgb(0, 0, 0); background-color: transparent'
              >$elig_criteria</span
            ><br /><br />
          </p>
        </div>
      </div>
      <div class='row'>
        <div class='col' style='margin: 20px'>
          <p style='font-size: 20px'>
            <i class='fab fa-wpforms'></i
            ><strong>&nbsp; Registration Link</strong>
          </p>
          <a
            href='#'
            style='
             
              padding: 2px 80px 2px 130px;
              font-family: Actor, sans-serif;
            '
            ><strong><em>$regl</em></strong></a
          >
        </div>
        <div class='col' style='margin: 20px'>
          <p style='font-size: 20px'>
            <i class='fas fa-calendar-alt'></i
            ><strong>&nbsp; Registration deadline</strong>
          </p>
          <p style=' font-family: Actor, sans-serif'>
            $regs to $rege
          </p>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
          <p style='font-size: 20px'>
            <i class='fas fa-stream'></i
            ><strong>&nbsp; Selection Process</strong>
          </p>
          <p
            style='
              box-shadow: 0px 0px 5px;
              padding: 3px 3px 3px 10px;
              text-align: justify;
              font-family: Actor, sans-serif;
            '
          >
            <span style='color: rgb(51, 51, 51)'
              >$process</span
            ><br />
          </p>
        </div>
        <div class='col'>
          <p style='font-size: 20px'>
            <i class='far fa-calendar-check'></i
            ><strong
              >&nbsp;&nbsp;<span
                style='color: rgb(0, 0, 0); background-color: transparent'
                >Schedule&nbsp;</span
              ></strong
            >
          </p>
          <p
            style='
              box-shadow: 0px 0px 5px;
              padding: 3px 3px 3px 10px;
              text-align: justify;
              font-family: Actor, sans-serif;
            '
          >
            <span style='color: rgb(51, 51, 51)'>&nbsp;$sch</span
            >
          </p>
        </div>
        <p style='margin: 20px; font-size: 20px; text-align: left'>
        <i class='input-icon fas fa-file-upload'></i>
            <strong>&nbsp;Attachments</strong>
          </p>
        
      </div>";
      for($tx=0;$tx<2;$tx++){
        $fname="attachments/$opid.$tx.pdf";
        echo "<iframe
        src='$fname'
        width='30%'
        height='300vh' style='float:left; margin-left:50px; margin-bottom:50px;'>
      </iframe>";
      }
       
    echo "</div>";
    }
  ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
  </body>
</html>
