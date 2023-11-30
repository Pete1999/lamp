<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$pdo = require 'connect.php';

$sql = 'select getall_cash_flow();';
$statement = $pdo->prepare($sql);

$pdo->beginTransaction();
$statement->execute();
$sql = 'fetch all cash_flow_refc;';
$res = $pdo->query($sql);
$rset = $res->fetchAll();
?>
<div id="content">
<table class=list>
<tr>
	<th>Tran Date</th>
	<th>Description</th>
	<th>Expense</th>
	<th>Income</th>
	<th>Category</th>
	<th>Notes</th>
</tr>
<?php foreach($rset as $row){ ?>
     <tr>
	 <td><?php print $row['tran_date']; ?></td>
	 <td><?php print $row['description']; ?></td>
	 <td><?php print $row['expense']; ?></td>
	 <td><?php print $row['income']; ?></td>
	 <td><?php print $row['category']; ?></td>
	 <td><?php print $row['notes']; ?></td>
     </tr>
<?php } ?>
</table>
</div>






