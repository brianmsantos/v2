<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>About Me</title>
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- this href will serve as the starting point and will point back home when needed -->
    <a class="navbar-brand" href="./index.html">
        <img src="./images/logo.png" width="125" height="125" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="./work.html">Work</a>
        <a class="nav-item nav-link" href="./about.html">About</a>
        <a class="nav-item nav-link" href="./contact.html">Contact</a>
        </div>
    </div>
    <span class="navbar-text">
        <a href="https://docs.google.com/document/d/1LYy9CE2laHRZHHysBytbEKZfAZo7tS8OB5X1bs6NJnQ/edit?usp=sharing" target="_blank"><img src="images/resume.png" class="social" height="55" width="55" alt="Resume" /></a>
        <a href="https://github.com/brianmsantos" target="_blank"><img src="images/ios-github.png" class="social" height="55" width="55" alt="GitHub" /></a>
        <a href="https://www.linkedin.com/in/sbsoftware/" target="_blank"><img src="images/ios-linkedin.png" class="social" height="55" width="55" alt="LinkedIn" /></a>
        <a href="https://stackoverflow.com/users/9221958/brianmsantos?tab=profile" target="_blank"><img src="images/ios-stackoverflow.png" height="55" width="55" class="social" alt="Stackoverflow" /></a>
    </span>
</nav>
</div>

<div class="container">
    <div class="row" id="title">
        <div class="col-12 text-center">
        <h1>Contact</h1>
        </div>
    </div>
    <div class="row" id="subtitle">
        <div class="col-12 text-center">
        <h2>Reach out if you have questions</h2>
        </div>
    </div>
</div>

<hr>
<div class="container">
        <?=$thankYou ?>

        <form method="post" action="contact.php">
            <label>Name:</label>
            <input name="sender">
    
            <label>Email address:</label>
            <input name="senderEmail">
    
            <label>Message:</label>
            <textarea rows="5" cols="20" name="message"></textarea>
    
            <input type="submit" name="submit">
        </form>
</div>



<div class="footer">Copyright &copy; Brian Santos 2018</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>