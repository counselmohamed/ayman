<?php
    $db     =   array
    (
        'host'      =>      '23.95.25.103',
        'dbname'    =>      'mohamedj_memo',
        'username'  =>      'mohamedj_memo',
        'password'  =>      'memomemo',
        'tablename' =>      'book'
    );
	    // connect to server
    @$mysql  =   mysql_connect($db['host'], $db['username'], $db['password']) or die('Cannot connect to server, check $db configurations');

    // choose the db
    @mysql_select_db($db['dbname'], $mysql) or die('Cannot choose the database, is it exist ?!');

?>