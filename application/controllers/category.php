<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Frontend_Controller {

    public function __construct()
	{
	       parent::__construct();
	
	}

 
	

  /*@ this method get a category by id
   *@ 
   *
	public function category($id)
	{   
	    //getting the category id from the url
		$id = $this->uri->segment(2);
		dump($id);
		
		$data['title'] = 'Category | Notice board';
		$data['main']  = 'public/category';
		$data['navlist'] = $this->category_model->get_category_nav();
		$data['category'] = $this->category_model->get_category_by_id($id);
		
		$this->load->view('template', $data);

		
       
	
	}
	
	*/
	 
	 
	 
}
