<?php 
define("HOSTNAME", "hostname_database_anda");
define("USERNAME", "username_database_anda");
define("PASSWORD", "password_database_anda");
define("DBNAME", "nama_database_anda"); /* misalnya nama database saya db_azurems */

$conn = mysql_connect(HOSTNAME, USERNAME, PASSWORD)
		or die ("Error saat menghubungkan ke host database");
$db = mysql_select_db(DBNAME)
		or die ("Error saat menghubungkan ke database");
?>