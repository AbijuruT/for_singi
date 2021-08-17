<?php
# Establin the connection to the database
require('db.php');
$db_conn = new mysqli($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);
if($db_conn->connect_error){
    // echo("Failed to connect to the Server").$db_conn->connect_errno .$db_conn->connect_error;
} 