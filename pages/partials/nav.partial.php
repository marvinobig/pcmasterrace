<nav class="nav">
    <a class="nav-links" href="../../index.php">Home</a>

    <div class="nav-right">
        <a class="nav-links" href="products.page.php">Products</a>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                More
            </button>
            <ul class="dropdown-menu">
                <?php if (!isset($_SESSION["username"])): ?>
                <li><a class="nav-links" href="login.page.php">Login</a></li>
                <li><a class="nav-links" href="register.page.php">Register</a></li>

                <?php else: ?>
                <li><a class="nav-links" href="basket.page.php">Basket</a></li>
                <li><a class="nav-links" href="account.page.php">Account</a></li>
                <?php endif?>
            </ul>
        </div>
    </div>
</nav>