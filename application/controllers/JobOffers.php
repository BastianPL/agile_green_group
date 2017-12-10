<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class JobOffers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('JobOfferDAO');
	}

	public function index()
	{
		$viewData = array();
		$viewData['view'] = 'joboffers';
		$this->load->view('template', $viewData);
	}


}