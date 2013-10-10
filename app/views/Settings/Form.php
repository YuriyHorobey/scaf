<?php
use engine\VH;
VH::contentFor('title', 'Edit settings');
?>

<form action="settings/save" method="post">
	<input type="hidden" value="<?php VH::dout('settings/id')?>"
		name="id" />
	<table>
		<tr>
			<td class="form_label_td">Projects root:</td>
			<td class="form_input_td"><input type="text" class="form_input_large"
				value="<?php VH::dout('settings/projects_root')?>"
				name="projects_root" /></td>
		</tr>
		<tr>
			<td class="form_buttons_td" colspan="2"><input type="submit"
				value="save"></td>
		</tr>
	</table>
</form>
