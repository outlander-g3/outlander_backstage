<?php
session_start();

//===========================自己的php開始=======================






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
  <title>山行者後台 - 編輯行程種類</title>
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
    <span>行程種類管理</span>
    <i class="material-icons">keyboard_arrow_right</i>
    <a href="model.html">行程種類</a>
    <i class="material-icons">keyboard_arrow_right</i>
    <span id="currentLoc">編輯行程種類</span>
  </div>
  <form>
    <div class="editArea">
      <div class="row">
        <div class="col-4">
          <label for="">行程種類編號</label>
        </div>
        <div class="col-20">
          <input type="text" value="10001">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程名稱</label>
        </div>
        <div class="col-20">
          <input type="text" value="玉山">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程圖片列表</label>
        </div>
        <div class="col-20">
          <input type="file" placeholder="請選擇檔案" multiple>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程地圖座標</label>
        </div>
        <div class="col-20">
          <input type="text" placeholder="x軸">
          <input type="text" placeholder="y軸">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程種類狀態</label>
        </div>
        <div class="col-20">
          <select name="" id="">
            <option value="">請選擇狀態</option>
            <option value="">1.未上架</option>
            <option value="">2.已上架</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">難易度</label>
        </div>
        <div class="col-20">
          <input type="text" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">洲名</label>
        </div>
        <div class="col-20">
          <input type="text" value="1">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">天數</label>
        </div>
        <div class="col-20">
          <input type="text" value="1">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程類型</label>
        </div>
        <div class="col-20">
          <input type="text" value="1">
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">費用資訊</label>
        </div>
        <div class="col-20">
          <textarea name="" id="" cols="100" rows="10"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="">行程種類標籤</label>
        </div>
        <div class="col-20">
          <input type="text" value="1">
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
