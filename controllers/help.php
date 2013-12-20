<?php

class Help extends Controller {

	function __construct() {
		parent::__construct();

		$this->view->render('help/index');
	}

	public function other($arg = false) {

		echo "We are in inside other <br />";
		echo "Optional " . $arg . "<br />";

		require 'models/help_model.php';
		$model = new Help_Model();
	}
}