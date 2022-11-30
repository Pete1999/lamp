<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello postgres unix</p>'; 
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
  $dbconn = pg_connect("host=fedora dbname=shandbox user=peter password=oracle")
           or die('Could not connect: ' . pg_last_error());
  $query = 'begin; select select_candidate_vendor($1,$2,$3);';
  $result = pg_prepare($dbconn,"ccursor",$query); 
  $summarize = True;
  $size = 0;
  $result = pg_execute($dbconn,"ccursor",array("COSTCO",$size,$summarize));
  echo "<table>\n";
   while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
  echo"</table>\n";
  pg_free_result($result);
  pg_close($dbconn);
 ?>
 </body>
</html>
