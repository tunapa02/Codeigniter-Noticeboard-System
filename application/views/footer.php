 <footer>
      <div class="container">
         <p>Noticeboard copyright &copy; 2017, All right reserve <span><?php echo anchor('auth/login_admin', 'Administrator'); ?></span></p>
      </div>
    </footer>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->  
    <script src="<?php echo site_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/chart.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/chart.js'); ?>"></script>
    <script>
    $(document).ready(function() {
		
        $(".carousel-indicators li:first").addClass("active");
        $(".carousel-inner .item:first").addClass("active");
		
       		
		
	});
	
	
	function activateNow(id){
		
		
			     
				$.ajax({
					
				   url : "<?php echo site_url('admin/post/activate_ajax'); ?>",	
				   type : 'POST',
				   data:  {id : id },
				   
				   beforeSend: function(){
				   $("#ativemode"+id).html("loading......");
				},
				   success: function(data){
					   
			    if(data =="activate"){
					$("#ativemode"+id).html('activated');
				}
				  //$('#change_state').fadeOut( function(){
				  
					      //$('#success').fadeIn();
					  
				  
			  
			      },
					
				
				});
			      
			   
			   
			
			
    }
	
	
	
</script>
<script>
       
	   var bardata = {
		     
			 labels : ["january", "febuery", "march "],
			 dataset : [
			 
			          {
					     fillColor: "#ffffee",
						 strokeColor : "#000",
						 data: [500,230,700]  
					  
					  }
					  
			 
			 
			 ]  
		   
		   
		   
		   };
		   
		   var siteChart = document.getElementById('siteChart').getContext('2d');
	       new Chart(siteChart).Bar(bardata);
	   
    
    </script>
  </body>
</html>
