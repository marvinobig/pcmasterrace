<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main>
        <h1 class="page-title">Product Page</h1>
        <section class="product-card-container">
            <?php foreach ($product->GetAllProducts() as $item): ?>
            <div class="product-card">
                <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                    <img src=" <?=$item["image"]?>" alt="<?=$item["name"]?>">
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