<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()	{
		// Main method
			

		$this->load->view('shared/header');
		$this->load->view('welcome_view');
		$this->load->view('shared/footer');

	}
        public function addPage()
        {
                //Load the form helper
                $this->load->helper('form');
                //Load the view
		$this->load->view('shared/header');
                //$this->data['header'] = $this->load->view('admin/header', $this->data, true);
		$this->data['header']  = '';
                $this->load->view('admin/newpage', $this->data);
		$this->load->view('shared/footer');
        }

}
