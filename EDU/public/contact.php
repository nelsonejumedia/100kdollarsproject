<?php

require "session__messages.php";
include "includes/header.php";
include "includes/navbar.php";

?>

<!-- inner banner -->
<div class="inner_banner layer" id="home">
    <div class="container">
        <div class="agileinfo-inner">
            <h2 class="text-center text-white">
                Contact Page
            </h2>
        </div>
    </div>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
</nav>
<!-- //breadcrumbs -->

<!-- contact -->
<section class="contact py-5">
    <div class="container py-sm-3">
        <h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us - <span>Get In Touch</span> </h3>
        <div class="address row">
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Address</h6>
                        <p> 
                            Abraka, Delta State, Nigeria.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Email</h6>
                        <a href="mailto:example@email.com"> info@educhamps.com</a>
                        <a href="mailto:example@email.com"> educhamps@gmail.com</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                        <p>+234 916 021 4795</p>
                        <p>+234 903 959 9019</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form row py-5">
            <div class="col-lg-6 contact-form">
                <form action="proc_contact" method="post">
                    <div class="fields-grid">
                        <?php
                        // Include the session messages utility
                        display_message();
                        ?>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="fullname">
                            <label>Full Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email">
                            <label>Email Address</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="tel" name="phone">
                            <label>Phone Number</label>
                            <span></span>
                        </div>
                        <div class="styled-input mt-5">
                            <textarea name="message" resize="none"></textarea>
                            <label class="text">Your Message</label>
                            <span></span>
                        </div>
                    </div>
                    <button type="submit" name="contact" class="btn btn-danger">Submit</button>
                </form>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="bg-img">
                    <div class="contact-layer">
                        <h3 class="mb-3">Contact Us</h3>
                        <p><i class="fas mr-2 fa-phone"></i> +234 916 021 4795</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.4537030029783!2d6.0997991805227585!3d5.791407116281944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104173ec60592b79%3A0xe469cf7ffb5ec853!2sInstitute%20of%20Education%20Delta%20State%20University%20Abraka!5e0!3m2!1sen!2sng!4v1718535027460!5m2!1sen!2sng"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- //contact -->

<?php

include "includes/footer.php";
include "includes/scripts.php";

?>