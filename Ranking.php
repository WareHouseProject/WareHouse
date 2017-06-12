<?php
$dsn = 'mysql:dbname=WareHouseDB;host=127.0.0.1';
$user = 'root';
$pw = 'Neec2017!';

$sql = 'SELECT * FROM Ranking';

//SQLを実⾏
$dbh = new PDO($dsn, $user, $pw); //接続
$sth = $dbh->prepare($sql); //SQL準備
$sth->execute(); //実⾏

//結果を取得
while( ($buff = $sth->fetch()) !== false ){
 print implode(', ', $buff);
 print "¥n";
}