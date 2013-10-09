<?php
use engine\VH;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>DSF Scaffolding :: <?php
VH::place ( 'title' );
?></title>
<?php VH::baseTag();?>
<link rel="stylesheet" type="text/css" href="public/css/main.css" />
</head>
<body>
	<div class="wrapper">
	<div class="header"></div>
		<div class="content">
	 <?php VH::contentHere();?>
	 </div>
	</div>
</body>
</html>