<?php

function get_statii($idp=FALSE){
    
    require_once __DIR__ . '/db.php';
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $sql = "SELECT * FROM `statti` "; 
    if($idp){ 
        $sql .= "WHERE id = '$idp'";   
    }
    $resault = $mysqli->query($sql);
    if(!$resault){
        exit(mysql_error());
    }
    if (mysqli_num_rows($resault) == 0){
        exit('Статей нет');
    }
    $stat = array ();
    for ($i=0; $i < mysqli_num_rows($resault); $i++){
        $stat [$i] = mysqli_fetch_assoc($resault);
    }
    $mysqli->close();
    return $stat;
}


?>