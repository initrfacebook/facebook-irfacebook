<?
require_once( "php/facebook.php" );
$api_key = "507957205912917";
$secret = "61068c44787488d87719b15c3f6b2032";

$facebook = new Facebook( $api_key, $secret );
$user_id = $facebook->require_login();

echo "Hello World";
echo "Current logged in as <fb:name uid=\"$user_id\" />";
?>