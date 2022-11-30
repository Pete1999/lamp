<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$pdo = require 'connect.php';

$sql = 'select select_candidate_vendor(:cand_v,:extend,:summary);';
$statement = $pdo->prepare($sql);
$cvparam = [ 
	'cand' => 'COSTCO',
	'ext' => 0,
	'summ' =>true
	];
$statement->bindValue(':cand_v',$cvparam['cand'],PDO::PARAM_STR);
$statement->bindValue(':extend',$cvparam['ext'],PDO::PARAM_INT);
$statement->bindValue(':summary',$cvparam['summ'],PDO::PARAM_BOOL);

$pdo->beginTransaction();
$statement->execute();
$sql = 'fetch all ccursor;';
$res = $pdo->query($sql);
$rset = $res->fetchAll();
foreach($rset as $row){
 print $row['category'] . "\t";
 print $row['cand_vendor'] . "\t";
 print $row['alt_cand_vendor'] . "\t";
 print $row['vendor_cnt'] . "\t";
 print $row['category_vendor_cnt'] . "\n";
 
}






