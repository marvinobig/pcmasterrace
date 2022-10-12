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
    <main>
        <form action="../functions/addProduct.function.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Add a Product</legend>

                <label for="name">
                    Name
                    <input type="text" name="name" maxlength="30" placeholder="Enter Product Name" id="name" required />
                </label>
                <label for="price">
                    Price
                    <input type="number" name="price" maxlength="30" step="0.01" placeholder="Enter Product Price"
                        id="price" required />
                </label>
                <label for="Description">
                    <textarea name="description" id="description" placeholder="Enter Product Description"></textarea>
                </label>
                <label for="image">
                    Image
                    <input name="image" type="file" maxlength="30" placeholder="Upload Product Image" id="image"
                        accept="image/png, image/jpeg" required />
                </label>
                <button type="submit">Add</button>
            </fieldset>
        </form>

    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>