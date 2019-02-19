
<?php 
ob_start();
session_start();
include_once('connectDb.php');
$qsNo=$_REQUEST['qsNo'];
$sql="select * from robot where qsNo=".$qsNo;
$robot=$pdo->query($sql);
$rows=$robot->fetchObject();
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
          <li><a href="robot.php" id="a">客服機器人管理</a></li>
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
            <a href="robot.php">客服機器人Q&A清單</a>
            <i class="material-icons">keyboard_arrow_right</i>
            <span id="currentLoc">新增客服機器人Q&A</span>
          </div>
          <form id="robotForm" action="robotChange.php">
            <div class="editArea">
              <div class="row">
                <div class="col-4">
                  <label for="qsNo">問題編號</label>
                </div>
                <div class="col-20">
                  <span id><?php echo $rows->qsNo;?></span>
                  <input type="hidden" id="qsNo" name="qsNo" value="<?php echo $rows->qsNo;?>">
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="defaultQ">預設問題</label>
                </div>
                <div class="col-20">
                <input type="text" id="defaultQ" name="defaultQ" value="<?php echo $rows->defaultQ;?>" maxlength="15">
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="ans1">預設答案1</label>
                </div>
                <div class="col-20">
                  <textarea name="ans1" id="ans1" cols="100" rows="5" value=""><?php echo $rows->ans1;?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="ans2">預設答案2</label>
                </div>
                <div class="col-20">
                  <textarea name="ans2" id="ans2" cols="100" rows="5" placeholder="若無則毋須填寫"><?php echo $rows->ans2;?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="ans3">預設答案3</label>
                </div>
                <div class="col-20">
                  <textarea name="ans3" id="ans3" cols="100" rows="5" placeholder="若無則毋須填寫"><?php echo $rows->ans3;?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="ans4">預設答案4</label>
                </div>
                <div class="col-20">
                  <textarea name="ans4" id="ans4" cols="100" rows="5" placeholder="若無則毋須填寫"><?php echo $rows->ans4;?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="">於對話框排列順序</label>
                </div>
                <div class="col-20">
                  <select name="qsOrd" id="">
                    <option value="0">不出現</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="confirmArea">
              <button class="btn btnCancel">取消</button>
              <button class="btn btnSubmit">確認修改</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
<script src="js/editRobot.js">
</script>