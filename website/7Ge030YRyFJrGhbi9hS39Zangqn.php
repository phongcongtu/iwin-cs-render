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
          <h1>Falcon</h1>
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
                    <h1>Falcon</h1>
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
                src="./assets/images/bulksplash-fazlyshah-ei5d39yrrgy.jpg"
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
          <h3>Game Teasers: What It Takes to Catch Your Eye</h3>
          <p><strong></strong> Gamers areors.
We're Obsessed With Games.
That's what we are.
It's in our blood, you could say.
Whether we're youngsters getting our first taste of video games in the form of handheld systems or seasoned veterans, we all have a unique affinity for playing.

And as much as we love playing video games, it's not the only thing we're into. We're also documentarians and detectives, always on the search for the next big mystery or the key to finding that elusive victory.

Through our love of games and our knack for detective work, we've discovered something amazing: game teasers.

What Are They?

Basically, game teasers are short, teaser videos designed to pique the interest of gamers and hook them in to watching more videos.

They can be anything from simple sketches to fully working scenes that hint at what's to come.

Why Are They Useful?

Well, for one, game teasers are incredibly useful when it comes to marketing a game.

Unlike traditional video advertisements, which rely on long, drawn-out trailers that give away the entire game, game teasers are a more subtle way to get people curious about</p>
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
