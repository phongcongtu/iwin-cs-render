<!DOCTYPE html>

<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     
    <title>Articles</title>
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
          <h1>Empire</h1>
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
                    <h1>Empire</h1>
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
                <h1>Articles</h1>
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

    <div class="featured-heading">
      <div class="container">
        <div class="h-divider"></div>
        <div class="row-fluid">
          <ul class="grid effect-3" id="grid">
            
            <li class="span6">
              <div class="block">
                <img
                  src="./assets/images/bulksplash-ingvar_erik-yuipfptoh1k.jpg"
                  alt=""
                  style="width: 100%; height: 300px; object-fit: cover"
                />
                <h1>The best gaming communities ha...</h1>
                <p><strong></strong> A gaming community is essential to having a great time playing video games. Here are five features tha...</p>
                <a href="SFSV2blf8QpO7DVjyv.php" class="btn">Read further</a>
              </div>
            </li>
            

            <li class="span6">
              <div class="block">
                <img
                  src="./assets/images/bulksplash-fazlyshah-ei5d39yrrgy.jpg"
                  alt=""
                  style="width: 100%; height: 300px; object-fit: cover"
                />
                <h1>Game Teasers: What It Takes to...</h1>
                <p><strong></strong> Gamers areors.
We're Obsessed With Games.
That's what we are.
It's in our blood, you could say.
Whethe...</p>
                <a href="7Ge030YRyFJrGhbi9hS39Zangqn.php" class="btn">Read further</a>
              </div>
            </li>
            

            <li class="span6">
              <div class="block">
                <img
                  src="./assets/images/bulksplash-linusmimietz-gvptkmonylk.jpg"
                  alt=""
                  style="width: 100%; height: 300px; object-fit: cover"
                />
                <h1>Gaming Software Releases: The ...</h1>
                <p><strong></strong> Hello everyone,

With the holiday season upon us, it's the perfect time to update your gaming PC! But ...</p>
                <a href="c03dd897644048021b5124eb4e3eaae9.php" class="btn">Read further</a>
              </div>
            </li>
            

            <li class="span6">
              <div class="block">
                <img
                  src="./assets/images/bulksplash-jenniferchrisstin-m82tbai79zg.jpg"
                  alt=""
                  style="width: 100%; height: 300px; object-fit: cover"
                />
                <h1>Gaming social media news: Late...</h1>
                <p><strong></strong> in the gaming industry

Gaming social media news is always evolving, so keep up with the latest trends...</p>
                <a href="wBmK6S5gbMJDMF162osP6sRq3O.php" class="btn">Read further</a>
              </div>
            </li>
            

          </ul>
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
