<?php

$db = new SQLite3('../database/data');
$cName = test_input($_REQUEST['cName']);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}




$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);
if($admin == true) {

$query = "SELECT * FROM company WHERE companyName = '$cName'";
$res = $db->query($query);

echo 'Result:<br>';
while($row=$res->fetchArray()){

    $id = $row['id'];
    $cName = $row['companyName'];
    $cAddress = $row['companyAddress'];
    $cNumber = $row['companyNumber'];
    $ceoName = $row['ceoName'];
    $cEmail = $row['companyEmail'];
    $cDetail = $row['companyDetail'];
    $categories = $row['cat'];

    echo '	'. $id ." : " . $cName . ' : '. $cAddress." : " . $cNumber ." : " . $ceoName ." : " . $cEmail ." : " . $cDetail ." : " . $categories . '<br>';
}


} else {
    echo "Not found";
}
