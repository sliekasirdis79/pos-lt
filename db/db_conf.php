<?php

$connectdb = mysql_connect("_DB_HOST_","_DB_USER_","_DB_PASSWORD_");

$selectdb = mysql_selectdb("_DB_NAME_");

define( "admin_username", "_ADMIN_USER_" );

define( "admin_password", "_ADMIN_PASSWORD_" );

?>
