<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
        <script type="text/javascript" src="scripts/toggle.js"></script>
    </head>
    <header>
        <ul class="navbar">
            <li class="li"><a href="index.php"><img src="images/account.png" class="account" alt="Account Pic"></a></li>
            <li class="li"><a href="profile.php"><img src="images/faceprofile.png" class="account" alt="Face Profile"></a></li>
        </ul>
        <img src="images/scoutlogo.png" class="logo" alt="Scout Logo">
    </header>
    <body>
        <div class = "rect">
            <div id="myDIV">
                <button class="button" onclick="toggle()">Current</button>
                <button class="button" onclick="toggle2()">Past Alerts</button>
            </div>
        <div id="past">
            <div class="list-type1">
            <ul>
                <p>Past:</p>
                <li><a>John Smith for PHP</a></li>
                <li><a>Jane Doe for Physics</a></li>
                <li><a>Jason Li for Calculus</a></li>
            </ul>
            </div>
        </div>
        <div id="current">
            <div class="list-type1">
            <ul>
                <p>Current:</p>
                <li class="none"><img src="images/alert.png" onclick="showDiv()" class="alert" alt="Alert Button"><a class="curr">Samik Shrotriya needs help!</a></li>
            </ul>
            </div>
        </div>
        <br><br><br><br>
        <!-- <a class="a" href="profile.php">Request Help</a> -->
        </div>
        <div class="rect2">
        <div id="hidden">
            <div class="p">Name: <u>Samik Shrotriya</u></div>
            <div class="p">Topic: <u>CSS</u></div>
            <div class="p">Location: <u>Phillips 223</u></div>
            <div class="p">Questions? <u>How do you style a button using CSS?</u></div>
            <button class="button" onclick="showDiv2()" id="card">Chat</button>
        </div>
    </div>
        <div id="hidden2">
            <form onsubmit="return false" class="form" action="index.php" method="post">
                <h1 class="find">Let's Meet Up</h1>
                <?php
                echo "<h1>".$message."</h1>";
                ?>
                <div class="container">
                    Hi, I'm on my way!
                    <span class="time-right">11:00</span>
                </div>
                <div class="container darker">
                    Great! I'll see you soon.
                    <span class="time-right">11:00</span>
                </div>
                <input type="text" placeholder="Type in your message..." name="message" required>
                <button type="submit" name="send" class="button" id="card2">Send</button>
            </form>
        </div>

<?php if (isset($_POST['send'])) {
    $message = trim(filter_var(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    var_dump($message);
}
?>

    <script>
    var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("button");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}</script>
    </body>
</html>