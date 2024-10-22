<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
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
  background-color: #333333;
  color: var(--secondary-color);
}

.sidebar-links a.active i {
  color: var(--secondary-color);
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

    <h1>TRUE OR FALSE</h1>
    <div class="container">
        

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
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>
    <script src="../GAMES/game2-js.js"></script>
</body>
</html>