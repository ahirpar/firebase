<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Drivers</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
           
		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">View Drivers
				<div class="fright">
 				<button class="btn btn-space btn-primary active " onclick="location.href='add-driver.php';">Add Driver</button>
				
				</div>
				</div>
				
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                         <th>Ave. Delivery Time</th>
                        <th>Branch</th>
 						<th>Last Active</th>
						<th> </th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td class="user-avatar"> <img src="assets/img/avatar6.png" alt="Avatar">Penelope Thornton</td>
                        <td>23568596</td>
 						<td>48 minutes</td>
                        <td>Geelong</td>
 						 <td> May 6,2016<br><span class="grayc"> 8:30</span></td>
						 <td class="text-right"><button class="btn btn-space btn-default" onclick="location.href='view-driver.php';">View</button></td>
                      </tr>
					  
					  <tr>
                        <td class="user-avatar"> <img src="assets/img/avatar4.png" alt="Avatar"> AvatarBenji Harper</td>
                        <td>3589563</td>
 						<td>20 minutes</td>
                        <td>Geelong West</td>
 						 <td> April 6,2016<br><span class="grayc"> 14:50</span></td>
						 <td class="text-right"><button class="btn btn-space btn-default" onclick="location.href='view-driver.php';">View</button></td>
                      </tr>
					  
					  <tr>
                        <td class="user-avatar"> <img src="assets/img/avatar1.png" alt="Avatar">Penelope Thornton</td>
                        <td>23568596</td>
 						<td>48 minutes</td>
                        <td>Geelong</td>
 						 <td> May 6,2016<br><span class="grayc"> 8:30</span></td>
						 <td class="text-right"><button class="btn btn-space btn-default" onclick="location.href='view-driver.php';">View</button></td>
                      </tr>
					  
					  <tr>
                        <td class="user-avatar"> <img src="assets/img/avatar2.png" alt="Avatar"> AvatarBenji Harper</td>
                        <td>3589563</td>
 						<td>20 minutes</td>
                        <td>Geelong West</td>
 						 <td> April 6,2016<br><span class="grayc"> 14:50</span></td>
						 <td class="text-right"><button class="btn btn-space btn-default" onclick="location.href='view-driver.php';">View</button></td>
                      </tr>
					  
                      </tbody>
 					
                  </table>
                </div>
				
				<div class="row">
						<div class="col-md-5 tableentrieas col-sm-5 col-xs-12">
							 <P>Showing 1 to 6 of 20 entries</P>
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
   