<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// Database connection (adjust with your credentials)
$servername = "localhost";
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "kasaysayan"; // Your atabase name

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check connection
if (isset($_POST['title'])) {
    $title = $conn->real_escape_string($_POST['title']);

    // SQL query to insert title into the bookmarks table'
    $sql = "INSERT INTO bookmark (title, user_id) VALUES ('$title',' $_SESSION[user_id]')";
    echo('sql: ' . $sql);
    

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Bookmark saved!"]);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  // Show SQL error if any
    }
} else {
    echo "No title provided";
}

// Close the connection
$conn->close();

