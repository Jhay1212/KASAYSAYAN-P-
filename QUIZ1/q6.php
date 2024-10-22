<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../QUIZ1/q1-css.css">
    <title>QUIZ 6</title>
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

<!-- CONTENTS -->	
<div class="quiz-container">

    <!-- Question Indicator -->
<div id="question-indicator" class="question-indicator">
    <span id="answeredQuestions">1</span> / <span id="totalQuestions">0</span>
</div>
   
    <div class="question-section">
        <h2 id="question">Question will appear here</h2>
    </div>
    <div class="choices-section">
        <div class="choice-group" onclick="selectChoice(this, 0)">Choice 1</div>
        <div class="choice-group" onclick="selectChoice(this, 1)">Choice 2</div>
        <div class="choice-group" onclick="selectChoice(this, 2)">Choice 3</div>
        <div class="choice-group" onclick="selectChoice(this, 3)">Choice 4</div>
    </div>
    <div class="buttons">
        <button id="proceedButton" onclick="nextQuestion()">Proceed</button>
        <button id="submitButton" style="display: none;" onclick="submitQuiz()">Submit</button>
    </div>
</div>

<!-- Result Modal -->
<div id="resultModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="balloon-container">
            <div class="balloon" id="balloon1"></div>
            <div class="balloon" id="balloon2"></div>
            <div class="balloon" id="balloon3"></div>
            <div class="balloon" id="balloon4"></div>
            <div class="balloon" id="balloon5"></div>
        </div>
        <h2 id="resultMessage"></h2>
        <h3>Your final score is: <span id="finalScore"></span></h3>
        <button onclick="goHome()" id="submitButton1">FINISH</button>
    </div>
</div>

 <!-- Audio element -->
 <audio id="sound" src="sound.mp3"></audio>

 <!-- Button for sound control -->
 <button id="soundButton">🔊</button>

<script src="../QUIZ1/q6-js.js"></script>
<script src="../HOME1/home-js.js"></script>

</body>
</html>
