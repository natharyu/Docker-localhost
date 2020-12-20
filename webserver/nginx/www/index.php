

<?php
$dbconn = pg_connect('host=db port=5432 dbname=webserver_db user=user1 password=password')
    or die('Could not connect');
     
echo '<pre>' . var_export(pg_version($dbconn), true) . '</pre>';

pg_close($dbconn);
?>

<?php
echo phpinfo();