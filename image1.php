<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<title>Enhanced Image Plugin</title>
	<script src="https://cdn.ckeditor.com/4.10.1/standard-all/ckeditor.js"></script>
</head>

<body>

	<textarea cols="80" id="editor1" name="editor1" rows="10" >&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="https://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;
	</textarea>

	<script>
		CKEDITOR.replace( 'editor1', {
			extraPlugins: 'image2,uploadimage ,imageuploader',

			toolbar: [
				{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
				{ name: 'styles', items: [ 'Styles', 'Format' ] },
				{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
				{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
				{ name: 'links', items: [ 'Link', 'Unlink' ] },
				{ name: 'insert', items: [ 'Image', 'Table' ] },
				{ name: 'tools', items: [ 'Maximize' ] },
				{ name: 'editing', items: [ 'Scayt' ] }
			],

			// Configure your file manager integration. This example uses CKFinder 3 for PHP.
			filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
			filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

			// Upload dropped or pasted images to the CKFinder connector (note that the response type is set to JSON).
			uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

			// Reduce the list of block elements listed in the Format drop-down to the most commonly used.
			format_tags: 'p;h1;h2;h3;pre',
			// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
			removeDialogTabs: 'image:advanced;link:advanced',

			height: 450
		} );
	</script>
</body>

</html>

https://sdk.ckeditor.com/samples/image2.html

https://github.com/xsmo/Image-Uploader-and-Browser-for-CKEditor
