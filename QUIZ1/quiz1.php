<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../QUIZ1/quiz1-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>QUIZ TIME</title>
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
			<main id="mainContent">
    <section class="content-section">
        <h2>Quiz Time</h2>
        <div class="rectangle-container">
		
            <!-- 15 rectangle boxes -->
           <div class="rectangle">
			<a href="../QUIZ1/q1.php"> <img src="../PICS/unit 1 pics/1.webp" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q1.php">Pre- Historic Philippines</a>
    </div>
			</div>
			
            <div class="rectangle">
			<a href="../QUIZ1/q2.php"><img src="../PICS/unit 2 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q2.php">Spanish Colonialism Period</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q3.php"><img src="../PICS/unit 3 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q3.php">Period of Filipino Nationalism</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q4.php"><img src="../PICS/unit 4 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q4.php">AMERICAN PERIOD</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q5.php"><img src="../PICS/unit 5 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q5.php">JAPANESE OCCUPATION</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q6.php"><img src="../PICS/unit 6 pics/6pic0.avif" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q6.php">Philippine Independence and Early Republic</a>
    </div>
			</div>
			
				 </div>
    </section>
</main>

 <!-- Audio element -->
 <audio id="sound" src="sound.mp3"></audio>

 <!-- Button for sound control -->
 <button id="soundButton">🔊</button>

    <script src="../HOME1/home-js.js"></script>
</body>
</html>