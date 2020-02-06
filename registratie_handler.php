<!DOCTYPE html>
<html>
<head>
    <title>
        Sign Up
    </title>
</head>
    <body>
    <h1>Bit Academy Sign Up</h1>
        <form action="forum_registratie.php" method="GET">
            <?php
                foreach ($_POST as $key => $value) {
                    if ($key != "submit") {
                        echo "Jouw $key is $value.<br>";
                    }
                }
            ?>
        </form>
    </body>
</html>