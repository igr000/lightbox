<?php
/********************************************************************************************
-- Lightbox_view controller class loads the lightbox_view page. -----------------------------
---------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ----------------------------------------------------------------
********************************************************************************************/
class Lightbox_view extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//loads lightbox_view page
		$this->load->view('lightbox_view');
	}
}
?>