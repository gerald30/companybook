<?php
$categories = $_REQUEST['categories'];
$db = new SQLite3('../database/data');
$query="SELECT * FROM company WHERE cat='$categories'";
$res=$db->query($query);


echo "Get all job row from company table <br>";

while($row = $res->fetchArray()){

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
?>