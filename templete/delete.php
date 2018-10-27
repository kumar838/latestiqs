<?php
include("config.php");

$id=$_GET['id'];
$delete = mysqli_query($conn,"DELETE FROM  qa_list where  id='$id'") or die(mysql_error());

if ($delete ) {
    echo "Record deleted successfully";
	header('Location:view.php');
} else {
    echo "Error deleting record: ";
}

?>