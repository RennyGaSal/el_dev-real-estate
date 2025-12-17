<?php
  declare(strict_types=1);
  require 'includes/functions.php';

  includeTemplate('header');
?>

    <main class="container section">
        <h1>About Us</h1>

        <div class="content-about">
            <div class="image">
                <picture>
                    <source srcset="build/img/about-us.webp" type="image/webp">
                    <source srcset="build/img/about-us.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/about-us.jpg" alt="About Us Image">
                </picture>
            </div>
            
            <div class="text-about">
                <blockquote>
                    27 Years of Experience
                </blockquote>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod.</p>
            </div>
        </div>
    </main>

    <section class="container section">
        <h1>More about us</h1>

        <div class="about-icons">
            <div class="icon">
                <img src="build/img/icon1.svg" alt="Security Icon" loading="lazy">
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod.</p>
            </div>
            <div class="icon">
                <img src="build/img/icon2.svg" alt="Price Icon" loading="lazy">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod.</p>
            </div>
            <div class="icon">
                <img src="build/img/icon3.svg" alt="Time Icon" loading="lazy">
                <h3>Time</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl nisi consectetur nisi, euismod aliquam nisl nisi euismod.</p>
            </div>
        </div>
    </section>
    
<?php includeTemplate('footer') ?>