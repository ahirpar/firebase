<?php
	include("include/header.php");
?>

 <div class="page-title"><span>Shifts</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
           
		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">Shift Hours
				
				<div class="fright">
				<button class="btn btn-space btn-default hover">Add Shift</button>
				</div>
				</div>
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Day</th>
                        <th>Opening Start</th>
                        <th>Opening End </th>
                        <th>Delivery Start</th>
                        <th>Delivery End</th>
						<th>Ave.Revenue</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Monday</td>
                        <td>11:00 am</td>
                        <td>2:00 pm</td>
						<td>Nill</td>
                        <td>Nill</td>
						<td>$780</td>
						<td><button class="btn btn-space btn-default">Edit</button></td>
                      </tr>
					  
					 <tr>
                        <td>Monday</td>
                        <td>4:00 pm</td>
                        <td>6:00 pm</td>
						<td>5:00 pm</td>
                        <td>9:00 pm</td>
						<td>$1000</td>
						<td><button class="btn btn-space btn-default">Edit</button></td>
                      </tr>
					  
					  <tr>
                        <td>Tuesday</td>
                        <td>11:00 am</td>
                        <td>2:00 pm</td>
						<td>Nill</td>
                        <td>Nill</td>
						<td>$730</td>
						<td><button class="btn btn-space btn-default">Edit</button></td>
                      </tr>
					  
 					  <tr>
                        <td>Tuesday</td>
                        <td>4:00 pm</td>
                        <td>9:30 pm</td>
						<td>5:00 pm</td>
                        <td>9:00 pm</td>
						<td>$1200</td>
						<td><button class="btn btn-space btn-default">Edit</button></td>
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
                       <li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>
                    </ul>
                  </nav>
						</div>
				 	
					</div>
                </div>
				
   	 		</div>
  	</div>
	
	<div class="row">
	  <div class=" ">
		
		<div class="col-md-8">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">Highest Revenue Shifts
				
				<div class="tools dropdown">
				<a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
				</div>
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th> Shifts</th>
                        <th> Ave.Revenue</th>
                        <th> Orders</th>
						<th> Rank</th>
                       </tr>
                    </thead>
                    <tbody class="no-border-x">
					
                      <tr>
                        <td>Saturday (12:00 pm to 10:30 pm)</td>
                        <td>$2500</td>
                        <td>140</td>
						<td>1</td>
                       </tr>
 					  
					  <tr>
                        <td>Sunday (11:00 am to 4:00 pm)</td>
                        <td>$1800</td>
                        <td>150</td>
						<td>2</td>
                       </tr>
					   
					   <tr>
                        <td>Monday (2:00 pm to 8:00 pm)</td>
                        <td>$1790</td>
                        <td>120</td>
						<td>3</td>
                       </tr>
					   
					   <tr>
                        <td>Friday (2:00 pm to 9:30 pm)</td>
                        <td>$500</td>
                        <td>20</td>
						<td>4</td>
                       </tr>
					   
                     </tbody>
 					
                  </table>
                </div>
				
				 
                </div>
				
   	 		</div>
			
			
 		
		<div class="col-md-4">
              <div class="panel">
                <div class="panel-heading panel-heading-divider bline">Add new closed dates</div>
                <div class="panel-body">
				
                  <form class="form-horizontal">
 					
					<div class="form-group">
                       <label class="col-sm-3 control-label"> Start </label>
                      <div class="col-md-7">
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input size="16" type="text" value="" class="form-control datepicker" name="date"><span class="input-group-addon btn btn-primary" ><i class="icon-th mdi mdi-calendar"></i></span>
                       </div>
                    </div>
                    </div>
					
					
					<div class="form-group">
                       <label class="col-sm-3 control-label"> End </label>
                      <div class="col-md-7">
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input size="16" type="text" value="" class="form-control datepicker" name="date"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                       </div>
                    </div>
                    </div>
					
					<div class="form-group">
					<label class="col-md-3 control-label">  </label>
						<div class="col-md-9">
                        <div class="be-checkbox">
                          <input id="check3" checked="" type="checkbox">
                          <label for="check3">Close website from all orders</label>
                        </div>
                        <div class="be-checkbox">
                          <input id="check4" type="checkbox">
                          <label for="check4">Just close deliveries</label>
                        </div>
                         
                      </div>
					  </div>
					
  					
                    <div class="row xs-pt-15">
                       
                      <div class="col-md-12">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Add Close Date</button>
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


 
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/daterangepicker/css/daterangepicker.css"/>
	
      <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
	 
     <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
	
	
 
 
 
<?php
	include("include/footer.php")
?>  
   