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

    <main>

    </main>

    <?php include "pages/partials/footer.partial.php"?>
</body>

</html>