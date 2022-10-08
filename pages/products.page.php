<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

$product = new Product($pdo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Master Race</title>
    <link rel="stylesheet" href="../static/css/reset.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="../static/js/script.js" defer></script>
</head>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <h1>Product Page</h1>
    <main>
        <?php foreach ($product->GetAllProducts() as $item): ?>
        <div>
            <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                <p><?=$item["name"]?></p>
                <img src="<?=$item["image"]?>" alt="<?=$item["name"]?>">
                <p><?=$item["price"]?></p>
            </a>
        </div>
        <?php endforeach?>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>