<?php
session_start();

//===========================自己的php開始=======================

if(isset($_REQUEST['pdkNo'])){
$pdkNo = $_REQUEST['pdkNo'];
$pdkName = $_REQUEST['pdkName'];

echo $pdkNo;
echo $pdkName;
}
try{

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
  <form action="back_equipListEdit_update.php">
    <div class="editArea">
    
      <div class="row">
        <div class="col-4">
          <label for="">行程種類名稱</label>
        </div>
        <div class="col-20">
       <input type="text" value="<?php 
        if(isset($_REQUEST['pdkNo'])){
       echo $pdkName; 
       }?>">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">寢具類</label>
        </div>
        <div class="col-20">
          <input type="checkbox" name="eqmNo" value="1">帳篷
          <input type="checkbox" name="eqmNo" value="2">睡袋外套
          <input type="checkbox" name="eqmNo" value="3">睡袋內套
          <input type="checkbox" name="eqmNo" value="4">露宿袋
          <input type="checkbox" name="eqmNo" value="5">保暖睡墊
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">醫療類</label>
        </div>
        <div class="col-20">
          <input type="checkbox" name="eqmNo" value="6">急救求生用品
          <input type="checkbox" name="eqmNo" value="7">個人藥品
          <input type="checkbox" name="eqmNo" value="8">防蚊液
          <input type="checkbox" name="eqmNo" value="9">高山藥
          <input type="checkbox" name="eqmNo" value="10">防曬油
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">衣物類</label>
        </div>
        <div class="col-20">
          <input type="checkbox" name="eqmNo" value="11">防風衣
          <input type="checkbox" name="eqmNo" value="12">保暖衣
          <input type="checkbox" name="eqmNo" value="13">雨衣
          <input type="checkbox" name="eqmNo" value="14">保暖手套
          <input type="checkbox" name="eqmNo" value="15">遮陽帽
          <input type="checkbox" name="eqmNo" value="16">保暖帽
        </div>
      </div>
      <div class="row">
          <div class="col-4">
            <label for="">配件類</label>
          </div>
          <div class="col-20">
            <input type="checkbox" name="eqmNo" value="17">登山杖
            <input type="checkbox" name="eqmNo" value="18">登山鞋
            <input type="checkbox" name="eqmNo" value="19">登山襪
            <input type="checkbox" name="eqmNo" value="20">頭燈
            <input type="checkbox" name="eqmNo" value="21">指北針
            <input type="checkbox" name="eqmNo" value="22">扣繩
            <input type="checkbox" name="eqmNo" value="23">冰爪
            <input type="checkbox" name="eqmNo" value="24">防水袋
            <input type="checkbox" name="eqmNo" value="25">望遠鏡
          </div>
        </div>
      <div class="row">
        <div class="col-4">
          <label for="">炊具類</label>
        </div>
        <div class="col-20">
          <input type="checkbox" name="eqmNo" value="26">爐子(汽化爐、瓦斯爐)
          <input type="checkbox" name="eqmNo" value="27">爐子燃料
          <input type="checkbox" name="eqmNo" value="28">保溫壺
          <input type="checkbox" name="eqmNo" value="29">套鍋組
          <input type="checkbox" name="eqmNo" value="30">擋風板
          <input type="checkbox" name="eqmNo" value="31">打火機
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">食品類</label>
        </div>
        <div class="col-20">
          <input type="checkbox" name="eqmNo" value="32">行動乾糧
          <input type="checkbox" name="eqmNo" value="33">乾燥食品
          <input type="checkbox" name="eqmNo" value="34">高熱量口糧
          <input type="checkbox" name="eqmNo" value="35">綜合維他命
          <input type="checkbox" name="eqmNo" value="36">濾水器
          <input type="checkbox" name="eqmNo" value="37">調味品
        </div>
      </div>
      
      
        
    </div>
    <div class="confirmArea">
      <button class="btn btnCancel">取消</button>
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
