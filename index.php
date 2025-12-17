<?php
  declare(strict_types=1);
  require 'includes/functions.php';

  includeTemplate('header', $intro = true);
?>

    <main class="container section">
      <h1>More about us</h1>

      <div class="about-icons">
        <div class="icon">
          <img src="build/img/icon1.svg" alt="Security Icon" loading="lazy" />
          <h3>Security</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
            mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl
            nisi consectetur nisi, euismod aliquam nisl nisi euismod.
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icon2.svg" alt="Price Icon" loading="lazy" />
          <h3>Price</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
            mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl
            nisi consectetur nisi, euismod aliquam nisl nisi euismod.
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icon3.svg" alt="Time Icon" loading="lazy" />
          <h3>Time</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
            mauris quam. Nullam euismod, nisi vel consectetur interdum, nisl
            nisi consectetur nisi, euismod aliquam nisl nisi euismod.
          </p>
        </div>
      </div>
    </main>

    <section class="section container">
      <h2>Houses and Apartments for Sale</h2>

      <div class="container-listings">
        <div class="listing">
          <picture>
            <source srcset="build/img/ad1.webp" type="image/webp" />
            <source srcset="build/img/ad1.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/ad1.jpg" alt="House 1" />
          </picture>

          <div class="content-listing">
            <h3>Luxury house on the lake</h3>
            <p>
              Lake house with excellent views, luxury finishes at an excellent
              price
            </p>
            <p class="price">$1,500,000</p>

            <ul class="icons-properties">
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_wc.svg"
                  alt="WC Icon"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_bedroom.svg"
                  alt="Bedroom Icon"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_parking.svg"
                  alt="Parking Icon"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="listing.php" class="button-yellow-block">View Property</a>
          </div>
          <!--.content-listing-->
        </div>
        <!--.listing-->

        <div class="listing">
          <picture>
            <source srcset="build/img/ad2.webp" type="image/webp" />
            <source srcset="build/img/ad2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/ad2.jpg" alt="House 2" />
          </picture>

          <div class="content-listing">
            <h3>House with luxury finishes</h3>
            <p>
              Furnished house with modern design, as well as home automation
              technology
            </p>
            <p class="price">$2,000,000</p>

            <ul class="icons-properties">
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_wc.svg"
                  alt="WC Icon"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_bedroom.svg"
                  alt="Bedroom Icon"
                />
                <p>4</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_parking.svg"
                  alt="Parking Icon"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="listing.php" class="button-yellow-block">View Property</a>
          </div>
          <!--.content-listing-->
        </div>
        <!--.listing-->

        <div class="listing">
          <picture>
            <source srcset="build/img/ad3.webp" type="image/webp" />
            <source srcset="build/img/ad3.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/ad3.jpg" alt="House 3" />
          </picture>

          <div class="content-listing">
            <h3>House with pool</h3>
            <p>House with pool and luxury finishes located in the city</p>
            <p class="price">$3,000,000</p>

            <ul class="icons-properties">
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_wc.svg"
                  alt="WC Icon"
                />
                <p>4</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_bedroom.svg"
                  alt="Bedroom Icon"
                />
                <p>6</p>
              </li>
              <li>
                <img
                  class="icon"
                  loading="lazy"
                  src="build/img/icon_parking.svg"
                  alt="Parking Icon"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="listing.php" class="button-yellow-block">View Property</a>
          </div>
          <!--.content-listing-->
        </div>
        <!--.listing-->
      </div>
      <!--.container-listings-->

      <div class="align-right">
        <a href="listings.php" class="button button-green">View All</a>
      </div>
    </section>

    <section class="contact-image">
      <h2>Find your dream house</h2>
      <p>
        Fill out the contact form and an advisor will get in touch with you
        shortly
      </p>
      <a href="contact.php" class="button-yellow">Contact Us</a>
    </section>

    <div class="container section lower-section">
      <section class="blog">
        <h3>Our Blog</h3>

        <article class="entry-blog">
          <div class="image">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp" />
              <source srcset="build/img/blog1.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog1.jpg"
                alt="Blog Entry 1"
              />
            </picture>
          </div>

          <div class="entry-text">
            <a href="entry.php">
              <h4>Terrace on the roof of your house</h4>
            </a>
            <p class="meta-info">
              Written on: <span>14/09/2025</span> by: <span>Admin</span>
            </p>

            <p>
              Tips for building a terrace on the roof of your house with the
              best materials and saving money
            </p>
          </div>

          <div class="image">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog2.jpg"
                alt="Blog Entry 2"
              />
            </picture>
          </div>

          <div class="entry-text">
            <a href="entry.php">
              <h4>Guide to decorating your home</h4>
            </a>
            <p class="meta-info">
              Written on: <span>15/09/2025</span> by: <span>Admin</span>
            </p>

            <p>
              Maximize the space in your home with this guide and learn how to
              combine furniture and colors.
            </p>
          </div>
        </article>
      </section>

      <section class="testimonials">
        <h3>Testimonials</h3>

        <div class="testimonial">
          <blockquote>
            The staff was excellent, the house they offered meets all my
            expectations and the price is unbeatable.
          </blockquote>
          <p>- John Doe</p>
        </div>
      </section>
    </div>

<?php includeTemplate('footer') ?>
