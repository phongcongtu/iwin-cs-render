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
        <div class="col-fluid">
          <h3>The best gaming communities have one thing in common

5 must-have features for any gaming community</h3>
          <p><strong></strong> A gaming community is essential to having a great time playing video games. Here are five features that all great gaming communities share.

1. A sense of community.

One of the most important things a great gaming community has is a sense of community. Whether it's through active discussion or just being willing to help out new players, a community that feels like it stands together is bound to be more fun.

2. Active moderation.

One of the best things about gaming communities is the active moderation that comes along with it. This means that anything that might ruin the fun for others is quickly addressed.

3. Access to helpful resources.

If there's one thing all great gaming communities have in common, it's access to helpful resources. Whether it's guides, tips, or just someone to talk to, these resources make learning and playing much easier.

4. A welcoming atmosphere.

Last but not least, a great gaming community has to have a welcoming atmosphere. Whether it's letting players be themselves or being willing to give players a chance even if they're new, a community that's hospitable is always a fun place to be.

5. A sense of community is key.</p>
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
