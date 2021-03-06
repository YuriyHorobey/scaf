<?php
//this is config array
//it will overwrite DSF/app/config/dsf.php
//which stores framework global setting
//load these settings with CFG::load();
return array (
		//optional 'root' route
		//defaults to 'home/index'
		//setting this to 'some/action results in
		//www.mysite.com will be served by SomeController::doAction()
		'home' => 'home',
		//database credentials
		'db' => array (
				//DSN: refer to your DB documentation
				//for mysql: http://www.php.net/manual/en/ref.pdo-mysql.connection.php
				//etc
				'dsn' => 'mysql:host=localhost;dbname=df_test',
				'user' => '',
				'pass' => ''
		),
		'locales' => array (
				'default' => 'en', //one of codes under 'available', see the next node
				'available' => array (
						//list of locales you serve if any
						//like: 'en', 'de', ...
				)
		)
);
?>