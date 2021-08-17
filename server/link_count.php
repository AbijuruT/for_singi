<?php 
# Here we are going to get a number a particular link is used

if(isset($_GET['q'])){
    $get_value = $_GET['q'];

    /** 
     * First here get the stored value in database so that you can
     * update the link count means am going to take this link and add 1
     * where it is visted
     * 
     */
    $sql = "SELECT user_names, link_count FROM names WHERE user_token = ?;";
    $stmt = mysqli_stmt_init($db_conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo ("Something is missing!");
    } else {
        mysqli_stmt_bind_param($stmt, "s", $get_value);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        $count = $row['link_count'] + 1;
        
        /**
         * Now am going to update the link_count colomun in database so it can keep 
         * adding one whenever it is visted
         */
        $update_sql = "UPDATE names SET link_count = '$count' WHERE user_token = '$get_value'";
        $execute = $db_conn->query($update_sql);
        if($execute){
            // echo 'Cool';
        }else{
            // echo 'Not cool';
        }
    }

}

?>