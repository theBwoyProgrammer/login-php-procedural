<?php
    // import header.php
    include_once 'header.php';
?>

    <section class="section-default">
            <h1>Sign Up</h1>
            
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username/Email"><br><br>
                <input type="password" name="pwd" placeholder="Password"><br><br>
                <button type="submit" name="submit">Log In</button>
            </form>
    </section>
   
<?php
        // import footer.php
        include_once 'footer.php';
?>