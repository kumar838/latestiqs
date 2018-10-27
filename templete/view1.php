<?php 
include('config.php');
//$db_handle = new DBController();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h4>List of records</h4>
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                  <thead>
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>ID</th>
                   <th>Title</th>
                    <th>Answer</th>
                     <th>Category</th>
                     <th>Type</th>
                      <th>Edit</th>
                       <th>Delete</th>
               </thead>
                   
<?php 

     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
	
        $total_pages_sql = "SELECT COUNT(*) FROM qa_list";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
	
	$rs = mysqli_query($conn, "SELECT * FROM qa_list LIMIT $offset,$no_of_records_per_page") or die(mysql_error());
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
?>          
  <tbody>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
     <td><?php echo $row[id] ?></td>
    <td><?php echo $row[title] ?></td>
    <td><?php echo substr($row[answer], 0, 10)?> </td>
    <td><?php echo $row[category] ?></td>
    <td><?php echo $row[qtype] ?></td>
    <td><?php echo "<a href='edit.php?id=". $row['id'] ." '>Edit</a>" ?> </td>
    <td><?php echo "<a href='delete.php?id=". $row['id'] ." '>Delete</a>" ?></td>
   </tr>
 </tbody>
    <?php } ?>
</table>

<div class="clearfix"></div>
<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
   </div>
  </div>
	</div>
</div>


<script>
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
   </script>


 /* https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html */