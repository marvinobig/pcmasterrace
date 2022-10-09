<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";

session_start();

if (isset($_SESSION["username"])) {
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
        <form method="post" action="../functions/login.function.php">
            <fieldset>
                <legend>Login</legend>

                <label for="username">
                    Username
                    <input id="username" type="text" name="username" maxlength="30" required="required" />
                </label>
                <label for="password">
                    Password
                    <input id="password" type="password" name="password" maxlength="30" required="required" />
                </label>
                <button type="submit">Login</button>
            </fieldset>

            <p class="join">
                Not yet a member? <a href="../pages/register.page.php">You can register here</a>
            </p>
        </form>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>