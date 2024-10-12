<?php
include __DIR__.'\\..\\UTILS\\session_check.php';
echo '<script>alert($profile_path);</script>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMES</title>
    <link rel="stylesheet" href="../GAMES/games-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./baybayin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>

   <!-- Sidebar on the Right -->
   <div id="sidebar" class="sidebar">

    <!-- User Info Section -->
    <div class="user-info">
    <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon profile-pic" id="userIcon">
        
        <span class="username"><?php echo $_SESSION['username']; ?></span>
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

    <!-- Game Selection Section -->
    <div class="main-content">
        <div class="h-wrapper">
            <h1 class="gradient-text">Baybayin Key Translator</h1>
        </div>
        
        <div class="c-wrappehr">
            <textarea id="input" placeholder="Type here..." rows="10" cols="40"></textarea>
            
        </div>

        <div>
    <h3>Translated:</h3>
    <p class=" original" id="output"></p>
</div>


        
        <div class="baybayin-grid">
            <button>
                <div class="tagalog">A</div>
                <div class="baybayin">ᜀ</div>
            </button>
            <button>
                <div class="tagalog">E/I</div>
                <div class="baybayin">ᜁ</div>
            </button>
            <button>
                <div class="tagalog">O/U</div>
                <div class="baybayin">ᜂ</div>
            </button>
            <button>
                <div class="tagalog">Ka</div>
                <div class="baybayin">ᜃ</div>
            </button>
            <button>
                <div class="tagalog">Ga</div>
                <div class="baybayin">ᜄ</div>
            </button>
            <button>
                <div class="tagalog">Nga</div>
                <div class="baybayin">ᜅ</div>
            </button>
            <button>
                <div class="tagalog">Ta</div>
                <div class="baybayin">ᜆ</div>
            </button>
            <button>
                <div class="tagalog">Da</div>
                <div class="baybayin">ᜇ</div>
            </button>
            <button>
                <div class="tagalog">Na</div>
                <div class="baybayin">ᜈ</div>
            </button>
            <button>
                <div class="tagalog">Pa</div>
                <div class="baybayin">ᜉ</div>
            </button>
            <button>
                <div class="tagalog">Ba</div>
                <div class="baybayin">ᜊ</div>
            </button>
            <button>
                <div class="tagalog">Ma</div>
                <div class="baybayin">ᜋ</div>
            </button>
            <button>
                <div class="tagalog">Ya</div>
                <div class="baybayin">ᜌ</div>
            </button>
            <button>
                <div class="tagalog">La</div>
                <div class="baybayin">ᜎ</div>
            </button>
            <button>
                <div class="tagalog">Wa</div>
                <div class="baybayin">ᜏ</div>
            </button>
            <button>
                <div class="tagalog">Sa</div>
                <div class="baybayin">ᜐ</div>
            </button>
            <button>
                <div class="tagalog">Ha</div>
                <div class="baybayin">ᜑ</div>
            </button>
        </div>
      
    </div>

    <!-- JavaScript -->

    
    <script src="../HOME1/home-js.js"></script>
    <script src="./baybayin.js"></script>
</body>
</html>