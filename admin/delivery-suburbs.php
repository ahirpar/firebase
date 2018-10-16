<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Delivery Suburbs</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
           
		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">Delivery Suburbs 
				<div class="fright">
				<button class="btn btn-space btn-default">Edit</button>
				<button class="btn btn-space btn-default" data-toggle="modal" data-target="#deliver">Add Suburb</button>
				
				</div>
				</div>
				
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Suburb</th>
                        <th>Past 24 Hours</th>
                        <th>Ave. Order Spend</th>
                        <th>Ave. Delivery Times</th>
                        <th>Delivery Cost</th>
 						<th>Popularity</th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Penelope Thornton</td>
                        <td>14 Orders</td>
                        <td>$23</td>
						<td>48 minutes</td>
                        <td>$8</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 45%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
					  <tr>
                        <td>Justine Myranda</td>
                        <td>25 Orders</td>
                        <td>$32.50</td>
						<td>21 minutes</td>
                        <td>$7</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 60%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
					  <tr>
                        <td>Penelope Thornton</td>
                        <td>142 Orders</td>
                        <td>$231</td>
						<td>48 minutes</td>
                        <td>$82</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 90%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
					  <tr>
                        <td>Justine Myranda</td>
                        <td>25 Orders</td>
                        <td>$32.50</td>
						<td>21 minutes</td>
                        <td>$7</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 60%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
					  <tr>
                        <td>Penelope Thornton</td>
                        <td>14 Orders</td>
                        <td>$23</td>
						<td>48 minutes</td>
                        <td>$8</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 35%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
					  <tr>
                        <td>Justine Myranda</td>
                        <td>25 Orders</td>
                        <td>$32.50</td>
						<td>21 minutes</td>
                        <td>$7</td>
 						<td class="milestone"> 
                            <div class="progress">
                              <div style="width: 10%" class="progress-bar progress-bar-success"></div>
                            </div>
                          </td>
                      </tr>
					  
                      </tbody>
 					
                  </table>
                </div>
				
				<div class="row">
						<div class="col-md-5 tableentrieas col-sm-5 col-xs-12">
							 <P>Showing 1 to 6 of 57 entries</P>
						</div>
						
						
						<div class="col-md-4 col-md-offset-2 tablepagination col-sm-6 col-xs-12">
							<nav>
                    <ul class="pagination">
                      <li><a href="#" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-left"></span></a></li>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>
                    </ul>
                  </nav>
						</div>
				 	
					</div>
                </div>
				
   	 		</div>
  	</div>
	
	 
	 
	 
 	 	<div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Delivery Coverage Map </div>
				<p class="divider1"></p>
                <div class="panel-body">
                  <div  class="content">
 				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16752.431526582983!2d144.35134893808615!3d-38.15098411968797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad4141c29a5d0cf%3A0x5045675218ce990!2sGeelong+VIC+3220%2C+Australia!5e0!3m2!1sen!2sin!4v1502962892826" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				  </div>
                </div>
              </div>
            </div>
          </div>
	 
  
              
 </div>
</div>



<!-----  model  --------> 
	<div id="deliver" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog col-md-1 ">
        <div class="modal-content">
           <div class="modal-header btop5"  >
            <h3>Add Delivery Status</h3>
			
          </div> 
		  <p class="divider1"></p>
          <div class="modal-body">
             	<div class="">
					<div class="col-md-12">
						 
 							<div class="text-center">
        					<form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                      
                    <div class="form-group">
                      <label class="col-md-3 control-label">Voucher Code</label>
                      <div class="col-md-8">
                        <input  placeholder=" " class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Postcode</label>
                      <div class="col-md-8">
                        <input  placeholder=" " class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
					  <label class="col-md-3 control-label mr13">Delivery Cost</label>
						<div class="input-group xs-mb-15 col-md-8"><span class="input-group-addon">$</span>
                          <input class="form-control" type="text"><span class="input-group-addon">.00</span>
                        </div>
					</div>
 					 
					
					<div class="row xs-pt-15">
                       
                      <div class="col-md-12">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary btn-lg">Add Delivery Suburb</button>
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
    </div>
	
 	  
 	   
 	
 	
	 <style>
	 	.modal-dialog{ width:100% !important;}
 		.modal-dialog {  margin: 64px auto !important;  width: 600px;}
 	  </style>
  <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
       });
    </script> 
   
 
<?php
	include("include/footer.php")
?>  
   