<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<?php require "pages/partials/head.partial.php";?>

<body>
    <nav>
        <a class="active" href="index.php">Home</a>

        <a href="pages/products.page.php">Products</a>

        <?php if (!isset($_SESSION["username"])): ?>
        <a href="pages/login.page.php">Login</a>
        <a href="pages/register.page.php">Register</a>
        <?php else: ?>
        <a href="pages/account.page.php">Account</a>
        <a href="pages/basket.page.php">Basket</a>
        <?php endif?>
    </nav>

    <main>

    </main>

    <?php include "pages/partials/footer.partial.php"?>
</body>

</html>