<?php
    // import header.php
    include_once 'header.php';
?>

    <section class="section-default">
            <h1>Sign Up</h1>
            
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name"><br><br>
                <input type="text" name="email" placeholder="E-mail"><br><br>
                <input type="text" name="uid" placeholder="Username"><br><br>
                <input type="password" name="pwd" placeholder="Password"><br><br>
                <input type="password" name="pwdRepeat" placeholder="Confirm password"><br><br>
                <button type="submit" name="submit">Signup</button>
            </form>
    </section>
   
<?php
        // import footer.php
        include_once 'footer.php';
?>