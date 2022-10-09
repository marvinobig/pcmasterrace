<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../pages/login.page.php");
    exit;
}

$username = $_SESSION["username"];
?>
<html>

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>

    <main>
        <h1 class="page-title">Basket</h1>

        <section class="basket-item-container">
            <?php foreach ($basket->LoadBasket($username) as $item): ?>
            <div class="basket-item-card">
                <img src="<?=$item["image"]?>" alt="<?=$item["name"]?>">
                <div class="product-info">
                    <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                        <p><?=$item["name"]?></p>
                    </a>
                    <p>£<?=$item["price"]?></p>
                    <a href="../functions/deleteFromBasket.function.php?id=<?=$item["ID"]?>">
                        <button type="button">Remove</button>
                    </a>
                </div>
            </div>
            <?php endforeach?>
        </section>

        <section class="basket-actions-container">
            <a href="products.page.php">
                <button type="button">
                    Continue Shopping
                </button>
            </a>
            <a href="#">
                <button type="button">Checkout</button>
            </a>
        </section>
    </main>

    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>