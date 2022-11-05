<!DOCTYPE html>
<html>
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
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Toggle-Switches.css" />
  </head>
    
  <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">SIGN UP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background:black;" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top"><img src="assets/img/cbit_logo.png" width="300" height="70" style="padding-top: 0px;margin-top: -10px;"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">SIGN UP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header
      class="masthead"
      style="background-image: url('assets/img/homeimg.jpg')"
    >
    
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">
            <span class="text-light bg-danger p-2">Welcome To CBIT Placements!</span>
          </div>
          <a
            class="btn btn-dark btn-xl text-uppercase"
            role="button"
            href="login.php"
            >Login now</a
          >
        </div>
      </div>
    </header>
    
    <section
      id="contact"
      style="background-image: url('assets/img/map-image.png')"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="text-uppercase section-heading">Contact Us</h2>
            <h3 class="text-muted section-subheading">
              Ask away your queries, we'll reach out to you as early as
              possible!
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="contactForm" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <input
                      class="form-control"
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Your Name *"
                      required
                    /><small
                      class="form-text text-danger flex-grow-1 help-block lead"
                    ></small>
                  </div>
                  <div class="form-group mb-3">
                    <input
                      class="form-control"
                      type="email"
                      id="email"
                      name="email"
                      placeholder="Your Email *"
                      required
                    /><small
                      class="form-text text-danger help-block lead"
                    ></small>
                  </div>
                  <div class="form-group mb-3">
                    <input
                      class="form-control"
                      type="tel"
                      name="phone"
                      placeholder="Your Phone (with country code and without hyphens)*"
                      required
                    /><small
                      class="form-text text-danger help-block lead"
                    ></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <textarea
                      class="form-control"
                      id="message"
                      name="msg"
                      placeholder="Your Message/Feedback*"
                      required
                    ></textarea
                    ><small
                      class="form-text text-danger help-block lead"
                    ></small>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button
                    class="btn btn-warning btn-xl text-uppercase"
                    id="sendMessageButton"
                    name="sendMessageButton"
                    type="submit"
                  >
                    Send Message
                  </button>
                </div>
              </div>
            </form>
            <?php
              if(isset($_POST['sendMessageButton'])){
                $n=$_POST["name"];
                $e=$_POST["email"];
                $p=$_POST["phone"];
                $m=$_POST["msg"];
                require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
                // use Twilio\Rest\Client;
                // Your Account SID and Auth Token from twilio.com/console
                $account_sid = 'xxxx';
                $auth_token = 'xxxx';
                // In production, these should be environment variables. E.g.:
                // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
                $phoneNum='xxxx';
                // A Twilio number you own with SMS capabilities
                $twilio_number = "xxxx";
                $client = new Twilio\Rest\Client($account_sid, $auth_token);
                $client->messages->create(
                    // Where to send a text message (your cell phone?)
                    $phoneNum,
                    array(
                        'from' => $twilio_number,
                        'body' => "$n has a message/feedback: $m. please reach out to them at $e or $p",
                    )
                );
                echo "<script type='text/javascript'>
                alert('Message sent succesfully! We will reach out to you soon.');
                window.location.href='index.php';
                </script>";
              }
            ?>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright&nbsp;© CBIT 2022</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
              <li class="list-inline-item"><a href="#">Terms of Use</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/agency.js"></script>
  </body>
</html>
