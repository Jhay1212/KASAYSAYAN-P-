<?php

session_start();
// Establish connection to the database
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "kasaysayan"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$bisla = "SELECT COUNT(*) as user_count FROM users";
$result = $conn->query($bisla);
$user_count = $result->fetch_assoc()['user_count'];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_count;


    // Sanitize input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, send success response
            $_SESSION['id'] = $row['id'];
            $_SESION['username'] = $row['username'];
            echo "success";
            $_SESSION['login'] = true;
            exit();
        } else {
            // Password is incorrect, send error message
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User does not exist, send error message
        echo "User does not exist. Please sign up.";
    }
}

// Close database connection
$conn->close();
