<?php
if(isset($_POST['boxColor']))
{
    echo "lklk";
    setcookie("boxColor", $_POST['boxColor'], time() + (86400 * 8), "/") or die('unable to create cookie');   
    echo $_COOKIE["boxColor"];
}
?>