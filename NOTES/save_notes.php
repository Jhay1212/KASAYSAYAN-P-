<?php
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

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO notes (note_text) VALUES (?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the parameter
    $stmt->bind_param("s", $note);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Note saved successfully!";
    } else {
        echo "Error saving note: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

