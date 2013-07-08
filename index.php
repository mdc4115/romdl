<?php
$baseurl="http://www.theoldcomputer.com/roms/";
$decUrl = explode("?file=", $_POST['encUrl']);
$link = $baseurl ."". base64_decode($decUrl[1]);
$end = "Location:".$link;

if(isset($_POST['encUrl']))
{
header($end);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap/img/favicon.ico" rel="icon" type="image/x-icon">
	<title>Rom Downloader</title>
</head>
<body>
	<div class="container">
		<div class="hero-unit">
		<h1>Rom Downloader</h1>
		<div class="row">
			<div><p>Visit this <a href="http://www.theoldcomputer.com/roms/" target="_blank">link</a>. There you will find everything sorted by Manufacturer and then their consoles. Select a console, let's say Nintentdo <i class="icon-chevron-right icon-white"></i> NES. Then right-click on the rom you want and copy the link. Once copied Paste it into the box below and select download.</p></div>
		</div>
	</div>
		<form class="form-horizontal" id="form" action="" method="post">
			<div class="control-group">
				<label class="control-label" for="encUrl">Rom URL:</label>
				<div class="controls">
					<input id="encUrl" name="encUrl" type="text" placeholder="URL of ROM" required>
					<input class="btn btn-primary btn-medium" name="submit" type="submit" value="Download &darr;">
				</div>
		</div>
		</form>
	<!-- <b>Download URL: </b><a href="<?php echo $link; ?>"><?php echo $link; ?></a> -->
</div>
</body>
</html>
