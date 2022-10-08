<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Master Race</title>
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <script src="static/js/script.js" defer></script>
</head>

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