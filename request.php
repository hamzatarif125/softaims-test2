<?php
if(isset($_POST['boxColor']))
{
    ob_start();
    setcookie("boxColor", $_POST['boxColor'], time() + (86400 * 8), "/");   
    ob_end_flush();  
    echo $_COOKIE["boxColor"];
}
?>