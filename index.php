<?
require_once( "php/facebook.php" );
$api_key = "252281701570510";
$secret = "d63572dd7bd3f9429a434a26bf63363b";

$facebook = new Facebook( $api_key, $secret );
$user_id = $facebook->require_login();

echo "Hello World";
echo "Current logged in as <fb:name uid=\"$user_id\" />";
?>