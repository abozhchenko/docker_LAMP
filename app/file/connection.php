<?php
$servername = "mysql";
$username = "UserName";
$password = "UserPass";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>