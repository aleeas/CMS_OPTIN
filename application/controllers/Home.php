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

	public function profile_management()
	{
		$this->load->view('optinmanagement/profile-management');
	}

	public function campaign_management()
	{
		$this->load->view('optinmanagement/campaign_management');
	}

	public function articleM()
	{
		$this->load->view('optinmanagement/article');
	}
	public function carousel()
	{
		$this->load->view('optinmanagement/carousel');
	}
	public function link_management()
	{
		$this->load->view('optinmanagement/link-management');
	}
	public function rss_feed()
	{
		$this->load->view('optinmanagement/rss-feed');
	}
	public function menu_management(){
		$this->load->view('optinmanagement/web-management/menu_management');
	}
	public function reward_management(){
		$this->load->view('optinmanagement/web-management/reward_management');
	}

	public function surveyquiz_online(){
		$this->load->view('optinmanagement/web-management/surveyquiz_online');
	}

<<<<<<< HEAD
	public function wheelfortune(){
		$this->load->view('optinmanagement/web-management/wheel-fortune');
	}

	public function luckydraw(){
		$this->load->view('optinmanagement/web-management/lucky-draw');
=======
	public function coin_management(){
		$this->load->view('optinmanagement/web-management/coin_management');
>>>>>>> a5712579fd79e5c6171cb2a07b7e6f8f093f90d2
	}
	public function visitor(){
		$this->load->view('report/visitor');
	}
	public function subscribe(){
		$this->load->view('report/optin-subscriber-regional');
	}

}
