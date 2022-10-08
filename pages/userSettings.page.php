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
                </label>
            </fieldset>
        </form>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>