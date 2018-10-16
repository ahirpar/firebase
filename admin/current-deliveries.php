<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Current Deliveries</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
 
 		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">Current Deliveries</div>
				
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Order Address</th>
                        <th>Status</th>
                        <th>Order Spend</th>
                        <th>Times elapsed</th>
                        <th>Driver</th>
 						<th></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>2 Malop  Street, Geelong</td>
                        <td>On the way</td>
                        <td>$23</td>
						<td class="text-danger">48 minutes</td>
                        <td>Ryan Wilson</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
                      </tr>
 					  
					  <tr>
                        <td>40 Molesworth Street, Highton</td>
                        <td>On the way</td>
                        <td>$32.50</td>
						<td class="text-success">30 minutes</td>
                        <td>Simon Young</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
                      </tr>
					  
					  <tr>
                        <td>28 High Street, Belmont</td>
                        <td>On the way</td>
                        <td>$38.90</td>
						<td class="text-success">28 minutes</td>
                        <td>Sally Smith</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
                      </tr>
					  
					  <tr>
                        <td>2 Malop  Street, Geelong</td>
                        <td>On the way</td>
                        <td>$23</td>
						<td class="text-danger">55 minutes</td>
                        <td>Ryan Wilson</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
                      </tr>
 					  
					  <tr>
                        <td>40 Molesworth Street, Highton</td>
                        <td>On the way</td>
                        <td>$32.50</td>
						<td class="text-warning">13 minutes</td>
                        <td>Simon Young</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
                      </tr>
					  
					  <tr>
                        <td>28 High Street, Belmont</td>
                        <td>On the way</td>
                        <td>$38.90</td>
						<td class="text-warning">5 minutes</td>
                        <td>Sally Smith</td>
 						<td class="text-right"><button class="btn btn-space btn-default">View</button></td>
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
 
  
   <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
       });
    </script> 
 
<?php
	include("include/footer.php")
?>  
   