<!DOCTYPE html>

<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     
    <title>Contacts</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="css/custom-styles.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/component.css" />
    <link rel="stylesheet" href="css/font-awesome-ie7.css" />

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <div class="header-wrapper">
      <div class="container">
        <div class="logo">
          <h1>Dawn</h1>
        </div>
        <div class="menu">
          <div class="navbar">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> </a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="index.php">Main</a></li>
                <li><a href="blog.php">Articles</a></li>
                <li><a href="contact.php">Contacts</a></li>

                <li>
                  <div class="site-name">
                    <h1>Dawn</h1>
                  </div>
                </li>
                <li><a href="privacy.php">Privacy policy</a></li>
                <li><a href="terms.php">Terms and conditions</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>
    <div class="banner">
      <div class="container">
        <div class="carousel slide" id="myCarousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="carousel-caption">
                <h1>Contacts</h1>
              </div>
              <img
                src="./assets/images/bulksplash-ingvar_erik-yuipfptoh1k.jpg"
                alt=""
                style="height: 300px; object-fit: cover; width: 100%"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured-blocks">
      <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <div class="block">
              <div class="icon"></div>
              <h1>+3912441815591</h1>
            </div>
          </div>
          <div class="span4">
            <div class="block">
              <div class="icon"></div>
              <h1>1191 Clara Village
South Chyna, NY 05939</h1>
            </div>
          </div>
          <div class="span4">
            <div class="block">
              <div class="icon"></div>
              <h1>toy.pearlie@okon.com</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-wrapper">
      <div class="container">
        <div class="copy-rights">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          Copyright
        </div>
      </div>
    </div>

    <div class="cookie-banner">
      <p style="color: #000000">
        The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Cookie policy</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>

    <script>
      new AnimOnScroll(document.getElementById('grid'), {
        minDuration: 0.4,
        maxDuration: 0.7,
        viewportFactor: 0.2,
      });
    </script>
    <script>
      $('#myCarousel').carousel({
        interval: 1800,
      });
    </script>
  </body>
</html>
