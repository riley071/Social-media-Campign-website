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

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

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
            <a href="#about" class="navbar-link" data-nav-link>More Pages</a>
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





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Empowering Teens <span class="span">for Safe</span> Online Adventures
            </h1>

            <p class="hero-text">
              Providing information and education for teenagers to stay safe online.
              </p>

            <a href="#" class="btn has-before">
              <span class="span">Explore Safety Tips</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>



     <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Safety Tips</p>

          <h2 class="h2 section-title">
            Ensuring Kids' <span class="span">Safety Online</span> For Social Media Use.
          </h2>

          <p class="section-text">
            Discover our educational resources and courses designed to ensure online safety among children.
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="40" height="40" loading="lazy"
                    alt="Online Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Safe Social Media Usage</a>
                </h3>

                <p class="card-text">
                  Learn how to safely navigate social media platforms and protect personal information.
                </p>

                <span class="card-badge">7 Tips</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Online Conduct Guidelines</a>
                </h3>

                <p class="card-text">
                  Understand the importance of respectful behavior and ethical conduct online.
               
                </p>

                <span class="card-badge">4 Tips</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Cyberbullying Awareness</a>
                </h3>

                <p class="card-text">
                  Recognize signs of cyberbullying and learn strategies to address and prevent it.
                </p>

                <span class="card-badge">8 Tips</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="40" height="40" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Online Privacy Protection</a>
                </h3>

                <p class="card-text">
                  Safeguard personal data and understand privacy settings on various online platforms.
                </p>

                <span class="card-badge">8 Tips</span>

              </div>
            </li>

          </ul>

        </div>
      </section>


 <!-- 
    - #SOCIAL_MEDIA_APPS
  -->

  <section class="section social-media-apps" id="social-media-apps">
    <div class="container">

      <h2 class="h2 section-title underline">Most Popular Social Media Apps</h2>

      <ul class="app-list">

        <li>
          <div class="app-card">

            <div class="card-icon">
              <img src="./assets/images/facebook.png" alt="Facebook Icon">
            </div>

            <h3 class="h3 title">Facebook</h3>

            <p class="text">
              Connect with friends and family, share updates, and discover content.
            </p>

            <button class="card-btn" aria-label="Learn More">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>

          </div>
        </li>

        <li>
          <div class="app-card">

            <div class="card-icon">
              <img src="./assets/images/insta.png" alt="Instagram Icon">
            </div>

            <h3 class="h3 title">Instagram</h3>

            <p class="text">
              Share photos and videos, interact with followers, and explore trending hashtags.
            </p>

            <button class="card-btn" aria-label="Learn More">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>

          </div>
        </li>

        <li>
          <div class="app-card">

            <div class="card-icon">
              <img src="./assets/images/x.png" alt="Twitter Icon">
            </div>

            <h3 class="h3 title">Twitter</h3>

            <p class="text">
              Stay updated with news, trends, and conversations happening around the world.
            </p>

            <button class="card-btn" aria-label="Learn More">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>

          </div>
        </li>

      </ul>

    </div>
  </section>


  
  <section class="section illustration" id="illustration" aria-label="illustration">
    <div class="container-cube">

      <div class="cube">
        <div class="side front">Facebook</div>
        <div class="side back">Twitter</div>
        <div class="side left">Instagram</div>
        <div class="side right">Snapchat</div>
        <div class="side top">YouTube</div>
        <div class="side bottom">TikTok</div>
      </div>
     
    </div>
    </div>
  </section>
      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

        
            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Our <span class="span">Mission</span> To Educate Teens.
            </h2>

            <p class="section-text">
              Our mission is to provide teenagers with the knowledge and tools they need to navigate the online world
              safely and responsibly. Through our courses, blog posts, and resources, we aim to empower teens to make
              informed decisions about their online activities and protect themselves from potential risks.
            
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Expert Trainers</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Online Remote Learning</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Lifetime Access</span>
              </li>

            </ul>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>


    <!-- 
    - #3D ILLUSTRATION
  -->

 
      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">

          <p class="section-subtitle">OUR LOCATION</p>

          <h2 class="h2 section-title">Find Us Here</h2>
      <div id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2051347.2971756617!2d33.12215413479724!3d-12.682104742447248!
          2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191e43c58003bb39%3A0x3a76337950cd4eae!2sTongole%20Wildernes%20Lodge!
          5e0!3m2!1sen!2smw!4v1695384007184!5m2!1sen!2smw"
          width="1150"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>




      <!-- 
        - #3d illstraction
      -->

      <section class="section inn" id="inn">
        <div class="container">

          <figure class="inn-banner">
            <img src="./assets/images/inn-banner.png" width="700" height="532" loading="lazy" alt="inn banner"
              class="w-100 banner-animation">
          </figure>

          <div class="inn-content">

            <h2 class="h2 section-title underline">Why Our Agency</h2>

            <p class="inn-text">
              At our agency, we prioritize excellence and customer satisfaction. Our mission is to provide top-notch services tailored to meet your needs and exceed your expectations. With years of experience and a dedicated team, we strive to deliver exceptional results on every project.

            </p>

            <p class="inn-text">
              We understand the importance of effective communication and collaboration. Our approach is transparent and collaborative, ensuring that you are involved every step of the way. Whether you're launching a new project or seeking ongoing support, you can trust us to be your reliable partner.

            </p>

            <ul class="stats-list">

              <li class="stats-card">
                <p class="h3 stats-title">9875</p>

                <p class="stats-text">Satisfied Parents</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">7894</p>

                <p class="stats-text">Kids Helped</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">10</p>

                <p class="stats-text">Years of Experience</p>
              </li>

            </ul>

          </div>

        </div>
      </section>


    

      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">

          <p class="section-subtitle">Latest Articles</p>

          <h2 class="h2 section-title">Get News With Social Media Camp</h2>
         
          <div class="elfsight-app-64b4c497-99f8-4ff4-bccf-3c8bffb1a941" data-elfsight-app-lazy></div>
        
          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

        </div>
      </section>
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
            Get started with socialmediacamp today, your few mintutes away from learning how to be safe online.
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">70-80 down at newyork 2938</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+01 222 5555 990</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:socialmediacamo@gmail.com" class="footer-link">socialmediacamo@gmail.com</a>
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
         
          <form method="POST" action="subscribe.php" class="news-form">
    <input type="email" name="email" placeholder="Enter your email" required>
    <button type="submit" name="subscribe">Subscribe</button>
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
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>