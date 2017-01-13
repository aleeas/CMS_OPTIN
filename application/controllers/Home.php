<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	//user management
	public function role()
	{
		$this->load->view('usermanagement/role-user');
	}
	public function user(){
		$this->load->view('usermanagement/create-user');
	}
	public function logs()
	{
		$this->load->view('usermanagement/log-user');
	}

	public function list_registration()
	{
		$this->load->view('optinmanagement/list-registration');
	}

	public function optout_feature()
	{
		$this->load->view('optinmanagement/optout-feature');
	}

	public function articleM()
	{
		$this->load->view('optinmanagement/article');
	}
	public function carousel()
	{
		$this->load->view('optinmanagement/carousel');
	}
}
