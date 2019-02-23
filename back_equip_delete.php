<?php
session_start();


$ordNo = $_REQUEST['ordNo'];

try{
  require_once('connectDb.php');
  $sql = 'DELETE  FROM equipment WHERE eqmNo=:eqmNo';
//   $sql = 'DELETE equipment FROM  WHERE ordNo=:ordNo AND eqmName=:eqmName';
  $eqD = $pdo -> prepare($sql);
  $eqD -> bindValue(':ordNo',$ordNo);
  $eqD->execute();


}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}


?>