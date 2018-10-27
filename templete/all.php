<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<title>All Questions And Answes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
include('Admin/config.php');
//$db_handle = new DBController();
include('header.php');
?>
<div class="container-fluid">
	<div class="col-md-12">
		<h3>All Questions And Answes</h3><hr>
	</div>
	<div class="col-md-4 col-xs-12">
		<div class="bg-wbs list-boxs">
		<h3 class="text-success text-center">Interview</h3><hr style=" border: 1px solid green;">
		 <?php 
	$rs = mysqli_query($conn,"SELECT id, title, answer from qa_list where category='IT'") or die(mysql_error());
	
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
		  ?>
			<ul class="webliste">
				
				<li><i class="fa fa-file-o fa-fw"></i><?php  echo "<a href='qalist.php?id=". $row['id'] ."'>" . $row['title']."</a>" ?> </li>
				
			</ul>
			
			<?php }	 ?>
			 <div class="text-right"> <b><a href="http://latestinterviewquestions.com/interview.php" class="read_more">Read More</a></b></div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<div class="bg-wbs list-boxs">
		<h3 class="text-success text-center">Engineering</h3><hr style=" border: 1px solid green;">
		 <?php 
	$rs = mysqli_query($conn,"SELECT id, title, answer from qa_list where category='IT'") or die(mysql_error());
	
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
		  ?>
			<ul class="webliste">
				<li><i class="fa fa-file-o fa-fw"></i><?php  echo "<a href='qalist.php?id=". $row['id'] ."'>" . $row['title']."</a>" ?> </li>
				
			</ul>
			<?php }	 ?>
			 <div class="text-right"> <b><a href="http://latestinterviewquestions.com/engineering.php" class="read_more">Read More</a></b></div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<div class="bg-wbs list-boxs">
		<h3 class="text-success text-center">Medical</h3><hr style=" border: 1px solid green;">
		 <?php 
	$rs = mysqli_query($conn,"SELECT id, title, answer from qa_list where category='IT'") or die(mysql_error());
	
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
		  ?>
			<ul class="webliste">
				<li><i class="fa fa-file-o fa-fw"></i><?php  echo "<a href='qalist.php?id=". $row['id'] ."'>" . $row['title']."</a>" ?> </li>
				
			</ul>
			<?php }	 ?>
			 <div class="text-right"> <b><a href="http://latestinterviewquestions.com/medical.php" class="read_more">Read More</a></b></div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<div class="bg-wbs list-boxs">
		<h3 class="text-success text-center">Mciqs</h3><hr style=" border: 1px solid green;">
		 <?php 
	$rs = mysqli_query($conn,"SELECT id, title, answer from qa_list where category='IT'") or die(mysql_error());
	
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
		  ?>
			<ul class="webliste">
				<li><i class="fa fa-file-o fa-fw"></i><?php echo "<a href='qalist.php?id=". $row['id'] ."'>" . $row['title']."</a>" ?> </li>
				
			</ul>
			<?php }	 ?>
			 <div class="text-right"> <b><a href="http://latestinterviewquestions.com/mcqs.php" class="read_more">Read More</a></b></div>
		</div>
	</div>
	
	<div class="col-md-4 col-xs-12">
		<div class="bg-wbs list-boxs">
		<h3 class="text-success text-center">QUIZ</h3><hr style=" border: 1px solid green;">
		 <?php 
	$rs = mysqli_query($conn,"SELECT id, title, answer from qa_list where category='IT'") or die(mysql_error());
	
    $row = mysqli_num_rows($rs);
    while( $row = mysqli_fetch_assoc($rs))
        {
		  ?>
			<ul class="webliste">
				<li><i class="fa fa-file-o fa-fw"></i><?php  echo "<a href='qalist.php?id=". $row['id'] ."'>" . $row['title']."</a>" ?> </li>
				
			</ul>
			<?php }	 ?>
			 <div class="text-right"> <b><a href="http://latestinterviewquestions.com/quiz.php" class="read_more">Read More</a></b></div>
		</div>
	</div>
	

	<div class="clearfix"></div>
</div>
<!--
<div class="container-fluid">
	<div class="col-md-8">
		<div class="bg-wbs p10 mb10">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quibusdam sed, veritatis totam facere eaque veniam reprehenderit libero itaque possimus, esse omnis voluptatibus ad modi, ducimus provident error quae mollitia.
		</div>
	</div>
	<div class="col-md-4">
		<div class="bg-wbs p10 mb10">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat accusantium dolorum quas id! Quae excepturi numquam unde rerum vero, ullam, eos dolores laudantium id, asperiores illum dolorum non minus hic?
		</div>
	</div>
</div>
-->
<?php include('footer.php'); ?>
</body>
</html>