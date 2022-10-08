<nav>
    <a class="active" href="../../index.php">Home</a>

    <a href="products.page.php">Products</a>

    <?php if (!isset($_SESSION["username"])): ?>
    <a href="login.page.php">Login</a>
    <a href="register.page.php">Register</a>
    <?php else: ?>
    <a href="account.page.php">Account</a>
    <a href="basket.page.php">Basket</a>
    <?php endif?>
</nav>