<?php

///////////////////////////////////////////
// COMPANY  : Clickonology               // 
// PROJECT  : Clickonology               //
// D N      : clickonology.com           // 
// FILE     : addindb.php                //
// CREATED  : Mar 22 2014                //
// MODIFIED :                            //
///////////////////////////////////////////
//
//$link = mysql_connect('host', 'user', 'pwd'); 
$link = mysql_connect('localhost:3306', 'NRM1', 'c11ck0n010gy'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 

?> 
