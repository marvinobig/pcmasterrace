<?php
$root = $_SERVER["DOCUMENT_ROOT"];
require "$root/core/bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php require "$root/pages/partials/head.partial.php";?>

<body>
    <?php require "$root/pages/partials/nav.partial.php";?>
    <main>
        <form method="post" action="../functions/createUser.function.php">
            <fieldset>
                <legend>Registration</legend>

                <label for="username">
                    Username
                    <input type="text" name="username" size="30" maxlength="30" placeholder="Enter Username"
                        id="username" required />
                </label>
                <label for="email">
                    Email
                    <input type="email" name="email" size="30" maxlength="30" placeholder="Enter Email" id="email"
                        required />
                </label>
                <label for="password">
                    Password
                    <input pattern="[a-z][A-Z][0-9]{5+}" name="password" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers." size="30"
                        maxlength="30" placeholder="Enter Password" id="password" required />
                </label>
                <label for="conPassword">
                    Confirm Password
                    <input pattern="[a-z][A-Z][0-9]{5+}" name="password" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers." size="30"
                        maxlength="30" placeholder="Enter Password" id="conPassword" required />
                </label>
                <button type="submit">Register</button>
            </fieldset>
        </form>
        <div>
            <p>
                By creating an account you agree to our <a href="#">Terms & Privacy</a>
            </p>
            <p class="login">
                Already a member? <a href="../pages/login.page.php">You can login here</a>
            </p>
        </div>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>