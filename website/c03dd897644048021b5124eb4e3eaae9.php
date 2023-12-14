<!DOCTYPE html>

<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     
    <title>Article</title>
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
          <h1>Crusade</h1>
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
                    <h1>Crusade</h1>
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
                <h1>Article</h1>
              </div>
              <img
                src="./assets/images/bulksplash-linusmimietz-gvptkmonylk.jpg"
                alt=""
                style="height: 300px; object-fit: cover; width: 100%"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="featured-heading">
      <div class="container">
        <div class="h-divider"></div>
        <div class="col-fluid">
          <h3>Gaming Software Releases: The Best And Worst For Your Computer</h3>
          <p><strong></strong> Hello everyone,

With the holiday season upon us, it's the perfect time to update your gaming PC! But before you do, be sure to check out one of the biggest releases of the year: Windows 10 Fall Creators Update.

Windows 10 Fall Creators Update is a must-have for all gamers, as it introduces a slew of new gaming features and improvements.

For PC gamers, the biggest new addition is the Game Bar, which provides quick access to important game settings like volume, brightness, and microphone mute. You can also use the Game Bar to easily summon your favorite games and apps.

Another big update is the new gaming DVR. With the Windows 10 Fall Creators Update, you can now record and share your gaming sessions with others. Simply choose the Game bar as your recording destination, and Windows 10 will start recording your gameplay automatically.

Of course, there are also a plethora of bug fixes and performance improvements in Windows 10 Fall Creators Update. So if you're looking for the best gaming software release this year, don't forget to update to Windows 10 Fall Creators Update!</p>
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
