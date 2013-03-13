<?
require_once( "php/facebook.php" );
$api_key = "1f1156fab73762edcd60";
$secret = "84a5a973f9fc4f31ef4d750e59f3d58a66677c4c";

$facebook = new Facebook( $api_key, $secret );
$user_id = $facebook->require_login();

echo "Hello World";
echo "Current logged in as <fb:name uid=\"$user_id\" />";
?>