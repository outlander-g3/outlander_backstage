<?php
  session_start();
  include_once('connectDb.php');

  //先撈資料
  $sql="select * from robot";
  $robot=$pdo->query($sql);

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
          <li><a href="#">登山日誌管理</a></li>
          <li><a href="#">登山技巧管理</a></li>
          <li><a href="robot.html">客服機器人管理</a> </li>
          <li><a href="#">會員系統管理</a></li>
          <li><a href="#">後台系統管理</a></li>
        </ul>
        <button id="signOut">登出</button>
      </div>
      <div class="col-19">
        <div class="main">
          <div id="breadcrumb">
            <span>客服機器人管理</span>
            <i class="material-icons">keyboard_arrow_right</i>
            <span id="currentLoc">客服機器人Q&A清單</span>
          </div>
          <div class="tablearea">
            <div class="tab">
              <button class="tablinks active" value="robotList" disabled>客服機器人Q&A清單</button>
            </div>
            <a href="newRobot.html" id="addItem" class="btn-main-s">新增項目</a>
            <div id="itineraryType" class="tabcontent active">
              <table>
                <tr>
                  <th class="col-3">編號</th>
                  <th class="col-10">預設問題</th>
                  <th class="col-6">排列順序</th>
                  <th class="col-5">處理</th>
                </tr>
                <?php
                  while($rows=$robot->fetchObject()){

                ?>
                	<tr class="qsNo<?php echo $rows->qsNo;?>">
                    <form action="editRobot.php" id="qsNo<?php echo $rows->qsNo;?>" >
                    <input type="hidden" name="qsNo" value="<?php echo $rows->qsNo;?>">
                	  <td class="col-3"><?php echo $rows->qsNo;?></td>
                	  <td class="col-10"><?php echo $rows->defaultQ;?></td>
                	  <td class="col-6"><?php echo $rows->qsOrd;?></td>
                	  <td class="col-5">
                	    <a href="#" class="tdEdit"><i class="edit material-icons">edit</i></a>
                	    <a href="#" class="tdDelete"><i class="delete material-icons">delete</i></a>
                    </td>
                    </form>
                	</tr>

                <?php }?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<script src="js/robot.js"></script>