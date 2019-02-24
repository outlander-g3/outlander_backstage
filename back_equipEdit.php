<?php
session_start();

//===========================自己的php開始=======================
try{
  require_once('connectDb.php');
  if(isset($_REQUEST['eqmNo'])){
    $eqmNo = $_REQUEST['eqmNo'];
    $eqmName = $_REQUEST['eqmName'];
    $sql ="select * from equipment where eqmNo=:eqmNo";
    $eqm = $pdo -> prepare($sql);
    $eqm->bindValue(':eqmNo', $eqmNo);
    $eqm->execute();
    $eqmRow = $eqm->fetch(PDO::FETCH_ASSOC);
  }
}catch (PDOException $e) {
  echo "失敗",$e->getMessage(),"<br>";
  echo "行號",$e->getLine();
}



//===========================自己的php結束=======================

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="css/back_model.css">
  <script src="js/jquery-3.3.1.min.js"></script>

  <!-- 可自行更動區塊 -->
  <title>山行者後台 - 編輯裝備清單</title>
  <!-- 可自行更動區塊 -->

<!-- ===========================自己的css開始======================= -->



<!-- ===========================自己的css結束======================= -->

</head>
<body>
  <?php include_once('back_header.php'); ?>
<!-- ===========================各分頁內容開始(可填寫區塊開始)======================= -->
<!-- table頁面：breadcrumb、tablearea -->
<!-- input頁面：breabcrumb、form+editarea -->
  <div id="breadcrumb">
    <span>行程管理</span>
    <i class="material-icons">keyboard_arrow_right</i>
    <span>裝備管理</span>
    <i class="material-icons">keyboard_arrow_right</i>
    <a href="back_equip.php".html">裝備清單</a>
    <i class="material-icons">keyboard_arrow_right</i>
    <span id="currentLoc">編輯裝備清單</span>
  </div>
  <form action="back_equipEdit_update.php" method="get">
    <div class="editArea">
      <input type="hidden" name="eqmNo" value="<?php  
      if(isset($_REQUEST['eqmNo'])){
        echo $eqmNo; 
      }?>">
      <div class="row">
        <div class="col-4">
          <label for="">裝備名稱</label>
        </div>
        <div class="col-20">
        <input type="text" name="eqmName" value="<?php 
        if(isset($_REQUEST['eqmNo'])){
        echo $eqmName; 
        }?>">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">裝備分類</label>
        </div>
        <div class="col-20">
        <input type="text" name="eqmKind" value="<?php 
        if(isset($_REQUEST['eqmNo'])){
        echo  $eqmRow['eqmKind']; 
        }?>">
          <select name="eqmKind" id="">
            <option value="">請選擇</option>
            <option value="寢具類">寢具類</option>
            <option value="醫療類">醫療類</option>
            <option value="衣物類">衣物類</option>
            <option value="配件類">配件類</option>
            <option value="炊具類">炊具類</option>
            <option value="食品類">食品類</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">裝備名稱</label>
        </div>
        <div class="col-20">
          <input type="file" name="eqmImg" id="">
        </div>
      </div>

      
      
        
    </div>
    <div class="confirmArea">
      <a href="back_equip.php" style="color:#f4f4f4" "><button class="btn btnCancel">取消</button></a>
      <button class="btn btnSubmit">確認修改</button>
    </div>
  </form>






<!-- ===========================各分頁內容結束(可填寫區塊結束)======================= -->
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<script src="js/back_model.js"></script>
<!-- ===========================自己的js開始======================= -->





<!-- ===========================自己的js結束======================= -->
