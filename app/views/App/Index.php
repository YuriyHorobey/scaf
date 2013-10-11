<?php
use engine\VH;
VH::contentFor ( 'title', 'Welcome' );
?><div class="app_box new_app">
	<h2>New / Import</h2>
	<a href="app/form" title="Add or import existing appliaction"
		class="new_app_link"></a>
</div><?php
$apps = VH::LST ( 'app' )->tplEmpty ( '<div class="no_apps"><div class="no_apps_arrow"></div>There are no applications registered yet; add some.</div>' )->startItem ();
?>
<div class="app_box">
	<h2><a href="app/show?id={{id}}">{{name}}</a></h2>
</div>
<?php
$apps->endItem ()->tplFooter ( '<div class="clear"></div>' )->render ();
?>
<div class="clear"></div>