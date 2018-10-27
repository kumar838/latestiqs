<?php
include("config.php");
include('fckeditor/fckeditor.php');
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	
	/* Validation to check if Terms and Conditions are accepted */


	if(!isset($error_message)) {
		include("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO qa_list (title, answer, category, qtype) VALUES
		('" . $_POST["question"] . "', '" . $_POST["answer"] . "', '" . $_POST["category"] . "','" . $_POST["type"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}

$sBasePath = 'fckeditor/';
$oFCKeditor = new FCKeditor('answer') ;
$oFCKeditor->Height = "400px";
$oFCKeditor->Width = "800px";
$oFCKeditor->BasePath = $sBasePath;
if($answer!='') $oFCKeditor->Value = $answer; else $oFCKeditor->Value = '';
?>
<html>
<head>
<title>Latest Interview Questions</title>
<style>
body{
	width:1000px;
	font-family:calibri;
	margin-left:70px;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}


.form-control {
padding-right: 613px;
padding-bottom:10px;
}

.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>

<script src="https://cdn.ckeditor.com/4.10.1/standard-all/ckeditor.js"></script>
</head>
<body>
    <h3>Edit post</h3>
<form name="frmRegistration" method="post" action="">
<table border="0" width="100%" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>Title</td>
<td class="form-group"><input type="text" class="form-control" name="question" value="<?php if(isset($_POST['question'])) echo $_POST['question']; ?>"></td>
</tr>
<tr>
<td>Questions And Answers</td>

<td><?php $oFCKeditor->Create() ; ?></td>
</tr>
<tr>
<td>Category</td>
<td>
<select name="category" class="form-control">
<option value="">Select Category</option>
<?php
include("config.php");
$sql = mysqli_query($conn,"select cat_name from categories");
//print_r($sql);exit;
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['cat_name'] ."'>" .$row['cat_name'] ."</option>" ;
}
?>
</select>

</td>
</tr>
<tr>
<td>Type</td>
<td>

<select name="type">
  <option value="">Select type</option>
  <option value="mcqs">mcqs</option>
  <option value="iqs">iqs</option>
</select>

</td>
</tr>

<tr>
<td colspan=2>
 <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>

</body>

</html>