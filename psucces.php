<?php
/**
 * Created by PhpStorm.
 * User: Sebin PJ
 * Date: 30/01/2015
 * Time: 22:08
 */
session_start();
if(!session_is_registered(myusername)){
    header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>