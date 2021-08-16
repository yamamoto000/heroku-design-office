<?php 
//テスト
// define('DB_DNS', 'mysql:host=localhost; dbname=contact_form; charset=utf8');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'root');

//本番
$db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
$db['dbname'] = ltrim($db['path'], '/');
$dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
$user = $db['user'];
$password = $db['pass'];
define('DB_DNS', $dsn);
define('DB_USER', $user);
define('DB_PASSWORD', $password);

?>