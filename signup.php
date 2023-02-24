<?php
    // import header.php
    include_once 'header.php';
?>

    <section class="section-default">
            <h1>Sign Up</h1>
            
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="username" placeholder="Username"><br><br>
                <input type="text" name="email" placeholder="E-mail"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="password" name="password2" placeholder="Confirm password"><br><br>
                <button type="submit" name="signup-submit">Signup</button>
            </form>
            <a href="reset-password.php">Forgot Your Password?</a>
    </section>
   
<?php
        // import footer.php
        include_once 'footer.php';
?>