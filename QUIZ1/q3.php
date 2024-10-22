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
    <title>QUIZ 3</title>

    <style>
        .sidebar {
  width: 250px;
  background-color: #FFF;
  box-shadow: 2px 0 5px var(--card-shadow);
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  padding-top: 20px;
  transition: width var(--transition-speed);
}

.sidebar .user-info {
  text-align: center;
  margin-bottom: 30px;
}

.sidebar .user-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #333333;
}

.sidebar .username {
  display: block;
  margin-top: 10px;
  font-size: 1.1rem;
  font-weight: 600;
  color: #333333;
}

.sidebar-links a {
  display: flex;
  align-items: center;
  padding: 15px 20px;
  color: #333333;
  text-decoration: none;
  font-size: 1rem;
  transition: background-color var(--transition-speed), color var(--transition-speed);
}

.sidebar-links a i {
  margin-right: 10px;
  font-size: 1.2rem;
}

.sidebar-links a:hover,
.sidebar-links a.active {
    background-color: #eeeee; 
    color: #fff; 
}

.sidebar-links a.active i {
  color: var(--secondary-color);
}
.search-bar {
  display: none;
}
.sidebar-links a:hover, .sidebar-links a.active {
    background-color: #eeeee; 
    color: #fff; 
}

</style>
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
        <span class="toggle-btn" id="openSidebar">&#9776;</span>

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

<script src="../QUIZ1/q3-js.js"></script>
<script src="../HOME1/home-js.js"></script>

</body>
</html>
