<?php
  declare(strict_types=1);
  require 'includes/functions.php';

  includeTemplate('header');
?>

    <main class="container section content-center">
        <h1>Our Blog</h1>

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

          <div class="image">
            <picture>
              <source srcset="build/img/blog3.webp" type="image/webp" />
              <source srcset="build/img/blog3.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog3.jpg"
                alt="Blog Entry 3"
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

          <div class="image">
            <picture>
              <source srcset="build/img/blog4.webp" type="image/webp" />
              <source srcset="build/img/blog4.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog4.jpg"
                alt="Blog Entry 4"
              />
            </picture>
          </div>

          <div class="entry-text">
            <a href="entry.php">
              <h4>Guide to decorating your home</h4>
            </a>
            <p class="meta-info">
              Written on: <span>16/09/2025</span> by: <span>Admin</span>
            </p>

            <p>
              Maximize the space in your home with this guide and learn how to
              combine furniture and colors.
            </p>
          </div>
        </article>
    </main>
    
<?php includeTemplate('footer') ?>