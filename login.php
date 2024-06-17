<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header("Location: index.php");
    }
?>

<html>
    <head></head>

    <body>
        <h2>Login</h2>

        <form method="POST" action="./login_proccess.php">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br>
            <br>

            <button type="submit" value="submit">LOGIN</button>
        </form>
    </body>
</html>

