<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

    public function __construct()
	{
	       parent::__construct();
	
	}

  /**
   * this index method loads all the announcement to the homepage
   * and displays the home page
   *
   */
	public function index()
	{   
	     
	    $data['title'] = 'Notice Board';
		$data['main'] = 'public/home';
		$data['posts'] = $this->post_model->get_post_with_users();
		$data['slide_post'] = $this->post_model->get_featured_post();
		$data['navlist'] = $this->category_model->get_category_nav();
		$data['sidebar'] = $this->post_model->resently_added_post();
		$this->load->view('template', $data);
		
	}
	
  /**
   * this post method gets a post by its id
   *
   */
    public function post($id)
	{
		 $id = $this->uri->segment(3);
		 
		 $data['title'] = ' Post | Notice Board';
		 $data['main']  = 'public/post';
		 $data['navlist'] = $this->category_model->get_category_nav();
		 $data['sidebar'] = $this->post_model->resently_added_post();
		 $data['posts'] = $this->post_model->get_post_by_id($id);
		 
		 $this->load->view('template', $data);

	
	}
	
	
  /*@ this category method get category by its id 
   *@
   **/
	public function category($id)
	{   
	    //getting the category id from the url
		$id = $this->uri->segment(3);
		
		$data['title'] = 'Category | Notice board';
		$data['main']  = 'public/category';
		$data['navlist'] = $this->category_model->get_category_nav();
		$data['sidebar'] = $this->post_model->resently_added_post();
		$data['category'] = $this->category_model->get_category_by_id($id);
		 //dump($data['category']);
		$this->load->view('template', $data);

		
       
	
	}
	
	
	
	
	
  /** 
   * this search method process the user search query
   * and displays the result
   *
   */
   public function search()
	{   
	
		     $term = trim($this->input->post('term'));
		 
		 if($term){
			    
			   $data['search_result'] = $this->post_model->search($term);
			   $data['count'] = $this->post_model->search_count($term);
			   
			 }else{
				   redirect('home', 'refresh');
				 }
		  
		  $data['title'] = 'search | Notice Board';
		  $data['search_term'] = $term;
		  $data['main'] = 'public/search';
		  $data['sidebar'] = $this->post_model->resently_added_post();
		  $data['navlist'] = $this->category_model->get_category_nav();
		  $this->load->view('template', $data);
		  	
	     
	    
	}
   
	
	
	
	
}



