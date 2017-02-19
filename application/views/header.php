<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php  echo $title   ;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
      
    <!-- Font awesome core CSS -->
    <link href="<?php echo site_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">  

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('assets/css/app.css'); ?>" rel="stylesheet">
    <style>
	
	  
	
	</style>
  </head>

  <body>
      
    <!-- header -->  
    <header>
       <div class="container">
           <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" class="logo img-responsive">
           </a>    
        <ul> 
          <li>
		  <?php
		      $ses_id = $this->session->userdata('user_id');
			  if(!empty($ses_id)){
				  
				    echo anchor('auth/logout', 'Logout', 'class="btn btn-primary text-white"'); 
				  }else{
					  
					    echo anchor('auth', 'Login', 'class="btn btn-primary text-white"'); 
					  }
		   ?>
           </li>
        </ul>
       </div>
    </header> <!-- header ends here -->   
   
    
    <!-- Navbar starts here -->  
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="button-label">Menu</span>
                    <div class="button-bars">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left navcat-color">
          
            <?php if(count($navlist)): ?>
            <?php foreach($navlist as $key => $value): ?>
            <li><?php echo anchor('home/category/' . $value['category_id'].'/'. url_title($value['category_name']), $value['category_name']); ?></li>
            <?php endforeach ;?>
            <?php endif; ?>
           
          </ul>
          <ul class="nav navbar-nav navbar-right header-buttons">
   <li><?php echo anchor('post', 'Post announcment', 'class="btn btn-primary text-white"'); ?></li>       
          </ul>    
        </div><!--/.nav-collapse -->
      </div>
    </nav><!-- Navbar ends here --><!-- Navbar ends here -->