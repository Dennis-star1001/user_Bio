
<?php
require("../database.php");
require("../../classes/Users/user.php");
require("../../commonFunction/commonFunction.php");


$user = new User();

$user->processUser($_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['date_of_birth'], $_POST['email'], $_POST['skin_color'], $_POST['height'], $_POST['body_type'], $_POST['phone_number']);
?>