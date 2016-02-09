
<?php
include ('nav.php');
$db = new SQLite3('../database/data');
$query="SELECT * FROM `company`";
$res=$db->query($query);



echo ' <h2>Result</h2>';

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







