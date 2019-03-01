<?php
session_start();


$pdkNo = $_REQUEST['pdkNo'];

try{
  require_once('connectDb.php');
  $sql = 'DELETE  FROM productchecklist WHERE pdkNo=:pdkNo';
//   $sql = 'DELETE equipment FROM  WHERE ordNo=:ordNo AND eqmName=:eqmName';
  $eqD = $pdo -> prepare($sql);
  $eqD -> bindValue(':pdkNo',$pdkNo);
  $eqD->execute();
  header('Location:back_equip.php');


}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}


?>