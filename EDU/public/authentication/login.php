<?php

require "session_messages.php";
include "includes/header.php";

?>

<section id="login">
    <div class="row">
        <div class="col col__1"></div>
        <div class="col col__2">
            <h1>Log In</h1>
            <img src="<?= ROOT ?>/assets/images/logo-black.png" alt="" class="logo">
            <?php 
                display_message();
            ?>
            <form action="proc__login" method="post">
                <input type="email" name="email" placeholder="Email ID">
                <input type="password" name="password" placeholder="Password">
                <button class="btn btn-primary mb-4" type="submit">Login</button>
                <p>Don't have an account? <a href="index?page=signup">Sign up</a> here.</p>
            </form>
        </div>
    </div>
</section>

<?php

include "includes/footer.php"

    ?>