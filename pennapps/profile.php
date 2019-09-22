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
            <img src="images/propic.png" class="propic" alt="ProPic Placeholder"><br>
            <table>
                <tr>
                    <th>Irena Gao</th>
                </tr>
            </table>
            <table class="two">
                <tr>
                    <th>Topics:</th>
                    <td>Javascript, Arithmetic, American History</td>
                </tr>
            </table>
            <form class="rect2" action="profile.php" id="rect2" id="rect3" method="post">
                <h2>Do you need help?</h2>
                <div class="p">Name:
                <input type=text></div>
                <div class="p">Location:
                <input type=text></div>
                <div class="p">Topic:
                <input type=text></div>
                <div class="p">Question:
                <input type=text></div>
                <button type="submit" name="request" class="a">Add Issue</button>
            </form>

            <?php
                if (isset($_POST['request'])) {
                    echo"<div class='help'>Sent out a request for help!</div>";
                }
            ?>
    </body>
</html>