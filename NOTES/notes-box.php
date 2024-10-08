<?php
session_start();

include_once (__DIR__ . '\\view_notes.php');

if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    echo '<script>alert("Welcome, ' . $username . ' ' . $user_id . '!");</script>';
} else {
    echo '<script>alert("Username is not set!");</script>';
    
    // Set default values if user is not logged in
    $_SESSION['username'] = "GUEST";
    $_SESSION['user_id'] = 0; // Set the user_id to 0 for guests
    $username = "GUEST";
    $user_id = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../NOTES/notesbx-css.css">
    <title>NOTES</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .square-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Each Note Square */
.square {
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

/* Hover Effect */
.square:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Inner Box */
.inner-box {
    padding: 20px;
    text-align: left;
}

.inner-box p {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #333;
    line-height: 1.6;
    flex-grow: 1;
    transform: translate(-20px, -60px);
}

/* Created At Small Text (Positioned Bottom Right) */
.inner-box small {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #888;
    align-self: flex-end;
    margin-top: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .square-container {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        padding: 10px;
    }

    .inner-box {
        padding: 15px;
    }

    .inner-box p {
        font-size: 14px;
    }

    .inner-box small {
        font-size: 11px;
    }
}

@media (max-width: 480px) {
    .square-container {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        padding: 5px;
    }

    .inner-box {
        padding: 10px;
    }

    .inner-box p {
        font-size: 12px;
    }

    .inner-box small {
        font-size: 10px;
    }
}

/* Non-Desktop View */
@media (max-width: 768px) {
    .square-container {
        display: none;
    }
}
    </style>
</head>

<body>

<!-- Sidebar on the Right -->
<div id="sidebar" class="sidebar">
    <div class="user-info">
        <img src="../PICS/user.jpg" alt="User Icon" class="user-icon">
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
    <div class="navbar-left">
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search...">
        <a href="#" class="info-icon">ℹ️</a>
    </div>
</nav>

<!-- CONTENTS -->	
<main id="mainContent">
    <section class="content-section">
        <h2>Notes</h2>

        <div class="square-container">
            <?php
if (isset($_SESSION['notes']) && count($_SESSION['notes']) > 0) {
    $notes = $_SESSION['notes'];

    // Loop through each note and create a square div
    foreach ($notes as $row) {
        echo '<div class="square">';
        echo '<div class="inner-box">';
        echo '<p>' . htmlspecialchars($row['note_text']) . '</p>'; 
        echo '<small>Created on: ' . htmlspecialchars($row['created_at']) . '</small>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p class="nonotes">No notes found.</p>';
}
?>
        </div>
    </section>
</main>

<script src="../HOME1/home-js.js"></script>


</body>
</html>
