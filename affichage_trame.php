<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="utf-8" />
    <title>SAE23</title> 
</head> 
<body>
    <?php
    include('base.php');
    $test = $_GET['test'];
    $date = $_GET['date'];
    $sql = "SELECT id_test FROM test WHERE nom_test = '$test' AND date_execution = '$date'";
    $req = $bd->prepare($sql);
    $req->execute();
    $id = $req->fetchall(PDO::FETCH_ASSOC);
    $req->closeCursor();
    echo "{$id['id_test']}";
   // $sql = "SELECT framedate, MID, bench_3, bench_5, framesize, mac_dest, mac_src, field_1, field_2, field_3 , field_4 , field_5 , field_6 , field_7 , src_ip, dest_ip, field_9, field_10, field_11, field_14, field_16 , field_17, field_18, field_20 , field_21 , field_23, field_25 , field_26 , field_28 , field_29 , field_30 ,field_32, packet_date, mac_sender,sender_ip ,mac_target,target_ip FROM trame";
    //$req = $bd->prepare($sql);
    //$req->execute();
    //$trame = $req->fetchall(PDO::FETCH_ASSOC);
   // $req->closeCursor();
    ?> 
</body> 
 </html>