<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
            <script type="text/javascript" src="scripts/toggle.js"></script>
        </head>
        <header>
            <a href="index.php"><img src="images/backbutton.png" class="back" class="def" alt="Back Button"></a><div class="bk">Back Home</p></div>
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
                <div class="p">Questions? 
                <input type=text></div>
                <button type="submit" name="request" class="a">Request Help</button>
            </form>

            <?php
                if (isset($_POST['request'])) {
                    echo"<div class='help'>Sent out a request for help!</div>";
                }
            ?>
    </body>
</html>