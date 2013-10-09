<?php
use engine\VH;
VH::contentFor ( 'title', 'Welcome' );
?><div class="app_box new_app">
	<h2>New / Import</h2>
</div><?php
$apps = VH::LST ( 'applist' )->startItem ();
?>
<div class="app_box">
	<h2>{{name}}</h2>
</div>
<?php
$apps->endItem ()->tplFooter ( '<div class="clear"></div>' )->render ();
?>