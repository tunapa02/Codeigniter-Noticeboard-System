<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller {

    public function __construct()
	{
	       parent::__construct();
	
	}

    /*
	 * this method displays all users for the admin
	 *
	 */
	public function index()
	{   
	    
	    $data['title'] = 'Users | Admin';
		$data['main']  = 'admin/users/users';
		$data['users'] = $this->user_model->get_users_admin();
		$this->load->view('admin/template_admin', $data);
	}
	
	
	
	
}//end of class
