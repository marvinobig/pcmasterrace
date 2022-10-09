<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../pages/login.page.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main>
        <form method="post" action="../functions/createUser.function.php">
            <fieldset>
                <legend>Settings</legend>

                <label for="username">
                    Username
                    <input type="text" name="username" size="30" maxlength="30" placeholder="Enter Username"
                        id="username" value=<?=$_SESSION["username"]?> disabled />
                </label>
                <label for="email">
                    Email
                    <input type="email" name="email" size="30" maxlength="30" placeholder="Enter Email" id="email"
                        value=<?=$_SESSION["email"]?> disabled />
                </label>
                <label for="password">
                    Password
                    <input pattern="[a-z][A-Z][0-9]{5+}" name="password" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers." size="30"
                        maxlength="30" placeholder="Enter Password" id="password" value=<?=$_SESSION["password"]?>
                        disabled />
                    <a href="#">
                        <button type="button">Change</button>
                    </a>
                </label>
            </fieldset>
            <div>
                <a href="#">
                    <button type="submit">Update</button>
                </a>
            </div>
        </form>
        <div>
            <a href="#">
                <button type="submit">Delete Account</button>
            </a>
        </div>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>