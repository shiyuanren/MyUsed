<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form>
		<img id="img" src="http://www.thinkphp.cn/Public/new/img/header_logo.png" width="130" height="130" border="0" />
		<input id="file_upload" name="file_upload" type="file" multiple="true" value="" />
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
				'buttonText' : '缩略图上传',
				'onUploadSuccess' : function(file, data, response) {
					alert(data);
            $('#img').attr('src','/uploads/'+ data);
            $('#images').val(data);
        }
			});
		});
	</script>
</body>
</html>