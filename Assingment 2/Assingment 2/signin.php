<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>Michael Mutugi - Sign In</title>
</head>
<body>

    <header>
       
    </header>

    <section-container>
       
        <form action="calisthenics.php" method="post">
            <h2>Sign In</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="verification_code">Verification Code:</label>
            <input type="text" id="verification_code" name="verification_code" required>

            <input type="submit" value="Sign In">
        </form>
    </section-container>

    <footer>
        <p>&copy; 2024 Michael Mutugi</p>
    </footer>

</body>
</html>
