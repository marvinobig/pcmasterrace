<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

if (!isset($_SESSION["username"]) && !isset($_SESSION["admin"])) {
    header("Location: account.page.php");
    exit;
} else if (!boolval($_SESSION["admin"])) {
    header("Location: account.page.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main class="admin">
        <h1 class="page-title">Admin</h1>
        <div class="admin-actions">
            <a href="addProduct.page.php"><button type="button">Add Product</button></a>
        </div>

        <h2>All Available Products</h2>
        <section class="product-card-container">
            <?php foreach ($product->GetAllProducts() as $item): ?>
            <div class="product-card">
                <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                    <img src="data:image/jpeg;base64,<?=base64_encode($item["image"])?>" alt="<?=$item["name"]?>">
                    <section class="info">
                        <p><?=$item["name"]?></p>
                        <p>£<strong><?=$item["price"]?></strong></p>
                    </section>
                    <section class="Btn-container">

                        <button type="button"><a href="updateProduct.page.php?id=<?=$item["ID"]?>">Update</a></button>


                        <button type="button"><a
                                href="../functions/deleteProduct.function.php?id=<?=$item["ID"]?>">Remove</a></button>

                    </section>
                </a>
            </div>
            <?php endforeach?>
        </section>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>