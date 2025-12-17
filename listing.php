<?php
  declare(strict_types=1);
  require 'includes/functions.php';

  includeTemplate('header');
?>

    <main class="container section center-content">
        <h1>House with luxury finishes</h1>

        <picture>
            <source srcset="build/img/highlight1.webp" type="image/webp">
            <source srcset="build/img/highlight1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/highlight1.jpg" alt="Highlight house 1">
        </picture>

        <div class="property-summary">
            <p class="price">
                $3,000,000
            </p>

            <ul class="icons-properties">
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_wc.svg" alt="WC Icon">
                    <p>4</p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_bedroom.svg" alt="Bedroom Icon">
                    <p>6</p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icon_parking.svg" alt="Parking Icon">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, exercitationem aliquam sit pariatur tenetur minima officia obcaecati at quod quaerat, excepturi repellendus beatae ipsam voluptatem asperiores. Illo doloribus aut error.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Quisquam, quod. Quisquam, quod. Quisquam, quod.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sed aliquid impedit eligendi dignissimos vel ad facere, culpa optio velit neque veniam? Commodi neque consectetur natus possimus cum tempora vero!</p>
        </div>
    </main>
    
<?php includeTemplate('footer') ?>