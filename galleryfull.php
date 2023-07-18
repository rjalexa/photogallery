<!DOCTYPE HTML>
<!--
  Aesthetic by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Photo &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
  <meta name="keywords"
    content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="gettemplates.co" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <!-- <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet"> -->

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <style>
        body {
            background-color: black;
        }
    </style>

</head>

<body>


  <div id="fh5co-page">

    <div class="aside-toggle btn-circle">
      <a href="#"><span></span><em>About</em></a>
    </div>



    <div id="fh5co-aside">
      <div class="image-bg"></div>
      <div class="overlay"></div>
      <div class="row">
        <div class="col-md-12">
          <div id="fh5co-aside-inner">
            <div class="row" id="fh5co-bio">
              <div class="col-md-12">
                <h2>About Me</h2>
              </div>
              <div class="col-md-6">
                <p>Raised by cosmopolitan parents in several countries and languages. Grown up in Rome,
                  Italy. Dreamt about being a physicist then wound up becoming a physician but to
                  never lead a boring life fled the teaching hospital and went on to work for a large
                  information technology multinational. Fascinated by the physical world around
                  me, from the quantum realm which of course I only slightly understand instinctively,
                  to cosmological space and deep time scales. History, geography, societies, cultures
                  and their fascinating intersections such as exploration, sociology, economy are all
                  things I love reading about. For a living I work with AI and knowledge
                  modeling. Love to cook and of course eat. Love cartoons and documentaries. Sometimes
                  I worry for our future generations and the way they will cope, and hope they will
                  manage to address the threats to our common welfare.
                </p>
              </div>
              <div class="col-md-6">
                <p>This web page is just a little mirror of what I think and do when have some spare
                  time.</p>
              </div>
              <div class="col-md-12 fh5co-social">
                <a href="#"><i class="icon-envelope"></i></a>
                <a href="#"><i class="icon-linkedin"></i></a>
              </div>
              <div class="col-md-12" style="margin-top: 40px;">
                <p>&copy; 2023 Robert Alexander. All Rights Reserved. Derived from <a
                    href="http://gettemplates.co/">GetTemplates</a> Images: <a href="http://midjourney.com/"
                    target="_blank">Midjourney</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="fh5co-image-grid">


      <div class="grid">
        <div class="grid-sizer"></div>

        <?php
        $dir = 'images/';
        $files = scandir($dir);

        // Remove . and .. from the file list
        $files = array_diff($files, array('.', '..'));

        // Sort the files by creation time, newest first
        usort($files, function ($a, $b) use ($dir) {
          return filectime($dir . $b) - filectime($dir . $a);
        });

        foreach ($files as $file) {
          $info = pathinfo($file);
          if ($info['extension'] != 'png' && $info['extension'] != 'jpg') {
            continue;
          }
          $title = basename($file, '.' . $info['extension']); // get file name without extension
          echo '
              <div class="grid-item item animate-box" data-animate-effect="fadeIn">
                <a href="single.html?img=' . urlencode($dir . $file) . '">
                  <div class="img-wrap">
                    <img src="' . $dir . $file . '" alt="" class="img-responsive">
                  </div>
                  <div class="text-wrap">
                    <div class="text-inner">
                      <div>
                        <h2>' . $title . '</h2>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              ';
        }
        ?>


      </div>


    </div>

  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>

  <!-- Magnific -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Isotope & imagesLoaded -->
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <!-- GSAP  -->
  <script src="js/TweenLite.min.js"></script>
  <script src="js/CSSPlugin.min.js"></script>
  <script src="js/EasePack.min.js"></script>

  <!-- MAIN JS -->
  <script src="js/main.js"></script>

</body>

</html>