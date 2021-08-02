<?php


$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

//if the page is the main page

if ($do == 'Manage') {

    echo 'Welcomein Manage Category';
    echo '<a href="?do=Insert">add new category +</a>';

} elseif ($do == 'Add') {

    echo 'Welcome To Add Category';

} elseif ($do == 'Insert') {

    echo 'Welcome You Can Insert';

} else {
    
    echo 'Error There Is No Page Here';
}