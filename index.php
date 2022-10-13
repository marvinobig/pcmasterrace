<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<?php require "pages/partials/head.partial.php";?>

<body>
    <nav class="nav">
        <a class="nav-links" href="index.php">Home</a>

        <div class="nav-right">
            <a class="nav-links" href="pages/products.page.php">Products</a>

            <?php if (!isset($_SESSION["username"])): ?>
            <a class="nav-links" href="pages/login.page.php">Login</a>
            <a class="nav-links" href="pages/register.page.php">Register</a>
            <?php else: ?>
            <a class="nav-links" href="pages/basket.page.php">Basket</a>
            <a class="nav-links" href="pages/account.page.php">Account</a>
            <?php endif?>
        </div>
    </nav>

    <main class="home">
        <p class="welcome">
            Welcome to PC Master Race. Sign up and buy your pc parts now. Whatever your passion, be it PC gaming,
            professional graphics, video editing, music production, high performance compute or artificial intelligence
        </p>

        <section class="site-info">
            <div class="site-info-card">
                <h2>Satisfaction</h2>
                <p>
                    Our depth of understanding and guidance results in 100% customer satisfaction.
                </p>
            </div>
            <div class="site-info-card">
                <h2>Specification</h2>
                <p>
                    We provide Computers, Components, Gaming, Audio, Video, Graphics.
                </p>
            </div>
            <div class="site-info-card">
                <h2>Customer Service</h2>
                <p>
                    We are passionate about giving people what they need, building relationships and nurturing loyalty.
                </p>
            </div>
        </section>

    </main>

    <?php include "pages/partials/footer.partial.php"?>
</body>

</html>