<?php
if(!empty($_POST)){
$severname = "DESKTOP-F8KNA0S\SQLEXPRESS"; // server name from connection properties


$connectionInfo = array("Database" => "labpage");
$conn = sqlsrv_connect ($severname,$connectionInfo);
$email = $_POST["Email"];
$APPNO = $_POST["AppointmentNO"];
$pass = $_POST["P_password"];
$insert = "INSERT INTO laboratory_details(Email,AppointmentNO,P_password) values ( $email,$APPNO,$pass)";
//inserting the values user enters to the form
$resource = sqlsrv_prepare($conn,$insert);

if(sqlsrv_execute($resource)){
    echo " appointment successfull";
}
else {
    echo "failed";
}
}
?>