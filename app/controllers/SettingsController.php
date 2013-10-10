<?php

namespace app\controllers;

/**
 *
 * @author Yuriy
 *        
 */
class SettingsController extends CRUD {
	function doForm($id = null) {
		parent::doForm ( 1 );
	}
	function doShow($id = null) {
		parent::doShow ( 1 );
	}
}

?>