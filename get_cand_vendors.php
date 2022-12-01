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
?>
<div id="content">
<table class=list>
<tr>
	<th>Category</th>
	<th>Cand Vendor</th>
	<th>Alt Cand Vendor</th>
	<th>Vendor Count</th>
	<th>Category-Vendor Count</th>
</tr>
<?php foreach($rset as $row){ ?>
     <tr>
	 <td><?php print $row['category']; ?></td>
	 <td><?php print $row['cand_vendor']; ?></td>
	 <td><?php print $row['alt_cand_vendor']; ?></td>
	 <td><?php print $row['vendor_cnt']; ?></td>
	 <td><?php print $row['category_vendor_cnt']; ?></td>
     </tr>
<?php } ?>
</table>
</div>






