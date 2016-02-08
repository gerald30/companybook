<?php

$cName = test_input($_REQUEST['cName']);
$db = new SQLite3('../database/data');
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}


$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);

if($admin == true) {

    $query = "SELECT * FROM `company` WHERE companyName='$cName'";
    $res = $db->query($query);

    $row = $res->fetchArray();
    $id = $row['id'];
    $cName = $row['companyName'];
    $cAddress = $row['companyAddress'];
    $cNumber = $row['companyNumber'];
    $ceoName = $row['ceoName'];
    $cEmail = $row['companyEmail'];
    $cDetail = $row['companyDetail'];
    $categories = $row['cat'];

    echo 'You want to edit this : <hr>' .
        "<form action='update1.php'><table>" .
        "<tr><td>Company Name :</td><td><input type='text' value='" . $cName . "' name='cName'/></td></tr>" .
        "<tr><td>Company Address :</td><td> <input type='text' value='" . $cAddress . "' name='cAddress'/></td></tr>" .
        "<tr><td>Company Number : </td><td><input type='text' value='" . $cNumber . "' name='cNumber'/></td></tr>" .
        "<tr><td>Company CEO : </td><td><input type='text' value='" . $ceoName . "' name='ceoName'/></td></tr>" .
        "<tr><td>Company Email :</td><td> <input type='text' value='" . $cEmail . "' name='cEmail'/></td></tr>" .
        "<tr><td>Company Detail :</td><td> <input type='text' value='" . $cDetail . "' name='cDetail'/></td></tr>" .
        "<tr><td>Categories : </td><td><input type='text' value='" . $categories . "' name='cat'/></td></tr>" .
        "<tr><td><input type='submit' value='Update'/></td></tr></table></form>";

} else {
    echo "<h1>no name on database please register!";
}