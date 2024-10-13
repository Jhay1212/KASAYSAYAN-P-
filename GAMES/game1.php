<?php
include __DIR__.'\\..\\UTILS\\session_check.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME 1: WHO AM I?</title>
    <link rel="stylesheet" href="../GAMES/game1-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Sidebar on the Right -->
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

    <!-- Game Section -->
    <div class="game-container">
        <div class="image-container animated-element">
            <img id="person-image" src="../PICS/GAMES PICS/game1 pics/1.png" alt="Person Image">
        </div>

        <!-- Hint -->
        <div class="hint-text animated-element">
            <p id="hint">Hint: I am known as the "Father of the Philippine Revolution" and I founded the Katipunan, the secret society that launched the revolution against Spain.
            </p>
        </div>

        <!-- Options -->
        <div class="options-container animated-element">
            <button class="option-btn" onclick="checkAnswer(0)">Albert Einstein</button>
            <button class="option-btn" onclick="checkAnswer(1)">Isaac Newton</button>
            <button class="option-btn" onclick="checkAnswer(2)">Nikola Tesla</button>
            <button class="option-btn" onclick="checkAnswer(3)">Marie Curie</button>
        </div>

        <!-- Feedback Text -->
        <div class="feedback" id="feedback"></div>

        <!-- Next Button -->
        <button id="next-btn" onclick="nextQuestion()" class="next-btn">Next</button>

        <!-- Exit Button -->
        <button id="exit-btn" onclick="exitGame()" class="exit-btn">Exit</button>
    </div>

    <!-- When game ends, show the congratulatory message -->
<div class="congrats-message" id="congrats-message">
    <h2>You've completed the game! 🎉</h2>
    <p>Great job guessing all the answers!</p>
    <button id="exit-btn" onclick="exitGame()" class="exit-btn">Exit</button>
</div>

    <!-- JavaScript -->
    <script src="../GAMES/game1-js.js"></script>
    <script src="../HOME1/home-js.js"></script>
</body>
</html>