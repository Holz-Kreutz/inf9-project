<!DOCTYPE html>
<html>
    <head>
        <meta charset="'utf-8">
        <title>log in</title>
    </head>
    <body>
        <h1>Log in:</h1>
        <form action="checkLogin.php" method="post">
            <label for="email">Email or username: </label>
            <input name="email" id="email" type="text">
            <br>
            <label for="password">Password: </label>
            <input name="password" id="password" type="password">
            <input type="submit" value="log in">
        </form>
        <form action="signin.php" method="post">
            <label for="signin">No account yet? </label>
            <input type="submit" value="sign in">
        </form>
        <form action="signin.php" method="post">
            <input type="submit" value="forgot password?">
        </form>
    </body>
</html>
