<?php
include("checklogin.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moinuls Website</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="cardText.css">
    <script type="text/javascript" src="alerts.js"></script>
</head>
<body>
<div>
    <ul>
        <li><a class="active" href="Home.php">Home</a></li>
        <li><a href="author.php">Author</a></li>
        <?php if ($_SESSION['username']) {
            echo "<li><a href='index.php'>Your Profile</a></li>
                  <li class='floatRight'><a href='logout.php'>Log out</a></li>";
        }
        ?>
        <?php if ($_SESSION['username']) {
            echo "<li class='dropdown'>
            <a href='javascrip:void(0)' class='dropbtn'>Forum</a>
            <div class='dropdown-content'>
                <a href='question.php'>New Question</a>
                <a href='main_forum.php'>Questions</a>
                <a href='#'>Something</a>
            </div>
        </li>";
        }
        ?>
        <?php if (!$_SESSION['username']) {
            echo "<li class='dropdown'>
            <a href='javascrip:void(0)' class='dropbtn'>Forum</a>
            <div class='dropdown-content'>
                <a href='#' onclick='alertLogin()'>New Question</a>
                <a href='#' onclick='alertLogin()'>Questions</a>
                <a href='#'>Something</a>
            </div>
        </li>";
        }
        ?>
        <?php if (!$_SESSION['username']) {
            echo "<li class='floatRight'><a href = 'login.php' > Log in </a></li >
                  <li class='floatRight' ><a href = 'signup.php' > Sign up </a></li>";
        }
        ?>
    </ul>
</div>
<div class="header">
    <h1>HOMEPAGE
        <div class="randomanimation"></div>
    </h1>
</div>

<div class="hCard">
    <p class="subtitle">about</p>
    <p class="hText"> This website is to practice my HTML, CSS, PHP and SQL. The website is being hsoted through XAMPP,
        a free tool which
        allows you to create websites and host them locally on your computer allowing the use of PHP through phpmyadmin.
        phpmyadmin uses mySQL which uses
        standard SQL commands to create databases and its contents.</p>
</div>

<div class="hCard">
    <p class="subtitle">completed pages</p>
    <p class="hText">The current working features of this website are:
    <div class="hCardText">Sign up page
    </div>
    <div class="hCardText">Log in page
    </div>
    <div class="hCardText">Profile page
        <div class="subhCardText">Retrieves data from the database and displays</div>
    </div>
    <div class="hCardText">Log out page
    </div>
    <div class="hCardText">Author Page
    </div>
    <div class="hCardText" style="background-color: orange">Forum
    </div>
    </p>
</div>


<div class="footer">
    <ul>
        <li>@Moinul</li>
        <li style="float:right">2017</li>
    </ul>
</div>
</body>
</html>