<?php
session_start();
if(isset($_POST['boxColor']))
{
    $_SESSION['boxColorKey'] = $_POST['boxColor'];
    echo $_SESSION['boxColorKey'];
}
?>