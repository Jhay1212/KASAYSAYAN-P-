<?php
// session_start(); // Make sure to start the session to use $_SESSION
$servername = "localhost";
$username = "root";
$password = ""; // Your database password
$dbname = "kasaysayan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note = $_POST['note'];
    $user_id = $_SESSION['user_id']; // Retrieve user_id from session

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO notes (user_id, note_text) VALUES (?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the parameters (s = string, i = integer)
    $stmt->bind_param("is", $user_id, $note); // 'i' for user_id (assuming it's an integer), 's' for note

    // Execute the statement
    if ($stmt->execute()) {
        echo "Note saved successfully!";
    } else {
        echo "Error saving note: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
