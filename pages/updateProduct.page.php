<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

$id = $_GET["id"];
$singleProduct = $product->GetProductById(intval($id));

// session_start();

// if (!isset($_SESSION["username"]) && !isset($_SESSION["admin"])) {
//     header("Location: account.page.php");
//     exit;
// } else if (!boolval($_SESSION["admin"])) {
//     header("Location: account.page.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main>
        <form action="../functions/updateProduct.function.php?id=<?=$id?>" method="post">
            <fieldset>
                <legend>Update a Product</legend>

                <label for="name">
                    Name
                    <input type="text" name="name" maxlength="30" placeholder="Enter Product Name" id="name"
                        value="<?=$singleProduct[0]["name"]?>" required />
                </label>
                <label for="price">
                    Price
                    <input type="number" name="price" maxlength="30" step="0.01" placeholder="Enter Product Price"
                        id="price" value="<?=$singleProduct[0]["price"]?>" required />
                </label>
                <label for="Description">
                    <textarea name="description" id="description"
                        placeholder="Enter Product Description"><?=$singleProduct[0]["description"]?></textarea>
                </label>
                <label for="image">
                    Image
                    <input name="image" type="file" maxlength="30" placeholder="Upload Product Image" id="image"
                        value="<?=$singleProduct[0]["image"]?>" required />
                </label>
                <button type="submit">Update</button>
            </fieldset>
        </form>

    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>