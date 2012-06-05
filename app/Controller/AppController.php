<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

 	public $components= array(
		'Session',
		'Brownie.BrwPanel',
		'DebugKit.Toolbar',
	);

	public $helpers = array('Html', 'Form', 'Session');

	//public $brwMenu = array();


	function beforeRender() {
		$this->_setTitle();
	}

	function _setTitle() {
		if (!empty($this->pageTitle)) {
			$this->pageTitle .= ' - ';
		}
		$this->pageTitle .= $this->companyName;
		$this->set('title_for_layout', $this->pageTitle);
	}


}