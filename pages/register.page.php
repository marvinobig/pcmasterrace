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
        <form method="post" action="../functions/createUser.function.php" id="registerForm"
            enctype="multipart/form-data">
            <fieldset>
                <legend>Registration</legend>

                <label for="username">
                    Username
                    <input type="text" name="username" maxlength="30" placeholder="Enter Username" id="username"
                        required />
                </label>
                <label for="email">
                    Email
                    <input type="email" name="email" maxlength="30" placeholder="Enter Email" id="email" required />
                </label>
                <label for="password">
                    Password
                    <input name="password" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers."
                        maxlength="30" placeholder="Enter Password" id="password" required />
                </label>
                <label for="conPassword">
                    Confirm Password
                    <input name="password" type="password"
                        title="Must be 5 digits long or over and contain no special characters or numbers."
                        maxlength="30" placeholder="Enter Password" id="conPassword" required />
                </label>
                <label for="admin">
                    Register as Admin
                    <input type="checkbox" name="admin" maxlength="30" id="admin" />
                </label>
                <label for="image">
                    Image
                    <input name="image" type="file" maxlength="30" placeholder="Upload Product Image" id="image"
                        accept="image/png, image/jpeg" required />
                </label>
                <button type="submit">Register</button>
            </fieldset>
        </form>
        <div class="user-agreements">
            <p>
                By creating an account you agree to our <a class="link" href="#">Terms & Privacy</a>
            </p>
            <p class="login">
                Already a member? <a class="link" href="../pages/login.page.php">Login here</a>
            </p>
        </div>
    </main>
    <?php include "$root/pages/partials/footer.partial.php";?>
</body>

</html>