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

<style>

    .gradient-text {
        text-align: center;

    }

    main {
        margin-top: 4rem;
    }
    
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


<body>

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

<!-- CONTENTS -->
    <main id="mainContent">

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
</div>

<p id="result"></p>
</main>

<script src="./quest.js"></script>
<script src="../HOME1/home-js.js"></script>
</body>
</html>