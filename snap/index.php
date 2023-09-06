<!-- /*
* Template Name: Snap
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600, 700,900|Oswald:400,700" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="css/style.css">
  <title>Hostel &mdash; Free Photography Website Template by Untree.co</title>


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
      <div class="site-logo">
        <a href="index.php">Hostel</a>
      </div>

      <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle "><span class="icon-menu h3"></span></a></div>

      <div class="main-menu">
        <ul class="js-clone-nav">
          <li><a href="#section-home" class="nav-link">Home</a></li>
          <li><a href="#section-about" class="nav-link">Student Profile</a></li>
          <li><a href="#Feedback" class="nav-link">Feedback</a></li>
          <li><a href="" class="nav-link">Logout</a></li>
        </ul>
        <ul class="social js-clone-nav">
          <li><a href="#"><span class="icon-instagram"></span></a></li>
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a href="#"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-linkedin"></span></a></li>
        </ul>
      </div>
    </header> 
   

     

        <section class="site-section" id="section-about">
          <div class="container">
            <div class="row justify-content-center">

              <div class="col-md-8">

                <!-- <h2 class="heading">About</h2> -->

                <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">

                <div data-aos="fade-up"  data-aos-delay="100">
                  <h2 class="">Hi I'm Jessica Cameron</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor aperiam a velit. Harum eligendi quod reiciendis quos ullam libero est dolor, <a href="#">corporis dolores assumenda</a>, delectus, quidem voluptatibus dolorum temporibus enim!</p>
                  <p>Neque facilis soluta, accusantium quaerat, adipisci porro animi, hic fugiat id vero placeat dolorem accusamus sapiente odio consequatur debitis beatae eius quos alias. In recusandae magnam quis ipsum, asperiores mollitia!</p>
                  <h3 class=" mt-5">Services</h3>
                  
                  <div class="d-block d-md-flex mt-5">
                    <div class="mr-md-auto mr-2">
                      <ul class="ul-check list-unstyled primary">
                        <li>Optio eveniet ex laborum</li>
                        <li>Inventore sapiente tenetur</li>
                        <li>Ipsam aliquam esse</li>
                      </ul>
                    </div>
                    <div class="mr-md-auto">
                      <ul class="ul-check list-unstyled primary">
                        <li>Optio eveniet ex laborum</li>
                        <li>Inventore sapiente tenetur</li>
                        <li>Ipsam aliquam esse</li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

       

        <section class="site-section" id="section-contact">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <h2 class=" mb-5 heading">Feedback</h2>

                <form action="add.php" method="POST">



                  <div class="row form-group">
                    <div class="col-md-12 mb-md-0">
                      <label class="" for="fname">Name</label>
                      <input type="text" id="fname" name="name" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">

                    <div class="col-md-12">
                      <label class="" for="email">Email</label> 
                      <input type="email" id="email" name="email" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">

                    <div class="col-md-12">
                      <label class="" for="subject">Year</label> 
                   
                      <select name="hostel" class="form-control">
                                    <option disabled="disabled" selected="selected">HOSTELS</option>
                                    <option>AAH</option>
                                    <option>PDH</option>
                                    <option>Joachim Villa/ Ennagam</option>
                                </select>
                    </div>
                  </div>

                  <div class="row form-group mb-5">
                    <div class="col-md-12">
                      <label class="" for="message">Feedback</label> 
                      <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Send Feedback" class="btn btn-primary btn-md" name="submit">
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>
        </section>

        <div class="row justify-content-center">
          <div class="col-md-12 text-center py-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a><!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div>
    </main>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/lozad.min.js"></script>
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  </body>
</html>
