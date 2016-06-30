<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sing Up</title>
        <style>
            label{
                width:100px;
                float:left;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['error']['name'])) {
            echo '<p>' . $_SESSION['error']['name'] . '</p>';
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['error']['email'])) {
            echo '<p>' . $_SESSION['error']['email'] . '</p>';
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['error']['phone'])) {
            echo '<p>' . $_SESSION['error']['phone'] . '</p>';
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['error']['occupation'])) {
            echo '<p>' . $_SESSION['error']['phone'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <div class="signup_form">
            <form action="register.php" method="post" >
                <p>
                    <label for="name">Name:</label>
                    <input name="name" type="text" id="username" size="30"/>
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input name="email" type="text" id="email" size="30"/>
                </p>
                <p>
                    <label for="phone">Phone:</label>
                    <input name="phone" type="text" id="phone" size="30"/>
                </p>
                <p>
                    <label for="occupation">Occupation:</label>
                    <input name="occupation" type="text" id="occupation" size="30"/>
                </p>
                <p>
                    <input name="submit" type="submit" value="Sign Up"/>
                </p>
            </form>
        </div>
        <p><a href="login.php">Login</a></p>
    </body>
</html>