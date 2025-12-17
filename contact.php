<?php
  declare(strict_types=1);
  require 'includes/functions.php';

  includeTemplate('header');
?>

    <main class="container section">
        <h1>Contact Us</h1>

        <picture>
            <source srcset="build/img/highlight3.webp" type="image/webp">
            <source srcset="build/img/highlight3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/highlight3.jpg" alt="Contact Us Image">
        </picture>

        <h2>Fill out the contact form</h2>
        <form action="" class="form">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="name">Name</label>
                <input type="text" placeholder="Your Name" id="name">

                <label for="email">Email</label>
                <input type="email" placeholder="Your Email" id="email">

                <label for="phone">Phone</label>
                <input type="tel" placeholder="Your Phone" id="phone">

                <label for="message">Message</label>
                <textarea id="message"></textarea>
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>

                <label for="option">Interested in</label>
                <select id="option">
                    <option value="" disabled selected>-- Select --</option>
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
                </select>

                <label for="budget">Price or Budget</label>
                <input type="number" placeholder="Your Price or Budget" id="budget">
            </fieldset>

            <fieldset>
                <legend>Contact Preference</legend>

                <p>How do you want to be contacted?</p>

                <div class="contact-method">
                    <label for="contact-phone">Phone</label>
                    <input name="contact" type="radio" value="phone" id="contact-phone">

                    <label for="contact-email">Email</label>
                    <input name="contact" type="radio" value="email" id="contact-email">
                </div>

                <div id="phone-date-time" class="hidden">
                    <label for="date">Date</label>
                    <input type="date" id="date">

                    <label for="time">Time</label>
                    <input type="time" id="time" min="09:00" max="18:00">
                </div>
            </fieldset>

            <input type="submit" value="Submit" class="button-green-block">
        </form>
    </main>
    
<?php includeTemplate('footer') ?>