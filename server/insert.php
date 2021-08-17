<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['names']));
    $user_token = sha1(uniqid($full_name, true)); # here encyript username 

    //this is a link attached with the token those encrypted strings
    $link = 'http://localhost/for_singi/?q='.$user_token;
    $link_count = 0; # this will hold a number of time this link have been used set 0 as default

    // insert into DB
    $sql = 'INSERT INTO names(user_names,user_token,refer_link, link_count) VALUES(?,?,?,?)';
    $stmt = mysqli_stmt_init($db_conn); //stmt initialization

    // prepare the statment

    if(!mysqli_stmt_prepare($stmt, $sql)){
        print('Ooops, something might not be working! ):');
    }else{
        // Binding parameters
        mysqli_stmt_bind_param($stmt, 'sssi',$full_name,$user_token, $link,$link_count);
        mysqli_stmt_execute($stmt);
        /**
         * Am storing this $user_token into $_SESSION[] variable so that 
         * I can some information on this user on directed page after inserting
         * His/Her information into database.
         */
        $_SESSION['names'] = $user_token; 
        header('Location: ./dashboard/');

        exit();
    }

}

?>