<?php

require "session_messages.php";
include "includes/header.php";

?>

<section id="signup">
    <div class="row">
        <div class="col col__1"></div>
        <div class="col col__2">
            <h1>Sign up</h1>
            <img src="<?= ROOT ?>/assets/images/logo-black.png" alt="" class="logo">
            <?php

            display_message();

            ?>
            <form action="proc__signup" method="post">
                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                <input type="text" class="form-control" name="lastname" placeholder="Last name">
                <input type="email" class="form-control" name="email" placeholder="Email ID">
                <select class="form-control mb-4" name="gender" id="">
                    <option class="muted disabled">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm password">
                <button class="btn btn-primary mb-4" type="submit" name="signup">Sign up</button>
                <p>Already have an account? <a href="index?page=login">Login</a> here.</p>
            </form>
        </div>
    </div>
</section>

<?php

include "includes/footer.php"

?>