<?php
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysql_error());
mysql_select_db("forum2");
mysql_query("SET names utf8");
?>
