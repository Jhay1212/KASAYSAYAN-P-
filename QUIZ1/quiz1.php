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

    <script src="../HOME1/home-js.js"></script>
</body>
</html>