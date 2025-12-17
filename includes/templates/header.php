<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $intro ? 'intro' : ''; ?>">
        <div class="container container-header">
            <div class="bar">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Real Estate Logo">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/bars.svg" alt="Mobile Menu Icon" />
                </div>

                <div class="right">
                    <img
                        src="/build/img/dark-mode.svg"
                        alt="Dark Mode Icon"
                        class="dark-mode-button"
                    />
                </div>

                <nav class="nav">
                    <a href="about.php" class="header-link">About Us</a>
                    <a href="listings.php" class="header-link">Listings</a>
                    <a href="blog.php" class="header-link">Blog</a>
                    <a href="contact.php" class="header-link">Contact</a>
                </nav>

            </div> <!--.bar-->
            
        </div> <!--.container-->
    </header>