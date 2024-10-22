<?php 
include __DIR__."\\..\\UTILS\\session_check.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME 2: TRUE OR FALSE</title>
    <link rel="stylesheet" href="../GAMES/game2-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

     <!-- Sidebar -->
<aside class="sidebar">
    <div class="user-info">
        <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']?></span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/home.php" class="active"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>
<!-- Sidebar -->
<div id="sidebar2" class="sidebar2">
    <a href="#"><strong>About<br></strong>

        This website is an online learning module about Philippine history, offering lessons, quizzes, and fun games to make learning enjoyable. Its goal is to help users understand and appreciate the rich history of the Philippines in an engaging and easy way.

    </a>
    <a href="#"><strong>Developers<br></strong>

        <img class="devpic" src="../PICS/jok1.jpg"><br>
        Joan Hermo<br><br><br>

        <img class="devpic" src="../PICS/danni.jpg"><br>
        Allen Candelaria<br><br><br>

        <img class="devpic" src="../PICS/jok3.jpg"><br>
        Jose Rivera<br><br><br>

        <img class="devpic" src="../PICS/jok2.jpg"><br>
        Mikas Viscayno

    </a>
  </div>

   <!-- Navbar -->
     <header class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
                <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
            </div>
        </div>
        <div class="navbar-right">
            <input type="text" class="search-bar" placeholder="Search lessons...">
            <div id="toggleIcon" class="icon" onclick="toggleSidebar()">
            <a href="#" class="info-icon"><i class="fas fa-info-circle"></i></a>
        </div>
        </div>
    </header>

    <h1>TRUE OR FALSE</h1>
    <div class="container">

        
 
<!-- Progress Indicator -->
<div id="progress" class="progress-indicator">Answered: 0 / 5</div>

        <!-- Question Section -->
        <div class="quiz-container">
            <div id="question" class="question"></div>

            <!-- Buttons for True/False -->
            <div class="button-container">
                <button id="trueBtn" class="btn">True</button>
                <button id="falseBtn" class="btn">False</button>
            </div>

            <!-- Score Display -->
            <div class="score-container">
                Score: <span id="score">0</span> / <span id="total"></span>
            </div>

            <!-- Final Result Message -->
            <div id="resultMessage" class="result-message"></div>

           <!-- Try Again / Exit Buttons -->
<div id="endButtons" class="end-buttons">
    <button id="tryAgainBtn" class="btn hidden">Try Again</button>
    <button id="exitBtn" class="btn hidden">Exit</button>
</div>

<!-- Exit button below the game -->
<div class="exit-container">
    <button id="exitGameBtn" class="btn">Exit</button>
</div>

        </div>
    </div>

     <!-- Audio element -->
     <audio id="sound" src="sound.mp3"></audio>

     <!-- Button for sound control -->
     <button id="soundButton">🔊</button>

    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>
    <script src="../GAMES/game2-js.js"></script>
</body>
</html>