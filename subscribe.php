<?php
// Assuming you have a database connection
require 'conn.php';

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];

    // Check if the email is already subscribed
    $check_query = mysqli_query($conn, "SELECT * FROM newsletter_subscriptions WHERE email = '$email'");
    if (mysqli_num_rows($check_query) > 0) {
        echo "Email already subscribed.";
    } else {
        // If not subscribed, insert the email into the database
        $insert_query = mysqli_query($conn, "INSERT INTO newsletter_subscriptions (email) VALUES ('$email')");
        if ($insert_query) {
            echo "Subscription successful!";
        } else {
            echo "Subscription failed. Please try again later.";
        }
    }
}
?>
