        
         
         <div class="col-md-10">
                <div class="row">
                   
                   <div class="col-md-4">
                     
                       <div class="panel panel-primary text-center no-boder">
                       
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-5x"></i>
                            <h3><?php if(count($count_inactive_post)) {echo $count_inactive_post;}else{echo 0;}  ?>
                        </div>
                        <div class="panel-footer">
                            <h4 class="panel-eyecandy-title">Pending Post For Activation
                            </h4>
                        </div>
                      </div>
                     
                   </div>
                   <div class="col-md-4">
                        
                          <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                                             <h3><?php if(count($all_post_count)){echo $all_post_count;}else{echo 0;}?></h3>
                        </div>
                        <div class="panel-footer">
                            <h4 class="panel-eyecandy-title">Total Post
                            </h4>
                        </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                            <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-user fa-5x"></i>
                                   <h3><?php if(count($users)){echo $users;}else{echo 0;}?></h3>
                        </div>
                        <div class="panel-footer">
                            <h4 class="panel-eyecandy-title">Registered Users
                            </h4>
                        </div>
                    </div>
                        
                   </div>
                </div>  
               <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Visits: 1 Jan, 2014 - 30 Dec, 2016</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Registered Users</span>
                    <span class="progress-number"><b>160</b>/200</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Pending Post</span>
                    <span class="progress-number"><b>310</b>/400</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Page views</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Feedback Messages</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
         </div>  
         

      