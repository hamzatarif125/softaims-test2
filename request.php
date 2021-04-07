<?php
switch ($_SERVER['HTTP_ORIGIN']) 
{
    case 'https://softaims-test.herokuapp.com/': case 'https://softaims-test.herokuapp.com/':
    header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    break;
}
if(isset($_POST['boxColor']))
{
    setcookie("boxColor", $_POST['boxColor'], time() + (86400 * 8), "/");   
}
?>