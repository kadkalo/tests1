<?php

include 'model/useDb.php';
include 'controller/controllers.php';
$id = $_GET['id']; 

echo render('indexLS', get_statii($id));

?>