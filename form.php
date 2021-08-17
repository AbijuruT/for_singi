<?php
session_start();

// files to use
include('./server/config/conn.php');
include('./server/insert.php'); # insertion scripts

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>For singi</title>
</head>

<body>
    <div id="form-container" class="form__container">
        <form action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post" class="form">
            <h2 class="form__title">Get link</h2>
            <input type="text" class="form__input" placeholder="Enter your name" name="names" autofocus>
            <button type="submit" class="button">
                Submit
            </button>
        </form>
    </div>
</body>

</html>