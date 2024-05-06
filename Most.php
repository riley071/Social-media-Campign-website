<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <title>Social Media Campaigns Ltd. - Teen Safety Hub</title>
  <meta name="title" content="Social media camp - The Best camp for kids">
  <meta name="description" content="social media posts">
 
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/style2.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/SMC (1).png" width="162" height="50" alt="Socialmediacamp">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/SMC (1).png" width="162" height="50" alt="Socialmediacamp">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

        <li class="navbar-item">
  <a href="index.php" class="navbar-link" data-nav-link>Home</a>
</li>

  <li class="navbar-item">
  <a href="Livestream.php" class="navbar-link" data-nav-link>Stream</a>
</li>
        <li class="navbar-item">
  <a href="Contact.php" class="navbar-link" data-nav-link>Contact</a>
</li>
</li>
        <li class="navbar-item">
  <a href="login.php" class="navbar-link" data-nav-link>Sign Up</a>
</li>
<li class="navbar-item">
            <a href="" class="navbar-link" data-nav-link>More Pages</a>
            <ul class="dropdown-menu">
    <li> <a href="most.php" class="navbar-link" data-nav-link>Popular</a></li>
    <li><a href="Help.php" class="navbar-link" data-nav-link>Help</a></li>
    <li><a href="Legislation.php" class="navbar-link" data-nav-link>Guidance</a></li>
    <li><a href="info.php" class="navbar-link" data-nav-link>information</a></li>
  </ul> </li>
</ul>

      </nav>

      <div class="header-actions">
 <!-- Responsive Search Bar -->
 <form class="search-form" action="#" method="GET">
  <input type="text" class="search-input" placeholder="Search...">
  <button type="submit" class="search-button">
    <ion-icon name="search-outline"></ion-icon>
  </button>
  </form>

       
                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
  <section class="section parent-tips" aria-label="Parent Tips">
   
  <div class="custom-container">
    <div class="col-md-3"></div>
    <div class="col-md-6 custom-well">
        <h3 style="color: #007bff;">Search Box for Most latest techniques to stay safe</h3>
        <hr style="border-top: 1px dotted #ccc;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="custom-search-box" method="POST" action="Most.php">
                <div class="custom-input-group">
                    <input type="text" class="custom-form-control" placeholder="Search here..." name="keyword" required value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                    <span class="custom-input-group-btn">
                        <button class="custom-btn-primary" name="search"><span>&#x1F50D;</span></button>
                    </span>
                </div>
            </form>
            <br> 
            <?php include 'search.php'?>
        </div>
    </div>
</div></section>
<section class="section parent-tips" aria-label="Parent Tips">
    </section>


  <main>
    <article>





  
</article>
</main>




  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/SMC (1).png" width="162" height="50" alt="smc logo">
          </a>

          <p class="footer-brand-text">
            Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">70-80 down at newyork 2938</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+01 134 5468 990</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">info@smc.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Legislation and Guidance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Livestreaming</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link">How Parents Can Help</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Most Popular Social Media Apps</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">Socialmediacamp</a>
        </p>

      </div>
    </div>

  </footer>





<!-- 
  - #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
  <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>





<!-- 
  - custom js link
-->
<script src="./assets/js/script.js" defer></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>