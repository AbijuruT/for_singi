<?php
    
    #--Now destroy all sessions when the logout event is trigled
    if(isset($_GET['logout']))
    {
        unset($_SESSION['names']);
        session_destroy();
        header("Location: ../form.php");
         exit();
    }
