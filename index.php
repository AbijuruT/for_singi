<?php
# Connection link
include('./server/config/conn.php');
/**
 * The following file contains all the scripts that count how many times
 * link is used to get to index page or home page
 */
include('./server/link_count.php')
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
   
    <div class="form__container">
        <?php
        /**
         * On this page am goin to show a user name and how many times link is used 
         * but this is the home page those link_count scripts must be up on the page
         * Note That this page may contain other content not this one 
         * I have used coz this was for testing purpose 
         * so include those scripts of php on home page or where 
         * you want user to be directed according to the provided link.
         */
        echo $row['user_names'] . '<br/>' . $row['link_count'];
        ?>
    </div>

</body>

</html>