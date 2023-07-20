<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <style>
        #username-display {
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="username-display">
        <?php
        if (isset($_SESSION['username'])) {
            echo 'Welcome, ' . $_SESSION['username'];
        } else {
            echo 'Welcome, Guest';
        }
        ?>
    </div>
<p>Welcome to Health Pharmacy. A place where you can find all the drugs and medical
    attention you require. Health Pharmacy is here for you.
</p>
<p>What would you like to do next?</p><br>
<a href=#><<button type="button">View profile</button></a><br><br><br>
<a href=#><<button type="button">Add drugs</button></a><br><br><br>
<a href=#><<button type="button">Give prescriptions</button></a><br><br><br>
<a href=#><<button type="button">Chat with us?</button></a><br><br><br>
</body>
</html>