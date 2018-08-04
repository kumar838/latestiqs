<?php 
include('liqsadmin/config.php');

$rs = mysqli_query($conn,"SELECT cat_name from categories") or die(mysql_error());

echo "<ul>";
$row = mysqli_num_rows($rs);
while( $row = mysqli_fetch_assoc($rs))
{
  echo "<li>";
  echo "<a href='alliqs.php?cat=" . $row['cat_name'] . "'>" . $row['cat_name'] . "</a><br />";
  //echo $row['cat_name'] . "<hr />";
  echo "</li>";
}
echo "</ul>";


?>