<?php
$severname = "DESKTOP-F8KNA0S\SQLEXPRESS"; //server name 
$connectionInfo = array("Database" => "labpage");
$conn = sqlsrv_connect ($severname,$connectionInfo);

if ($conn){
    echo "connecton established. <br/>";
}
else {
    echo "connecton is not established. <br/>";
    die (print_r(sqlsrv_errors(),true));
}
?>