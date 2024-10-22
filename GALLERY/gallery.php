<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../GALLERY/gall-css.css">
</head>
<body><br><br>

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

    <!-- Main Container -->
    <div class="gallery-container">

        <h1>EARLY PHILIPPINES PERIOD</h1>

        <button class="galler">IMAGES</button>
        <button class="gallervid">VIDEOS</button><br><br><br>


        <!-- Static Gallery -->
        <div class="gallery-grid">
            <!-- Static Images with Captions -->
            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/1.webp" alt="Beautiful Sunset">
                <div class="caption">Beautiful Sunset</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/2.jfif" alt="Mountain View">
                <div class="caption">Mountain View</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/3.jfif" alt="Ocean Waves">
                <div class="caption">Ocean Waves</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/4.jfif" alt="Forest Path">
                <div class="caption">Forest Path</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/5.jfif" alt="City Lights">
                <div class="caption">City Lights</div>
            </div>

        </div>
    </div><br><br>

<!-- Main Container -->
<div class="gallery-container">

    <h1>SPANISH COLONIALISM PERIOD</h1>

    <button class="galler">IMAGES</button>
    <button class="gallervid">VIDEOS</button><br><br><br>


    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/1.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/2.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/3.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>
        
    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>FILIPINO NATIONALISM PERIOD</h1>

    <button class="galler">IMAGES</button>
    <button class="gallervid">VIDEOS</button><br><br><br>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/1.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/2.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/3.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/4.png" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/5.png" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/6.png" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/7.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>AMERICAN COLONIALISM PERIOD</h1>

    <button class="galler">IMAGES</button>
    <button class="gallervid">VIDEOS</button><br><br><br>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/1.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/2.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/3.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/4.png" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/5.png" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/6.png" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/7.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/8.png" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/9.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/10.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/11.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/12.png" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/13.png" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/15.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/16.png" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/17.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/18.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/19.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/20.png" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/21.png" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/22.png" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/23.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/24.png" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>JAPANESE OCCUPATION PERIOD</h1>

    <button class="galler">IMAGES</button>
    <button class="gallervid">VIDEOS</button><br><br><br>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/1.png" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/2.png" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/3.png" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/4.png" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/5.png" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/6.png" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/7.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/8.png" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/9.png" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/10.png" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>THE PHILIPPINE REPUBLIC PERIOD</h1>

    <button class="galler">IMAGES</button>
    <button class="gallervid">VIDEOS</button><br><br><br>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic0.avif" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic1.jfif" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic2.jpg" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic3.jpg" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic4.jpg" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic5.jpg" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic6.webp" alt="Snowy Peaks">
            <div class="caption">Snowy Peaks</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic7.jpg" alt="Autumn Leaves">
            <div class="caption">Autumn Leaves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic8.jpg" alt="Beautiful Sunset">
            <div class="caption">Beautiful Sunset</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic9.jpg" alt="Mountain View">
            <div class="caption">Mountain View</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic10.avif" alt="Ocean Waves">
            <div class="caption">Ocean Waves</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic11.jpg" alt="Forest Path">
            <div class="caption">Forest Path</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic12.jpg" alt="City Lights">
            <div class="caption">City Lights</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic13.webp" alt="Desert Dunes">
            <div class="caption">Desert Dunes</div>
        </div>

    </div>
</div>

 <!-- JavaScript -->
 <script src="../HOME1/home-js.js"></script>

</body>
</html>
