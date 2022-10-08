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
        <p>Welcome, <?=$_SESSION["username"]?></p>
        <a href="../functions/logout.function.php">
            <button type="button">Logout</button>
        </a>

        <section>
            <h3>Items in Basket</h3>
            <?php foreach ($basket->LoadBasket($username) as $item): ?>
            <div>
                <a href="viewProduct.page.php?id=<?=$item["ID"]?>">
                    <p><?=$item["name"]?></p>
                    <img src="<?=$item["image"]?>" alt="<?=$item["name"]?>">
                    <p>£<?=$item["price"]?></p>
                </a>
            </div>
            <?php endforeach?>
        </section>

        <a href="userSettings.page.php"><button type="button">Settings</button></a>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>