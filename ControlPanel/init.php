<?php
  

     include 'connect.php';

     //Routes

     $tpl  = 'includes/tamblates/';
     $lang = 'includes/langs/';
     $fun  = 'includes/functions/';
     $css  = 'layouts/css/';
     $js   = 'layouts/js/';
     

     //include important files

     include $fun . 'functions.php';
     include $lang . 'english.php';
     include $tpl . 'header.php';
      
     // include navbar condetion

     if (!isset($nonavbar)) { include $tpl . 'navbar.php'; }