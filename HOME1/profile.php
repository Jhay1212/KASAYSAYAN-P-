<?php
session_start();

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

// Ensure user is logged in and an image file was uploaded
if (isset($_SESSION['user_id']) && isset($_FILES['profilePicture'])) {
    $userId = $_SESSION['user_id'];
    $file = $_FILES['profilePicture'];
    
    // Directory to save the uploaded image
    $uploadDir = 'uploads/profile_pictures/'.$_SESSION['username'].'/';
    
    // Create the directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            die('Failed to create upload directory.');
        }
    }
    
    // Validate file type (allowing only images)
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
        die('Invalid file type. Only JPG, PNG, and GIF are allowed.');
    }

    // Validate file size (e.g., limit to 2MB)
    $maxFileSize = 2 * 1024 * 1024;
    if ($file['size'] > $maxFileSize) {
        die('File size exceeds the maximum allowed size of 2MB.');
    }
    
    // Sanitize the file name and create a unique name for the file
    $fileName = uniqid() . '_' . preg_replace("/[^a-zA-Z0-9\._-]/", "", basename($file['name']));
    $uploadPath = $uploadDir . $fileName;
    
    // Move the uploaded file to the designated directory
    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        // Update the user's profile picture in the database
        $stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
        $stmt->bind_param("si", $uploadPath, $userId);
        
        if ($stmt->execute()) {
            echo 'Profile picture updated successfully.';
            header('Location: home.php');
        } else {
            echo 'Failed to update profile picture in the database.';
        }
        
        $stmt->close();
    } else {
        echo 'Failed to upload the profile picture.';
    }
} else {
    echo __DIR__ . '/uploads/guest/user.jpg';
}

// Update the session path
if (isset($_SESSION['username'])) {
    $_SESSION['path'] = $uploadPath;
} else {
    $_SESSION['path'] = 'uploads/guest/user.jpg';
}

echo json_encode($_SESSION['path']);

$conn->close();
?>
