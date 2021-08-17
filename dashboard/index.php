<?php
session_start();
/**
 * This is to insuer that the session is not empyt
 */
if (empty($_SESSION['names'])) {
    header("Location:../form.php?must_enter_names");
    exit();
}

include('../server/config/conn.php'); # This is a connection to db
include('../server/personal_info.php'); #include this file in order to get user information in database
include('../server/logout.php') # Logout scripts
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
    <style>
        /* This style affect only this page */
        .form {
            width: 1000px;
        }
        a{
            background-color: hsl(206, 4%, 12%);
            padding: .35rem .75rem;
            text-decoration: none;
            color: #fff;
            border-radius: .6rem;

        }
        @media screen and (max-width:765px){
            .form{
                width: 430px;
            }
        }
    </style>
</head>

<body>
    <!-- Home content -->
    <h2 class="form__title">Here is your refer link</h2>
    <div id="form-container" class="form__container">
        <form class="form">
            <!-- Show user a refer link in this box-->
            <textarea name="" id="" cols="30" rows="10">
                <?php echo ($row['refer_link']);  ?>
            </textarea>
        </form>
        <a class="" href="./?logout">Logout</a>
    </div>
    <p></p>
</body>

</html>