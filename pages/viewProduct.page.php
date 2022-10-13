<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

$id = $_GET["id"];
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>

    <main class="view-product">
        <?php foreach ($product->GetProductById($id) as $item): ?>
        <img src="data:image/jpeg;base64,<?=base64_encode($item["image"])?>" alt="<?=$item["name"]?>"
            class="product-img">
        <h2><?=$item["name"]?></h2>
        <p>£<?=$item["price"]?></p>
        <h3>Description</h3>
        <p><?=$item["description"]?></p>
        <a href="../functions/addToBasket.function.php?id=<?=$item['ID']?>">
            <button type="button">
                Add to basket
            </button>
        </a>
        <?php endforeach?>
    </main>

    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>