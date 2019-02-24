<?php
session_start();
error_reporting(0);
$pdkNo = $_REQUEST['pdkNo'];
$eqmNo = $_REQUEST['eqmNo'];

try{
  require_once('connectDb.php');
  if(isset($_REQUEST['pdkNo'])){
    $pdkNo = $_REQUEST['pdkNo'];
    $temparray =[];
    array_push($temparray,$eqmNo);
    print_r($temparray);
    //     $sizeString = '';
    foreach($eqmNo as $index=>$pdkNo) {
      }
    //   echo $eqmNo;
    $sql = "UPDATE productchecklist SET eqmNo=".$eqmNo['n'][$index]."WHERE pdkNo=:pdkNo";
    // $sql = 'update productchecklist set pdkNo=:pdkNo, eqmNo=:eqmNo where pdkNo=:pdkNo';
    echo $sql;
    $product = $pdo -> prepare($sql);
    $product->bindValue(':pdkNo', $pdkNo);
   
    $product->execute();
  }else{
    if($pdkNo == NULL){
      $sql = 'insert into productchecklist (pdkNo, eqmNo)
      values (:pdkNo, :eqmNo)';
      $product = $pdo -> prepare($sql);
    }
    //要先有行程種類才能創建裝備清單
    $pdkNo =20;
    // echo $eqmNo;
    // $eqmNoS =[];
    // foreach($eqmNoS as $eqmNo) {
    //   // array_push($eqmNoS,$eqmNo);
    // }
    $eqmNoS = array();
    foreach($values as $key => $eqmNo) {
      $eqmNoS[] = $key . " = '" . $eqmNo . "'";
    }
    print_r($eqmNoS);
    $product->bindValue(':pdkNo', $pdkNo);
    $product->bindValue(':eqmNo', $eqmNo);
    $product->execute();
  }
}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}

?>