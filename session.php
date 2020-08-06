<?php
@ob_start();
session_start();

?>
<html>
    <head>
        <title>Counting with the SESSION array</title>
    </head>
    <body>
        <FORM action="session.php" method="GET">
            <INPUT type="submit" name="Count" value="Count">
            <?php
            session_start();
            if (!isset($_SESSION['counter']))
                $count = 0;
            else
                $count = $_SESSION['counter'];
            $count = $count + 1;
            $_SESSION['counter'] = $count;
            echo "count is $count";
            ?>
        </FORM>

    </body>
</html>


<!-- 


if ($_SESSION['variable']!="1") {
            header("location: ../index.php"); redirect 
                session_unset(); destroys variables from current session
            session_destroy(); destroys current session
            
        }
?>

-->