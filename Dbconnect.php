<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'mradb');
 define('DB_PORT', 3308);
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DB_PORT);
 //$dbcon = mysqli_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 /*
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }*/