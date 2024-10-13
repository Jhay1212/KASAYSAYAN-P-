<?php
include __DIR__.'\\..\\UTILS\\session_check.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIVIA & FACTS</title>
    <link rel="stylesheet" href="../TRIVIA & FACTS/trivfac-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Sidebar on the Right -->
    <div id="sidebar" class="sidebar">

    <div class="user-info">
    <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon profile-pic" id="userIcon">
        
        <span class="username"><?php echo $_SESSION['username'] ?></span>
    </div>

        <a href="../HOME1/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Games</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
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

    
    <div class="container">
        <h1 style="text-align: center;">Trivia & Facts</h1>
        <div class="image-container">
            <img src="../PICS/hanni.jpg" alt="Trivia Image" class="trivia-image"> <!-- Set initial image -->
        </div>
        <div class="trivia-container">
        <p id="trivia-text" class="fade-in"><?php echo $_SESSION['username']; ?></p>
    </div>
        <div class="buttons">
            <button id="back-btn" class="nav-button">Back</button>
            <button id="next-btn" class="nav-button">Next</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>
    <script src="../TRIVIA & FACTS/trivfac-js.js"></script>
</body>
</html>