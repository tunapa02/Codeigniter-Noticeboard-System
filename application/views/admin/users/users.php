         <div class="col-md-10">
           <div class="row">
             <div class="col-md-6">
                <h2 class="page-header"><i class="glyphicon glyphicon-dashboard"></i> Users</h2>  <h3>All Users</h3>
             </div>
             <div class="col-md-6">
                 <div class="btn-group actions" role="group" aria-label="...">
                          <a href="" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> New</a>
                          <a href="" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                          <a href="" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                        </div>
             </div>
            </div> 
              <table class="table table-striped">
                 <tr>
                   <th>Name</th>
                   <th>Reg No</th>
                 </tr>
                 <?php foreach($users as $user): ?>
                  <tr>
                    <td><?php echo $user['name']; ?></td>  
                    <td><?php echo $user['reg_no']; ?></td>  
                  </tr>
                 <?php endforeach; ?> 
              </table>
              <a href="" class="btn btn-default">View all</a>
             
         </div>  

      