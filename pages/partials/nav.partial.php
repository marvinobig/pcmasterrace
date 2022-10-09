<nav class="nav">
    <a class="nav-links" href="../../index.php">Home</a>

    <div class="nav-right">
        <a class="nav-links" href="products.page.php">Products</a>

        <?php if (!isset($_SESSION["username"])): ?>
        <a class="nav-links" href="login.page.php">Login</a>
        <a class="nav-links" href="register.page.php">Register</a>

        <?php else: ?>
        <a class="nav-links" href="account.page.php">Account</a>
        <a class="nav-links" href="basket.page.php">Basket</a>
        <?php endif?>
    </div>
</nav>