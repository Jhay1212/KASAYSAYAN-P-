<?php

session_start();

$_SESSION = array();

session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHILIPPINES HISTORY MODULE</title>
    <link rel="stylesheet" href="../LANDING PAGE/landpage-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1 class="title">Welcome to the <br>Philippines'<br> Past and Beyond</h1>
            <p class="description">An interactive platform for your learning journey</p>
            <div class="button-container">
                <a href="../HOME1/home.php" class="button enter-btn">GUEST</a>
                <a href="../LOGIN1/Login1.html" class="button login-btn">Login</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Online Module. All rights reserved.</p>
    </footer>
    <script src="../LANDING PAGE/landpage-js.js"></script>
</body>
</html>
