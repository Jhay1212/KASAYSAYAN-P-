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

if (isset($_SESSION['username'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    echo '<script>alert("Welcome, ' . $_SESSION['username'] .$_SESSION['user_id'] . '!");</script>';
} else {
    echo '<script>alert("Username is not set!");</script>';
    $_SESSION['username'] = "GUEST";
    $username = "GUEST";
    $user_id = 0;
}

$sql = "SELECT * FROM bookmark WHERE user_id = '$_SESSION[user_id]'";
$count = "SELECT COUNT(*) as total FROM bookmark";
$count_res = $conn->query($sql);
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../BOOKMARK/bookmark-css.css">
    <title>BOOKMARK</title>
</head>

<body>
 

<!-- Sidebar on the Right -->
<div id="sidebar" class="sidebar">

    <!-- User Info Section -->
    <div class="user-info">
        <img src="../PICS/user.jpg" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']  ?></span>
    </div>

    <a href="../HOME1/home.php"><i class="fas fa-home"></i> Home</a>
    <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
    <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Games</a>
    <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
    <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
    <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
    <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
    <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Navbar Section -->
<nav class="navbar">
    <!-- Sidebar Toggle Button -->
    <div class="navbar-left">
        <!-- Website Logo and Name -->
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>

    <!-- Search and Info Section -->
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search...">
        <a href="#" class="info-icon">ℹ️</a>
    </div>
</nav>

<!-- CONTENTS -->
    <main id="mainContent">
    <section class="content-section">
        <h2>Bookmarks</h2>

        <div class="square-container">

        <?php 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Get the first word of the title
        $title = htmlspecialchars($row['title']);
        $firstWord = explode(' ', $title)[0]; // Split the title by spaces and get the first word
        
        // Add the first word to the data-title attribute
        echo('<div class="square" data-title="'.htmlspecialchars($firstWord).'">');
        echo('<img src="../PICS/bookmark.svg" alt="Bookmark Image">');
        echo('<h3 class="pamagat">'.htmlspecialchars($row['title']).'</h3>');
        echo('</div>');
    }
}
?>
            <!-- Box 1 -->
    </div>
    </section>

    <!-- Bookmark Preview Section -->
    <section id="bookmarkPreview" class="preview-section">
        <h2>Bookmark Preview</h2>
        <div id="previewContent">
            <p class="desc">Select a bookmark to see details here.</p>
        </div>
    </section>
</main>

<script src="../HOME1/home-js.js"></script>
<script src="./bookmark.js"></script>


</body>
</html>
