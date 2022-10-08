<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

$id = $_GET["id"];
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

    <main>
        <?php foreach ($product->GetProductById($id) as $item): ?>
        <img src="Images/<?=$item["image"]?>">
        <h2><?=$item["name"]?></h2>
        <p>£<?=$item["price"]?></p>
        <h3>Description</h3>
        <p><?=$item["description"]?></p>
        <a href="../functions/addToBasket.function.php?id='<?=$item['ID']?>'">
            <button type="button">
                Add to basket
            </button>
        </a>
        <?php endforeach?>
    </main>

    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>