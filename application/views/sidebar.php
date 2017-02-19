    <!-- Sidebar -->
    <div class="col-md-4">
                <div class="well">
                   <h4>Search Board</h4>
                   <?php echo form_open('home/search'); ?>
                    <div class="input-group">
                    
                      <input type="text" class="form-control" name="term" placeholder="Search">
                      <span class="input-group-btn">
                          
                         <button class="btn btn-primary" type="submit" name="mysubmit">
                           <span class="glyphicon glyphicon-search"></span>
                         </button>
                      </span>    
                    </div>
                   <?php echo form_close(); ?> 
                </div>
                
                <div class="well">
                   <h4>Recent posts</h4>
                   <ul class="list-unstyled">
                    <?php if(count($sidebar)): ?>
                    <?php foreach($sidebar as $bar): ?>
                    <li><?php echo anchor('home/post/' . $bar['post_id'] .'/'. url_title($bar['post_title']), ucfirst($bar['post_title'])); ?></li>
                     
                      <span><?php echo $bar['created'] ;?></span>
                      <?php endforeach;?>
                      <?php endif; ?>
                   </ul>    
             </div>
    </div>
  <!-- end -->  