<?php
include_once '../../../../includes/define.inc.php';
include_once '../../../../class/DB.class.php';
include_once '../../../../class/Banner.class.php';

if( isset($_POST['idBanner']) && isset( $_POST['status'] ) ){
//    $_POST['idBanner'];
//    $_POST['status'];
    
    if($_POST['status'] == 1){
        $status = 0; 
    }else if($_POST['status'] == 0){
        $status = 1; 
    }
    
    $stmt = DB::newPDO()->prepare('UPDATE banners SET status=? WHERE idBanner = ?');
    $stmt->bindValue(1, $status, PDO::PARAM_INT);
    $stmt->bindValue(2, $_POST['idBanner'], PDO::PARAM_INT);
    $stmt->execute();
    
}