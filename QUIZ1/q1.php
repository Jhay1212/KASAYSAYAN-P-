<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../QUIZ1/q1-css.css">
    <title>QUIZ 1</title>
</head>
<body>

 <!-- Sidebar on the Right -->
 <div id="sidebar" class="sidebar">

    <!-- User Info Section -->
    <div class="user-info">
        <img src="../PICS/user.jpg" alt="User Icon" class="user-icon">
        <span class="username">John Doe</span>
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
<div class="quiz-container">
   
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

<script src="../QUIZ1/q1-js.js"></script>
<script src="../HOME1/home-js.js"></script>

</body>
</html>
