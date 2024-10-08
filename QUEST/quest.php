<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Quest</title>
    <link rel="stylesheet" href="./quest.css">
</head>


<body>



    
<!-- Table of Contents Sidebar -->
<nav id="navSidebar" class="content hidden">
			
    <ul>
    <li><label class="label1">CONTENTS</label></li><hr>
    
    <li class="unit1h">
<a class="unit1hh" href="#sbt1">UNIT 1:<br>Early Philippines Period</a>
<div class="topic-buttons1" id="tpc-btn1">
<a href="#sbt1"><button class="dropdown-btn">22,000 BCE – Pre- Historic Philippines</button></a>
<a href="#sbt2"><button class="dropdown-btn">5,000 BCE - 1,000 BCE</button></a>
<a href="#sbt3"><button class="dropdown-btn">1,000 BCE - 1000 AD</button></a>
<a href="#sbt4"><button class="dropdown-btn">900 AD - 1521 AD: Pre-colonial Philippines</button></a>
 
</div>
</li>
    
    <li>
    <a href="../HOME1/unit2.html">UNIT 2:<br>Spanish Colonialism Period</a>
     <div class="topic-buttons">
<button class="dropdown-btn">Early Spanish Expeditions</button>
<button class="dropdown-btn">Spanish Colonization</button>
<button class="dropdown-btn">Decline of Spanish Rule</button>
</div>
</li>

    <li>
    <a href="../HOME1/unit3.html">UNIT 3:<br>Period of Filipino Nationalism</a>
    <div class="topic-buttons">
<button class="dropdown-btn">The 1872 Cavite Mutiny and Gomburza Execution</button>
<button class="dropdown-btn">Rise of the Ilustrados and the Propaganda Movement</button>
<button class="dropdown-btn">The Execution of José Rizal (1896)</button>
<button class="dropdown-btn">The Katipunan and the Philippine Revolution (1896)</button>
<button class="dropdown-btn">The Pact of Biak-na-Bato and Exile of Aguinaldo (1897)</button>
<button class="dropdown-btn">Spanish-American War and Declaration of Philippine Independence (1898)</button>
<button class="dropdown-btn">Philippine-American War (1899–1913)</button>
<button class="dropdown-btn">American Colonial Rule and the Transition to Civil Government</button>
</div>
</li>

<li>
<a href="../HOME1/unit4.html">UNIT 4:<br>American Colonialism Period</a>
<div class="topic-buttons">
<button class="dropdown-btn">Prelude to war</button>
<button class="dropdown-btn">Battle of Manila Bay</button>
<button class="dropdown-btn">Aguinaldo’s Return</button>
<button class="dropdown-btn">Mock Battle</button>
<button class="dropdown-btn">America’s True Intention</button>
<button class="dropdown-btn">War of America and Filipino</button>
<button class="dropdown-btn">Insular Government</button>
<button class="dropdown-btn">Philippine Commonwealth</button>
</div>
</li>
    
    <li>
    <a href="../HOME1/unit5.html">UNIT 5:<br>Japanese Occupation Period</a>
     <div class="topic-buttons">
<button class="dropdown-btn">Bataan Death March</button>
<button class="dropdown-btn">Occupation</button>
<button class="dropdown-btn">End of Occupation</button>
</div>
</li>

    <li>
    <a href="../HOME1/unit6.html">UNIT 6:<br>Period of The Philippine Republic</a>
    <div class="topic-buttons">
<button class="dropdown-btn">Independence (1946)</button>
<button class="dropdown-btn">The Roxas Administration (1946–1948)</button>
<button class="dropdown-btn">The Quirino Administration (1948–1953)</button>
<button class="dropdown-btn">The Magsaysay Administration (1953–1957)</button>
<button class="dropdown-btn">The Garcia Administration (1957–1961)</button>
<button class="dropdown-btn">The Macapagal Administration (1961–1965)</button>
<button class="dropdown-btn">The Marcos Administration (1965–1972)</button>
<button class="dropdown-btn">Corazon Aquino Administration (1986–1992)</button>
<button class="dropdown-btn">Fidel Ramos Administration (1992–1998)</button>
<button class="dropdown-btn">Joseph Estrada Administration (1998–2001)</button>
<button class="dropdown-btn">Gloria Macapagal Arroyo Administration (2001–2010)</button>
<button class="dropdown-btn">Benigno Aquino III Administration (2010–2016)</button>
<button class="dropdown-btn">Rodrigo Duterte Administration (2016–2022)</button>
<button class="dropdown-btn">Bongbong Marcos Administration (2022–present)</button>
</div>
</li>
  
    </ul>
    
    </nav>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">

        <!-- User Info Section -->
        <div class="user-info">
            <img src="../PICS/user.jpg" alt="User Icon" class="user-icon" id="userIcon">
            <span class="username"><?php echo $_SESSION['username'] ?></span>
        </div>

        <a href="../HOME1/home.php"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Games</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php

        if (isset($_SESSION['username'])) {
            echo 'Logout';
        } else {
            echo 'Login';
        }
        ?>
        </a>
    </div>

    <!-- Navbar Section -->
    <nav class="navbar">
        <!-- Sidebar Toggle Button --
        <div class="navbar-left">

            Website Logo and Name -->
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
    <p id="result"></p>
</div>

</main>

<script src="./quest.js"></script>
<script src="../HOME1/home-js.js"></script>
</body>
</html>