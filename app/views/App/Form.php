<?php
use engine\VH;
use engine\helpers\view\MSG;

$msg = VH::MSG ()->render ( array (
		array (
				'header' => array (
						array (
								'_msg' => "Hi there" 
						) 
				) 
		) 
) );
?>
<form action="app/save" method="post">
	<div>
		name: <input name="name">
		<div></div>
		folder: <input name="folder">
		<div></div>
		<input type="submit" value="save">
	</div>
</form>