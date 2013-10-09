<?php

namespace app\models;

use app\models\Base;

/**
 *
 * @author Yuriy
 *        
 */
class AppModel extends Base {
	
	/**
	 */
	public function __construct() {
		parent::__construct ();
		$this->field ( 'name' )->mandatory ()->strRange ( 1, null );
		$this->field ( 'folder' );
	}
}

?>