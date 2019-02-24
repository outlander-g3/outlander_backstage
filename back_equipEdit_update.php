<?php
session_start();
error_reporting(0);
$eqmNo = $_REQUEST['eqmNo'];
$eqmName = $_REQUEST['eqmName'];
$eqmImg = $_REQUEST['eqmImg'];
 echo $eqmNo."gg<br>";
 echo gettype($eqmNo);
try{
  require_once('connectDb.php');
  if(isset($_REQUEST['eqmNo'])){
    $eqmNo = $_REQUEST['eqmNo'];
    $sql = "UPDATE equipment SET eqmNo=:eqmNo, eqmName=:eqmName, eqmImg=:eqmImg WHERE eqmNo=:eqmNo";
    // echo $sql;
    $eqm = $pdo -> prepare($sql);
    $eqm->bindValue(':eqmNo', $eqmNo);
    $eqm->bindValue(':eqmName', $eqmName);
    $eqm->bindValue(':eqmImg', $eqmImg);
   
    $eqm->execute();
  }else{
    if($eqmNo == 'NULL'){
      $sql = 'insert into equipment eqmName, eqmImg)
      values (:eqmName, :eqmImg)';
          echo $sql;

      $product = $pdo -> prepare($sql);
    }
    $product->bindValue(':eqmName', $eqmName);
    $product->bindValue(':eqmImg', $eqmImg);
    $product->execute();
  }
}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}

?>