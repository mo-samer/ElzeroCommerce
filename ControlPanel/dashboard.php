<?php
     session_start();
     if (isset($_SESSION['userName'])) {
        $pageTitle = 'Dashboard'; 
        include 'init.php';

         print_r($_SESSION);

         include $tpl . 'footer.php';

     } else {
         
        header('Location: index.php');

        exit();
     }