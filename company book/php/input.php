<?php

$cName = test_input($_REQUEST['cName']);
$cAddress = test_input($_REQUEST['cAddress']);
$cNumber = test_input($_REQUEST['cNumber']);
$ceoName = test_input($_REQUEST['ceoName']);
$cEmail = test_input($_REQUEST['cEmail']);
$cDetail = test_input($_REQUEST['cDetail']);
$categories = test_input($_REQUEST['categories']);
$db = new SQLite3('../database/data');

//cleaning input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}

//checking companyName on database
$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);

if($admin == true) {
    die("Company Name : $cName is already exist please type another name");
} else {

    $db->exec("INSERT INTO company (companyName , companyAddress, companyNumber, ceoName, companyEmail, companyDetail, cat) VALUES ('$cName', '$cAddress', '$cNumber','$ceoName','$cEmail','$cDetail','$categories')");
    echo "1 Row inserted ";

}






