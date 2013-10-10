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
<link rel="stylesheet" type="text/css" href="public/css/form.css" />
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<ul class="top_nav">
				<li><a id="nav_home" href="app">home</a></li>
				<li><a id="nav_settings" href="settings/show">settings</a></li>
			</ul>
		</div>
		<div class="content">
			<h1><?php VH::place ( 'title' );?></h1>
	 <?php
		$err = VH::LST ( '_errors' )->tplHeader ( '<div class="errors"><ul>' )->tplItem ( '<li>{{0}}</li>' )->tplFooter ( '</ul></div>' )->render();
		dbg(VH::dget('_errors'));
		VH::contentHere ();
	  ?>
	 </div>
	</div>
</body>
</html>