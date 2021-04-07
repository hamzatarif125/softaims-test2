<?php
if(isset($_POST['boxColor']))
{
    setcookie("boxColor", $_POST['boxColor'], time() + (86400 * 8), "/");   
    echo $_COOKIE["boxColor"];
}
?>