<?php
session_start();
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
    if($pdkNo == 'NULL'){
      $sql = 'insert into product (pdkNo, gdNo1, pdStart, pdStatus)
      values (:pdkNo, :gdNo1, :pdStart, :pdStatus)';
      $product = $pdo -> prepare($sql);
    }
    $product->bindValue(':pdkNo', $pdkNo);
    $product->bindValue(':gdNo1', $gdNo1);
    $product->bindValue(':pdStart', $pdStart);
    $product->bindValue(':pdStatus', $pdStatus);
    $product->execute();
  }
}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}
if(isset($e) === false){
  header("location:back_product.php");
}
?>