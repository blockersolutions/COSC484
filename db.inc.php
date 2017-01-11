<?php
$hostName ="localhost:/usr/cis/var/triton.sock";
$databaseName ="wblock1db";
$username="wblock1";
$password ="Cosc*9cxc";

function showError(){
    
    if(mysql_error()){
        die("Error".mysql_errno().":".mysql_errno());
    }
    else{
        die("Could not connect to the DBMS");
    }
}
?>