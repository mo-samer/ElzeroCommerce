<?php
 
    function lang( $phrase ) {

        static $lang = array(
            'HOME_ADMIN' => 'Home',
            'CATE' => 'Categories',
            'ITEMS' => 'Items',
            'MEMBERS' => 'Members',
            'STATI' => 'Statistics',
            'LOGS' => 'Logs',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => ''
        );

        return $lang[$phrase];
    }