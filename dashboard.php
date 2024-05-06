<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('location: login.php');
    exit();
}

// Include the database connection
require 'config.php';

// Fetch user data from the database
$user_id = $_SESSION['user_id'];
$query = mysqli_query($connection, "SELECT * FROM `users` WHERE id='$user_id'");
if (!$query) {
    die('Query error: ' . mysqli_error($connection));
}
$user_data = mysqli_fetch_assoc($query);

// Update user data if the form is submitted
if (isset($_POST['update_profile'])) {
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    // Update the user data in the database
    $update_query = mysqli_query($connection, "UPDATE `users` SET firstname='$firstname', surname='$surname', email='$email' WHERE id='$user_id'");
    if (!$update_query) {
        $message[] = 'Error updating profile: ' . mysqli_error($connection);
    } else {
        $message[] = 'Profile updated successfully';
    }
}

?>

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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

<style>
    
</style>
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
  <a href="#about" class="navbar-link" data-nav-link>About</a>
  <ul class="dropdown-menu">
<li> <a href="index.php" class="navbar-link" data-nav-link>Popular</a></li>
<li><a href="Help.php" class="navbar-link" data-nav-link>Help</a></li>
<li><a href="Legislation.php" class="navbar-link" data-nav-link>Guidance</a></li>
</ul> </li>

  <li class="navbar-item">
  <a href="Livestream.php" class="navbar-link" data-nav-link>Stream</a>
</li>
        <li class="navbar-item">
  <a href="Contact.php" class="navbar-link" data-nav-link>Contact</a>
</li>
</li>
        <li class="navbar-item">
  <a href="Contact.php" class="navbar-link" data-nav-link>Sign Up</a>
</li>

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

<body>
<section class="section " id="home" aria-label="home">
       
       <section class="contact-section">

<div class="dashboard-container">
        <h1>User Dashboard</h1>
        <?php
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '<div class="dashboard-message">' . $msg . '</div>';
            }
        }
        ?>
        <div class="dashboard-profile">
            <h2>Edit Profile</h2>
            <form action="dashboard.php" method="post">
                <div class="dashboard-form-group">
                    <label for="dashboard-firstname">First Name:</label>
                    <input type="text" id="dashboard-firstname" name="firstname" value="<?php echo $user_data['firstname']; ?>" required>
                </div>
                <div class="dashboard-form-group">
                    <label for="dashboard-surname">Surname:</label>
                    <input type="text" id="dashboard-surname" name="surname" value="<?php echo $user_data['surname']; ?>" required>
                </div>
                <div class="dashboard-form-group">
                    <label for="dashboard-email">Email:</label>
                    <input type="email" id="dashboard-email" name="email" value="<?php echo $user_data['email']; ?>" required>
                </div>
                <button type="submit" name="update_profile" class="login-button">Update Profile</button>
            </form>
        </div>
        <div class="dashboard-logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    </section></section>
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