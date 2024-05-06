<?php
// Connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // assuming no password is set
$database = "newdata"; // Specify the database name here

// Establish connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection Successful<br>";
}

// SQL query to create database
$create_db_query = "CREATE DATABASE IF NOT EXISTS $database";

// Execute database creation query
if (mysqli_query($connection, $create_db_query)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($connection) . "<br>";
}

// Select the created database
mysqli_select_db($connection, $database);

// SQL query to create tables
$sql_create_tables = "
-- Table structure for table `blog`
CREATE TABLE IF NOT EXISTS `$database`.`blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`blog_id`)
);

-- Table structure for table `newsletter_subscriptions`
CREATE TABLE IF NOT EXISTS `$database`.`newsletter_subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `subscription_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

-- Table structure for table `users`
CREATE TABLE IF NOT EXISTS `$database`.`users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

// Execute SQL query to create tables
if (mysqli_multi_query($connection, $sql_create_tables)) {
    echo "Tables created successfully<br>";
} else {
    echo "Error creating tables: " . mysqli_error($connection) . "<br>";
}

// SQL query to insert data
$sql_insert_data = "
-- Dumping data for table `blog`
INSERT INTO `$database`.`blog` (`blog_id`, `title`, `content`) VALUES
(3, 'Tips for Secure Social Media Usage', 'Here are some tips to stay safe on social media: 1. Use strong, unique passwords for each account. 2. Enable two-factor authentication. 3. Be cautious when clicking on links or attachments from unknown sources. 4. Review privacy settings regularly.');

-- Dumping data for table `newsletter_subscriptions`
INSERT INTO `$database`.`newsletter_subscriptions` (`id`, `email`, `subscription_date`) VALUES
(1, 'emai@gmail.com', '2024-04-10 17:10:03');

-- Dumping data for table `users`
INSERT INTO `$database`.`users` (`id`, `firstname`, `surname`, `email`, `password`) VALUES
(1, 'John', 'Doe', 'john@example.com', 'password123');
";

// Execute SQL query to insert data
if (mysqli_multi_query($connection, $sql_insert_data)) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . mysqli_error($connection) . "<br>";
}

// Close connection
mysqli_close($connection);
?>
