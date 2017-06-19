<?php
$dsn = 'mysql:dbname=WareHouseDB;host=127.0.0.1';
$user = 'root';
$pw = 'Neec2017!';

 $sql = "insert into Ranking values(".$_POST['score'].")";

// //SQLを実⾏
$dbh = new PDO($dsn, $user, $pw); //接続
$sth = $dbh->prepare($sql); //SQL準備
$sth->execute(); //実⾏

$sql = 'select * from Ranking ORDER BY score';
$sth = $dbh->prepare($sql); //SQL準備
$sth->execute(); //実⾏


$i = 0;
$file = 'Ranking.txt';
$current = '';
while( ($buff = $sth->fetch()) !== false && $i < 10){
     $current .= $buff['score'];
     $current .= ',';
     $i++;
}
echo $current;
//file_put_contents($file, $current);