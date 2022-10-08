<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";
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
        <form method="post" action="../functions/login.function.php">
            <fieldset>
                <legend>Login</legend>

                <label for="username">
                    Username
                    <input id="username" type="text" name="username" size="30" maxlength="30" required="required" />
                </label>
                <label for="password">
                    Password
                    <input id="password" type="password" name="password" size="30" maxlength="30" required="required" />
                </label>
            </fieldset>

            <p class="join">
                Not yet a member? <a href="../pages/register.page.php">You can register here</a>
            </p>
        </form>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>