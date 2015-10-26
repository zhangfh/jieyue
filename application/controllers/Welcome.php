<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	//	define ('LANG', 'schinese');
	//	$this->lang->load('messages', LANG);
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

        public function confirm()
        {
                //Load the form validation library
		$this->load->helper(array('form', 'url'));
		//$this->lang->load('form_validation', 'schinese');
		$this->config->set_item('language', 'schinese'); //importang , fix bug
                $this->load->library('form_validation');
                //Set validation rules
			log_message('error', 'content:'.$this->input->post('content'));
			print_r($_POST);
			log_message('error', 'pageurl:'.$this->input->post('pageURL'));
			log_message('error', 'pagetitle:'.$this->input->post('pageTitle'));
			log_message('error', 'navTitle:'.$this->input->post('navTitle'));
                $this->form_validation->set_rules('pageURL', 'page URL', 'required');
                $this->form_validation->set_rules('pageTitle', 'page title', 'required');
                $this->form_validation->set_rules('navTitle', 'navigation title', 'required');

                if($this->form_validation->run() == FALSE) {
                        //Validation failed
			log_message('error', 'run false');
                        //$this->addPage();
			echo "validation error";
                }  else  {
                        //Validation passed
                        //Add the page
                        $this->load->library('Sioen');

			log_message('error', 'pagePublished:'.$this->input->post('pagePublished'));
			log_message('error', 'content'.$this->input->post('content'));
                	if ($this->input->post('content') != ""){
        			$sirTrevorInput = $this->input->post('content');
        			$converter = new Converter();
        			$HTMLContent = $converter->toHtml($sirTrevorInput);
			} else {
                		$HTMLContent = "";
                	}

                        //Return to page list
                        //redirect('/welcome/new', 'refresh');
			echo $HTMLContent;
                }
        }

}
