<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Quest</title>
    <link rel="stylesheet" href="./quest.css">
    <link rel="stylesheet" href="../HOME1/home-css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>



    
<!-- Table of Contents Sidebar -->
<div id="sidebar" class="sidebar">

        <!-- User Info Section -->
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
        <!-- Sidebar Toggle Button --
        <div class="navbar-left">

            Website Logo and Name -->
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


<main>
<h2 class="title gradient-text">Arrange The Events In Order</h2>

<div id="timeline-container">
    <div id="events">
        <!-- Clickable events will be dynamically generated here -->
    </div>

    <div id="dropzone" class="dropzone">
        <!-- Placeholder for clicked events -->
    </div>
</div>

<div class="center-bot">
    <button id="check-order">Check Order</button>
    <button id="reset">Reset</button>
    <p id="result"></p>
</div>

</main>

<script src="./quest.js"></script>
<script src="../HOME1/home-js.js"></script>
</body>
</html>