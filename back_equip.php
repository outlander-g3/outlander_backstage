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
  <title>山行者後台 - 裝備管理</title>
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
    <span id="currentLoc">裝備管理</span>
  </div>
  <div class="tablearea">
    <div class="tab">
      <button class="tablinks active" value="itineraryType">裝備</button>
      <button class="tablinks" value="viewList">裝備清單</button>
    </div>
    <a href="back_equipListEdit.php" id="addItem" class="btn-main-s">新增項目</a>
    <div id="itineraryType" class="tabcontent active">
      <table>
        <tr>
          <th class="col-3">編號</th>
          <th class="col-8">名稱</th>
          <th class="col-3">分類</th>
          <th class="col-3">圖片</th>
          <th class="col-5">處理</th>
        </tr>
        <tr>
          <td class="col-3">1001</td>
          <td class="col-8">帳篷</td>
          <td class="col-3">寢具類</td>
          <td class="col-3"><input type="file" placeholder="請選擇檔案" multiple></td>
          <td class="col-5">
            <a href="back_equipListEdit.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <tr>
          <td class="col-3">1001</td>
          <td class="col-8">帳篷</td>
          <td class="col-3">寢具類</td>
          <td class="col-3"><input type="file" placeholder="請選擇檔案" multiple></td>
          <td class="col-5">
            <a href="back_equipListEdit.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <tr>
          <td class="col-3">1001</td>
          <td class="col-8">帳篷</td>
          <td class="col-3">寢具類</td>
          <td class="col-3"><input type="file" placeholder="請選擇檔案" multiple></td>
          <td class="col-5">
            <a href="back_equipListEdit.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        
        
      
      </table>
    </div>
    
    <div id="viewList" class="tabcontent">
      <table>
        <tr>
          <th class="col-3">編號</th>
          <th class="col-8">山岳</th>
          <th class="col-5">處理</th>
        </tr>
        <tr>
          <td class="col-3">10001</td>
          <td class="col-8">征服東北亞第一高峰</td>
          <td class="col-5">
            <a href="back_editEquipList.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <tr>
          <td class="col-3">10001</td>
          <td class="col-8">征服東北亞第一高峰</td>
          <td class="col-5">
            <a href="back_editEquipList.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <tr>
          <td class="col-3">10001</td>
          <td class="col-8">征服東北亞第一高峰</td>
          <td class="col-5">
            <a href="back_editEquipList.php"><i class="edit material-icons">edit</i></a>
            <a href="#"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
      </table>
    </div>
  </div>





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
