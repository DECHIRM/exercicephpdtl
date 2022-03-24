<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
             session_start();
            if($_SESSION['username'] !== "")
            {
               $user = $_SESSION['username'];
               echo "Bonjour $user, vous êtes connecté";
            }
        ?>
    </body>
</html>