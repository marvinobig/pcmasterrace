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
        <div>
            <h1>Settings</h1>
            <p>Username: <?=$_SESSION["username"]?></p>
            <p>Email: <?=$_SESSION["email"]?></p>
        </div>
        <form method="post" action="../functions/updatePass.function.php">
            <fieldset>
                <legend>Change Password</legend>
                <label for="password">
                    Old Password
                    <input name="password" type="password" placeholder="Enter Password" id="password"
                        value=<?=$_SESSION["password"]?> disabled />
                </label>
                <label for="newPass">
                    New Password
                    <input pattern="[a-z][A-Z][0-9]{5+}" name="newPass" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers."
                        maxlength="30" placeholder="Enter New Password" id="newPass" />
                </label>
                <button type="submit">Update</button>
            </fieldset>
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