<?php
$cName = test_input($_REQUEST['cName']);
$cAddress = test_input($_REQUEST['cAddress']);
$cNumber = test_input($_REQUEST['cNumber']);
$ceoName = test_input($_REQUEST['ceoName']);
$cEmail = test_input($_REQUEST['cEmail']);
$cDetail = test_input($_REQUEST['cDetail']);
$categories = test_input($_REQUEST['categories']);
$db = new SQLite3('../database/data');


