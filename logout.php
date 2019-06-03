<?php
session_start();

if(!isset($_SESSION['userid']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['userid'])!="")
{
 header("Location: search_new.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['userid']);
 header("Location: logintest.php");
}
?>