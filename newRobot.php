<?php
try{
    //新增robot提交後run的php
    include_once('connectDb.php');
    $qsOrd=$_REQUEST['qsOrd'];

    if($qsOrd!=0){
        //先select *看有沒有＝現在傳進來的qsOrd 有的話其他人就要往後挪
        $sql="select qsOrd from robot where qsOrd={$qsOrd}";
        $ord=$pdo->query($sql);
        if($ord->rowCount()!=0){
            $rows=$ord->fetchObject();
            //有人是現在的順序，那現在的順序跟後面的順序就要+1存回去，5的要變成0
            //3變成4  4變成５
            $sql="update robot set qsOrd=qsOrd+1 where qsOrd>=".$rows->qsOrd;
            $pdo->exec($sql);
        }
    }
    $sql="insert into robot(defaultQ,ans1,ans2,ans3,ans4,qsOrd)  values(:defaultQ,:ans1,:ans2,:ans3,:ans4,:qsOrd)";
    $insert=$pdo->prepare($sql);
    $insert->bindValue(':defaultQ',$_REQUEST['defaultQ']);
    $insert->bindValue(':ans1',$_REQUEST['ans1']);
    $insert->bindValue(':ans2',$_REQUEST['ans2']);
    $insert->bindValue(':ans3',$_REQUEST['ans3']);
    $insert->bindValue(':ans4',$_REQUEST['ans4']);
    $insert->bindValue(':qsOrd',$_REQUEST['qsOrd']);
    $insert->execute();

    $sql="update robot set qsOrd=0 where qsOrd>4";
    $pdo->exec($sql);
    header("Location:robot.php");

    }catch (PDOException $e) {
        echo "失敗",$e->getMessage(),"<br>";
        echo "行號",$e->getLine();
    }

?>