<?php
error_reporting(0);


if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confPassword = $_POST['confPassword'];

    // Check if email has been entered and is valid
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if password has been entered
    if (empty($_POST['password'])) {
        $errPassword = 'Please enter your password';
    }

    //Check if password confirmation has been entered
    if (empty($_POST['confPassword'])) {
        $errPasswordConf = 'Please confirm your password';
    }

    //Check password validation
    if ($password !== $confPassword) {
        $errPasswordConf = 'Please enter a valid password';
    }


    // If there are no errors, show this message
    if (!$errEmail && !$errPassword && !$errPasswordConf) {
        $result = '<div class="alert alert-success">Thank You for registration!</div>';
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" type="text/css" href="styles/form-styles.css">
    <title></title>

</head>
<body>

<div class="container">

    <form class="form" method="post" action="">
        <fieldset>
            <legend>create an account</legend>
        <label for="email">Email <i>*</i></label><br>
        <input type="email" class="form-control" id="email" name="email" placeholder="johnsmith@gmail.com"
               value="<?php echo htmlspecialchars($_POST['email']); ?>">
        <?php echo "<p class='text-danger'>$errEmail</p>"; ?>


        <label for="password">Choose Password <i>*</i></label><br>
        <input type="password" id="password" name="password" placeholder=""
               value="<?php echo htmlspecialchars($_POST['password']); ?>"><br>


        <label for="confPassword">Confirm Password <i>*</i></label><br>

        <input type="password" id="confPassword" name="confPassword" placeholder=""
               value="<?php echo htmlspecialchars($_POST['password']); ?>">
        <?php echo "<p class='text-danger'>$errPasswordConf</p>"; ?>


        <input id="submit" name="submit" type="submit" value="register now">


        <div class="result">

            <?php echo $result; ?>

        </div>
    </form>
    </fieldset>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->


</body>
</html>