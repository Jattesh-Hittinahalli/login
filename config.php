<?php

/*
assuming user name = root
password = ""
*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//try to connect database

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


//check connection
if($conn==false)
{
    dir('Error:Canont Connect');
}





?>