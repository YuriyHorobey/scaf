<?php
use engine\VH;
VH::contentFor ( 'title', 'Settings' );
?>
Projects path: <?php VH::dout('settings/projects_root');  ?>
<a href="settings/form" class="link_button btn40 btn_no_text  lb_edit">Edit</a>