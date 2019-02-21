<?php
//編輯被提交後run的php
try{
    include_once('connectDb.php');
    $qsOrd=$_REQUEST['qsOrd'];
    $qsNo=$_REQUEST['qsNo'];
    if($qsOrd!=0){
        //先select *看序號有沒有被別人佔據
        $sql="select qsOrd from robot where qsOrd={$qsOrd} and qsNo <> {$qsNo}";
        $ord=$pdo->query($sql);
        if($ord->rowCount()!=0){
            $rows=$ord->fetchObject();
            //有人是現在的順序，那現在的順序跟後面的順序就要+1存回去，5的要變成0
            //3變成4  4變成５
            $sql="update robot set qsOrd=qsOrd+1 where qsOrd>=".$rows->qsOrd;
            $pdo->exec($sql);
        }
    }
    $sql="update robot set defaultQ='{$_REQUEST['defaultQ']}' where qsNo=".$qsNo;
    $pdo->exec($sql);
    $sql="update robot set ans1='{$_REQUEST['ans1']}' where qsNo=".$qsNo;
    $pdo->exec($sql);
    $sql="update robot set ans2='{$_REQUEST['ans2']}' where qsNo=".$qsNo;
    $pdo->exec($sql);
    $sql="update robot set ans3='{$_REQUEST['ans3']}' where qsNo=".$qsNo;
    $pdo->exec($sql);
    $sql="update robot set ans4='{$_REQUEST['ans4']}' where qsNo=".$qsNo;
    $pdo->exec($sql);
    $sql="update robot set qsOrd='{$_REQUEST['qsOrd']}' where qsNo=".$qsNo;
    $pdo->exec($sql);

    $sql="update robot set qsOrd=0 where qsOrd>4";
    $pdo->exec($sql);
    header("Location:robot.php");

    }catch (PDOException $e) {
        echo "失敗",$e->getMessage(),"<br>";
        echo "行號",$e->getLine();
    }

?>