<?php
#=--- With this file would be easier to get any information on user who have logged in or any data that are stored in seesions --==#

if (($_SESSION['names'])) {
    $user_token = $_SESSION['names'];
    $sql = "SELECT * FROM names WHERE user_token = ?;";
    $stmt = mysqli_stmt_init($db_conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo ("Something is missing!");
    } else {
        mysqli_stmt_bind_param($stmt, "s", $user_token);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
    }
}
