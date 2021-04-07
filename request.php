<?php
if(isset($_POST['boxColor']))
{
    $file = fopen("colorFile.txt","w");
    echo fwrite($file,$_POST['boxColor']);
    fclose($file);
}

if($_REQUEST['getColor']=="Yes")
{
    $myfile = fopen("colorFile.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("colorFile.txt"));
    fclose($myfile);
}
?>