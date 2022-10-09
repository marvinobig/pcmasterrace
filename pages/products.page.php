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
    <h1>Product Page</h1>
    <main>
        <?php foreach ($product->GetAllProducts() as $item): ?>
        <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
            <div>
                <p><?=$item["name"]?></p>
                <img src="<?=$item["image"]?>" alt="<?=$item["name"]?>">
                <p><?=$item["price"]?></p>
                <a href="../functions/addToBasket.function.php?id=<?=$item["ID"]?>">
                    <button type="button">Add to Basket</button>
                </a>
            </div>
        </a>
        <?php endforeach?>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>