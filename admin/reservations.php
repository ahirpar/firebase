<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Reservations</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
           
		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">Current Reservations</div>
				
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Adults</th>
                        <th>Children </th>
                        <th>Infant</th>
                        <th>Date and time</th>
						<th>Status</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Simon Ryan</td>
                        <td>3</td>
                        <td>2</td>
						<td>0</td>
                        <td> May 6,2016<br><span class="grayc"> 8:30</span></td>
						<td>Approved</td>
						<td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#reservations">View</button></td>
                      </tr>
					  
					  <tr>
                        <td>Brody Frog</td>
                        <td>10</td>
                        <td>5</td>
						<td>2</td>
                        <td> August 15,2016<br><span class="grayc"> 16:30</span></td>
						<td>Unconfirmed</td>
						<td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#reservations1">View</button></td>
                      </tr>
					  
					  <tr>
                        <td>Jack Smith</td>
                        <td>2</td>
                        <td>0</td>
						<td>2</td>
                        <td> August 5,2016<br><span class="grayc"> 6:30</span></td>
						<td>Approved</td>
						<td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#reservations">View</button></td>
                      </tr>
					  
					   <tr>
                        <td>Shimon York</td>
                        <td>1</td>
                        <td>0</td>
						<td>0</td>
                        <td> August 20,2016<br><span class="grayc"> 12:30</span></td>
						<td>Approved</td>
						<td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#reservations">View</button></td>
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
	
	 
 
              
 </div>
</div>


<!-----  model  --------> 
	<div id="reservations" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog col-md-12">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div> 
          <div class="modal-body">
             	<div class="">
					<div class="col-md-12">
						 
 							<div class="text-center">
        					<form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                      
                    <div class="form-group">
                      <label class="col-md-3 control-label">Customer Name</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="Mick Jagger" class="form-control" type="text">
                      </div>
                    </div>
					
					 
					<div class="form-group">
                      <label class="col-md-3 control-label">Mobile Number </label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="04193715235" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
						  <label class="col-md-3 control-label">Email </label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="mick.jigger@gmail.com" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Adults</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="10" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Children</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="5" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Infant</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="1" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Date and Time</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="May 6, 2017 - 8:30 " class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group has-error">
                      <label class="col-md-3 control-label">Status</label>
                      <div class="col-md-8">
                       <input value="Declined" class="form-control" type="text">
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
	
	 

<!-----  model1  --------> 
	<div id="reservations1" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog col-md-12">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div> 
          <div class="modal-body">
             	<div class="">
					<div class="col-md-12">
						 
 							<div class="text-center">
        					<form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                      
                    <div class="form-group">
                      <label class="col-md-3 control-label">Customer Name</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="Mick Jagger" class="form-control" type="text">
                      </div>
                    </div>
					
					 
					<div class="form-group">
                      <label class="col-md-3 control-label">Mobile Number </label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="04193715235" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
						  <label class="col-md-3 control-label">Email </label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="mick.jigger@gmail.com" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Adults</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="10" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Children</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="5" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Infant</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="1" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Date and Time</label>
                      <div class="col-md-8">
                        <input readonly="readonly" value="May 6, 2017 - 8:30 " class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group has-warning">
                      <label class="col-md-3 control-label">Status</label>
                      <div class="col-md-8">
                       <input  value="Unapproved" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="row xs-pt-15">
                       
                      <div class="col-md-12">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-success  active">Approved</button>
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
   