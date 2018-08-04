<?php 

include('liqsadmin/config.php');

$cat= $_GET['cat'];

$alliqs = mysqli_query($conn,"SELECT id, question,answer from latest_iqs_ans where category='$cat'") or die(mysql_error());

//print_r($alliqs);

$row = mysqli_num_rows($alliqs);

while( $row = mysqli_fetch_assoc($alliqs))
{
//print_r($row );

  echo "<li>";
  echo "Question:" . $row['question'].'</br>'; 
  echo "Answer:" . $row['answer'];
  echo "</li>"; 
}
echo "</ul>";


?>