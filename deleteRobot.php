<?php
try{
    include_once('connectDb.php');

    $sql="delete from robot where qsNo={$_REQUEST['qsNo']}";
    $pdo->exec($sql);
    echo 'success';
    }catch (PDOException $e) {
        echo "失敗",$e->getMessage(),"<br>";
        echo "行號",$e->getLine();
    }

?>