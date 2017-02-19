<?php  $this->load->view('admin/header');?>

 <!-- main body content -->
  
<section>
   <div class="container-fluid">
      <div class="row">
      
<?php  $this->load->view('admin/nav_admin');?>      
      
<?php  $this->load->view($main);?>      




       </div> 
   </div>
</section>


<?php  $this->load->view('footer');?>