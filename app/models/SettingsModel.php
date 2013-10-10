<?php

namespace app\models;

/**
 *
 * @author Yuriy
 *        
 */
class SettingsModel extends Base {
	function __construct(){
		parent::__construct();
		$this->field('projects_root')->mandatory()->strNonBlank();
	}
}

?>