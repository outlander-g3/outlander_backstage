<?php
session_start();

//===========================自己的php開始=======================
try{
  require_once('connectDb.php');
  $sql = 'select * from equipment a join orderchecklist b on a.eqmNo=b.eqmNo';
  $eq = $pdo->query($sql);

  // $sql = 'SELECT a.ordNo,c.pdkName ,c.mt FROM `order` a , product b,productkind c WHERE a.pdNo=b.pdNo OR b.pdkNo=c.pdkNo';
  $sql = 'SELECT pdkNo,pdkName  FROM productkind ';
  $eqL = $pdo->query($sql);
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
    <a href="back_equipListEdit.php?pdkNo=&pdkName=" id="addItem" class="btn-main-s">新增項目</a>
    <!-- <a href="back_equipEdit.php?eqmNo=&eqmName=" id="addItem" class="btn-main-s">新增項目</a> -->
    <div id="itineraryType" class="tabcontent active">
      <table>
        <tr>
          <th class="col-8">名稱</th>
          <th class="col-3">分類</th>
          <th class="col-3">圖片</th>
          <th class="col-5">處理</th>
        </tr>
        <?php while($eqRow = $eq->fetch()){?>
        <tr>
          <input type="hidden" naem="eqmNo" value="<?php echo $eqRow['eqmNo']; ?>">
          <td class="col-8"><?php echo $eqRow['eqmName']; ?></td>
          <td class="col-3"><?php echo $eqRow['eqmKind']; ?></td>
          <td class="col-3"><input type="file" placeholder="請選擇檔案" multiple></td>
          <td class="col-5">
            <a href="back_equipEdit.php?eqmNo=<?php echo $eqRow['eqmNo']; ?>&eqmName=<?php echo $eqRow['eqmName']; ?>"><i class="edit material-icons">edit</i></a>
            <a href="back_equip_delete.php?eqmNo=<?php echo $eqRow['eqmNo']; ?>"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <?php } ?>


        
        
      
      </table>
    </div>
    
    <div id="viewList" class="tabcontent">
      <table>
        <tr>
          <th class="col-3">行程種類編號</th>
          <th class="col-8">行程種類名稱</th>
          <th class="col-5">處理</th>
        </tr>
        <?php while($eqRow2 = $eqL->fetch()){?>
        <tr>
          <td class="col-3"><?php echo $eqRow2['pdkNo']; ?></td>
          <td class="col-8"><?php echo $eqRow2['pdkName']; ?></td>
          <td class="col-5">
            <a href="back_equipListEdit.php?pdkNo=<?php echo $eqRow2['pdkNo']; ?>&pdkName=<?php echo $eqRow2['pdkName']; ?>"><i class="edit material-icons">edit</i></a>
            <a href="back_equip_delete.php?pdkNo=<?php echo $eqRow2['pdkNo']; ?>"><i class="delete material-icons">delete</i></a>
          </td>
        </tr>
        <?php } ?>
    
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
