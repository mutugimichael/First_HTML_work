<?php include("templates/header.php"); ?>
<body>

    

    <section-container>

        <form action="processes/signup_process.php" method="post">
            <h2>Sign Up</h2>
       
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign Up">
        </form>
    </section-container>

    <?php include("templates/footer.php"); ?>
</body>
</html>
