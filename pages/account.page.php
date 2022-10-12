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
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main class="user-account">
        <section class="user-welcome">
            <h1 class="page-title">Welcome, <?=$_SESSION["username"]?></h1>
            <img src="data:image/jpeg;base64,<?=base64_encode($_SESSION["image"])?>" alt="<?=$_SESSION["username"]?>">
            <div class="account-actions">
                <a href="userSettings.page.php"><button type="button">Settings</button></a>
                <?php if (isset($_SESSION["admin"]) && boolval($_SESSION["admin"])): ?>
                <a href="admin.page.php">
                    <button type="button">Admin</button>
                </a>
                <?php endif?>
                <a href="../functions/logout.function.php">
                    <button type="button">Logout</button>
                </a>
            </div>
        </section>

        <h3>Items in Basket</h3>
        <section class="product-card-container">
            <?php foreach ($basket->LoadBasket($username) as $item): ?>
            <div class="product-card">
                <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                    <img src="data:image/jpeg;base64,<?=base64_encode($item["image"])?>" alt="<?=$item["name"]?>">
                    <section class="info">
                        <p><?=$item["name"]?></p>
                        <p>£<strong><?=$item["price"]?></strong></p>
                    </section>
                    <section class="addBtn-container">
                        <a href="../functions/addToBasket.function.php?id=<?=$item["ID"]?>">
                            <button type="button">Add</button>
                        </a>
                    </section>
                </a>
            </div>
            <?php endforeach?>
        </section>

    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>