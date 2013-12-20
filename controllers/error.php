<?php

class Error extends Controller {

	function __construct() {
		parent::__construct();

		//echo "This is an error!<br />";

		$this->view->msg = 'This page doesnt exists.';
		$this->view->render('error/index');
	}
}