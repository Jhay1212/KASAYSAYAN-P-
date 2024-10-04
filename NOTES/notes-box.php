<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../NOTES/notesbx-css.css">
    <title>NOTES</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

<!-- Sidebar on the Right -->
<div id="sidebar" class="sidebar">
    <div class="user-info">
        <img src="../PICS/user.jpg" alt="User Icon" class="user-icon">
        <span class="username">John Doe</span>
    </div>
    <a href="../HOME1/home.php"><i class="fas fa-home"></i> Home</a>
    <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
    <a href="../GAMES/games.html"><i class="fas fa-gamepad"></i> Games</a>
    <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
    <a href="../GALLERY/gallery.html"><i class="fas fa-image"></i> Gallery</a>
    <a href="../QUIZ1/quiz1.html"><i class="fas fa-question-circle"></i> Quiz</a>
    <a href="../TRIVIA & FACTS/trivfac.html"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
    <a href="../LANDING PAGE/landpage.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Navbar Section -->
<nav class="navbar">
    <div class="navbar-left">
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search...">
        <a href="#" class="info-icon">ℹ️</a>
    </div>
</nav>

<!-- CONTENTS -->	
<main id="mainContent">
    <section class="content-section">
        <h2>Notes</h2>

        <div class="square-container">
            <?php
if (isset($_SESSION['notes']) && count($_SESSION['notes']) > 0) {
    $notes = $_SESSION['notes'];

    // Loop through each note and create a square div
    foreach ($notes as $row) {
        echo '<div class="square">';
        echo '<div class="inner-box">';
        echo '<p>' . htmlspecialchars($row['note_text']) . '</p>';
        echo '<small>Created on: ' . htmlspecialchars($row['created_at']) . '</small>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No notes found.</p>';
}
?>

            ?>
        </div>
    </section>
</main>

<script src="../HOME1/home-js.js"></script>


</body>
</html>
