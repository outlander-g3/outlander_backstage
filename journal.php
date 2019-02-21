<?php
  session_start();
  try{
  include_once('connectDb.php');

  //先撈資料
  
  $sql="select * from report";
  $report=$pdo->query($sql);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/model.css">
  <script src="js/model.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <title>Outlander</title>
</head>

<body>
  <section class="container">
    <div class="row">
      <div class="col-5">
        <div class="logo">
          <div class="row">
            <div class="col-6 logoImg">
              <img src="img/logo.png" alt="logo">
            </div>
            <div class="col-18">
              <h1>OUTLANDER</h1>
              <h2>後台管理系統</h2>
            </div>
          </div>
        </div>
        <div class="admin">
          <div class="row">
            <div class="col-6" id="adminImg">
              <img src="img/admin1.jpg" alt="admin">
            </div>
            <div class="col-18">
              <p id="admin">Admin</p>
            </div>
          </div>
        </div>
        <ul id="menu">
          <li id="menu__itinerary"><a href="#">行程管理 <i class="material-icons">keyboard_arrow_down</i></a></li>
          <ul class="submenu" id="submenu__itinerary">
            <li><a href="model.html">行程種類管理</a></li>
            <li><a href="#">行程開團資訊管理</a></li>
            <li><a href="#">訂單管理</a></li>
            <li><a href="#">裝備管理</a></li>
            <li><a href="#">嚮導管理</a></li>
            <li><a href="#">標籤管理</a></li>
          </ul>
          <li id="menu__journal"><a href="#">登山日誌管理</a></li>
          <li><a href="#">登山技巧管理</a></li>
          <li><a href="#">客服機器人管理</a></li>
          <li><a href="#">會員系統管理</a></li>
          <li><a href="#">後台系統管理</a></li>
        </ul>
        <button id="signOut">登出</button>
      </div>
      <div class="col-19">
        <div class="main">
          <div id="breadcrumb">
            <span>登山日誌管理</span>
            <i class="material-icons">keyboard_arrow_right</i>
            <span id="currentLoc">被檢舉日誌清單</span>
          </div>
          <div class="tablearea">
            <div class="tab">
              <button class="tablinks active" value="reportList">被檢舉日誌清單</button>
            </div>

            <div id="reportList" class="tabcontent active">
              <table>
                <tr>
                  <th class="col-3">檢舉編號</th>
                  <th class="col-8">被檢舉日誌標題</th>
                  <th class="col-7">理由</th>
                  <th class="col-3">審核結果</th>
                  <th class="col-3">處理</th>
                </tr>
                <!-- 開始動態生成 -->
                <?php while($rows=$report->fetchObject()){
                  //要特別去撈日誌標題
                  $sqlJn="select j.jnTitle from journal j,report r where j.jnNo=".$rows->jnNo;
                  $jn=$pdo->query($sqlJn);
                  $jnTitle=$jn->fetchObject();
                  //檢舉結果的顯示
                  $result=$rows->result;
                  if($result==1){
                    $result='屏蔽';
                  }
                  else{
                    $result="不屏蔽";
                  }
                  ?>
                <tr id="rptNo<?php echo $rows->rptNo;?>">    
                  <td class="col-3"><?php echo $rows->rptNo;?></td>
                  <td class="col-8"><a href="journal.php/?jnNo=<?php echo $rows->jnNo;?>"><?php echo $jnTitle->jnTitle;?></a></td>
                  <td class="col-7"><?php echo $rows->reason;?></td>
                  <td class="col-3 result"><?php echo $result;?></td>
                  <td class="col-3">
                    <a href="#"><i class="delete material-icons">edit</i></a>
                  </td>
                </tr>
                <?php }
                }catch (PDOException $e) {
        echo "失敗",$e->getMessage(),"<br>";
        echo "行號",$e->getLine();
    }?>
                <!-- 動態生成結束 -->
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<script>

$(document).ready(function () {
    $('.delete').click(function (e) {
        e.preventDefault();

        let rptNo = $(this).closest('tr').attr('id').replace('rptNo', '');
        let result = confirm('是否屏蔽該日誌？');
        let txt = $(this).closest('tr').children('.result');
        $.ajax({
            type: 'post',
            url: 'result.php',
            data: 'result=' + result + '&rptNo=' + rptNo,
            success: function (data) {

                if (result == true) {
                    alert('已屏蔽該日誌');
                    txt.html('屏蔽');
                }
                else {
                    alert('該日誌未受屏蔽');
                    txt.html('不屏蔽');
                }
            },
        });
    });

});
</script>