<?php
	include("include/header.php");
?>
 <div class="page-title"><span>User Setting</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
  <div class="main-content container-fluid">
 		   
 	<div class="row">
 			
	 <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Contact Details
 					<div class="fright">
					  <button type="submit" class="btn btn-space btn-primary">Save</button>
                      <button class="btn btn-space btn-default">Edit</button>
					</div>
 				</div>
				<div class="divider1"></div>
				
                <div class="panel-body">
                  <form class="form-horizontal">
 					
 				   <div class="form-group">
                      <label class="col-md-3 control-label">Business Name</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" >
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Name</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" >
                      </div>
                    </div>
				
				   <div class="form-group">
                      <label class="col-md-3 control-label">Email</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" value="angie@lacampagnola.au">
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Sign up Date</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" value="7 July 2011" readonly="readonly">
                      </div>
                    </div>
				
			       <div class="form-group">
                      <label class="col-md-3 control-label">Phone</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" >
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Mobile</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="0443 123 321">
                      </div>
                    </div>
                      
                  </form>
                </div>
              </div>
            </div>
			
 	 <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Restaurant Details
 					<div class="fright">
					  <button type="submit" class="btn btn-space btn-primary">Save</button>
                      <button class="btn btn-space btn-default">Edit</button>
					</div>
 				</div>
				<div class="divider1"></div>
				
                <div class="panel-body">
                  <form class="form-horizontal">
 					
 				   <div class="form-group">
                      <label class="col-md-3 control-label">Street</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" >
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Suburb</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" >
                      </div>
                    </div>
				
				   <div class="form-group">
                      <label class="col-md-3 control-label">State</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="Victoria">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Post Code</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="3220">
                      </div>
                    </div>
					
				   
                      
                  </form>
                </div>
              </div>
            </div>
 			
	 <div class="col-md-5">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Business Details</div>
 				<div class="divider1"></div>
                <div class="panel-body">
					<form>
                    <div class="form-group xs-pt-10">
                      <label>ABN</label>
                      <input placeholder="Enter ABN" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                      <label>ACN</label>
                      <input placeholder="Enter ACN (if applicable)" class="form-control" type="text">
                    </div>
					
                    <div class="row xs-pt-15">
                       <div class="col-xs-12">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Save</button>
                          <button class="btn btn-space btn-default">Edit</button>
                        </p>
                      </div>
                    </div>
					
                  </form>
                  
                </div>
              </div>
            </div>
    	 
  	</div>
	
               
 </div>
</div>
 	 
 
 <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
       });
    </script> 
<?php
	include("include/footer.php")
?>  
   