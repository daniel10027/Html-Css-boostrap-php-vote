<?php

session_start();
// if session is not set this will redirect to login page
if( !isset($_SESSION['username']) )
{
    header("Location: index.php");
    exit;
}

?>