<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'mordana_rukon');


try{
    $connect = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
}catch(Exception $e){
echo "Database connection feil:".$e->getMessage();
}