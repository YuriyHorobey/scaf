<?php

namespace app\controllers;

use app\controllers\Base;
use app\models\AppModel;

class AppController extends Base {
	function doForm($id) {
	}
	function doIndex() {
		$model = new AppModel ();
		$data = $model->lst ();
		$this->set('applist', $data);
	}
}

?>