<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Customers</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
		 
	<div class="row">
  
 		    <div class="col-md-6">
              <div class="panel panel-default "><!--he389-->
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"> <span class="icon mdi mdi-refresh-sync"></span> </div><span class="title"> Regions  </span> 
				  <span class="panel-subtitle">Customer size  per region</span>
                 </div>
				<p class="divider1"></p>
                <div class="panel-body table-responsive">
                  <canvas id="pie-chart3" height="180"></canvas>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-6">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Top Customers</div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date Joined</th>
                        <th >Total Spent</th>
                        <th  >Total Orders</th>
                        <th class="actions"></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Penelope Thornton</td>
                        <td>23/06/2016</td>
                        <td>$4,456.60</td>
                        <td>639</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                      <tr>
                        <td>Justine Myranda</td>
                        <td>15/05/2016</td>
                         <td>$2,646.60</td>
                        <td>235</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                      <tr>
                        <td>Benji Harper</td>
                        <td>10/03/2016</td>
                         <td>$6,286.20</td>
                        <td>728</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                      <tr>
                        <td>Sherwood Clifford</td>
                        <td>18/01/2016</td>
                         <td>$4,456.60</td>
                        <td>639</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
					  <tr>
                        <td>Penelope Thornton</td>
                        <td>23/06/2016</td>
                        <td>$4,456.60</td>
                        <td>639</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                      <tr>
                        <td>Justine Myranda</td>
                        <td>15/05/2016</td>
                         <td>$2,646.60</td>
                        <td>235</td>
                        <td class="actions"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
			 
  	</div>
	
	<div class="row">
   		<div class="col-md-12">
 
			<div class="col-md-6 pp0">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
 				  <div class="title col-md-5">Customer Relation</div> 
				  <div class="col-md-7">
                        <div class="form-group">
                         <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input  type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                     </div>
                    </div>
				  
				  </div>
                </div>
                <div class="panel-body">
                  <canvas id="bar-chart"></canvas>
                </div>
              </div>
            </div>
			
		</div>
	</div>
	
	
	<div class="clear"></div>
	
	
	
	<div class="row">
   	<div class="col-md-12">
 
 		   <div class="panel panel-default panel-table ">
                <div class="panel-heading"> Customers
                  <div class="fright  col-md-3">
				   <div class="input-group input-search ">
                          <input placeholder="Search" class="form-control" type="text"><span class="input-group-btn">
                            <button class="btn btn-default"><i class="icon mdi mdi-search"></i></button></span>
                        </div>
                  </div>
                </div>
                <div class="panel-body table-responsive">
                  <table id="table2" class="table table-striped table-hover table-fw-widget table22">
                    <thead>
                      <tr>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Orders</th>
                        <th>Average Rating</th>
                        <th>Last Order </th>
						<th>Join Date </th>
						<th class="nosort">&nbsp;  </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>Penelope Thornton <br /><span class="grayc"> 2 Maplop st, Geelong 3212</span></td>
						<td>Mobile: 0458 965 312 <br /><span class="grayc"> penelope.thornton@gmail.com </span></td>
                        <td>Total Spend: $36,700 <br /><span class="grayc"> Number of orders : 4 </span></td>
                        <td>4.5/5 <br /><span class="text-success">Good</span></td>
                        <td > May 6,2016<br><span class="grayc"> 8:30</span></td>
						<td > May 6,2016</td>
                        <td class="text-right"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
					  
					  
					  <tr class="even gradeX">
                        <td>Benji Harper <br /><span class="grayc"> 2 Maplop st, Geelong 3212</span></td>
						<td>Mobile:01254 235 235 <br /><span class="grayc"> penelope.thornton@gmail.com </span></td>
                        <td>Total Spend: $15,700 <br /><span class="grayc"> Number of orders : 2 </span></td>
                        <td>2.5/5 <br /><span class="text-warning">Average</span></td>
                        <td > April 6,2016<br><span class="grayc"> 10:12</span></td>
						<td > May 6,2016</td>
                        <td class="text-right"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
					  
					  
					  <tr class="odd gradeX">
                        <td>Justine Myranda <br /><span class="grayc"> 2 Maplop st, Geelong 3212</span></td>
						<td>Mobile: 0458 965 312 <br /><span class="grayc"> penelope.thornton@gmail.com </span></td>
                        <td>Total Spend: $36,700 <br /><span class="grayc"> Number of orders : 4 </span></td>
                        <td>1.5/5 <br /><span class="text-danger">Bed</span></td>
                        <td > May 15,2016<br><span class="grayc"> 15:30</span></td>
						<td > May 23,2016</td>
                        <td class="text-right"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
					  
					  
					  <tr class="even gradeX">
                        <td>Sherwood Clifford <br /><span class="grayc"> 2 Maplop st, Geelong 3212</span></td>
						<td>Mobile:01254 235 235 <br /><span class="grayc"> penelope.thornton@gmail.com </span></td>
                        <td>Total Spend: $15,700 <br /><span class="grayc"> Number of orders : 2 </span></td>
                        <td>5/5 <br /><span class="text-success">Good</span></td>
                        <td > April 12,2016<br><span class="grayc"> 23:12</span></td>
						<td > May 29,2016</td>
                        <td class="text-right"><button class="btn btn-space btn-default">View Orders</button></td>
                      </tr>
                      
                       
                       
                       
                       
                      
                    </tbody>
                  </table>
                </div>
              </div>
			 
  	 </div>
 	</div>
 
              
 </div>
</div>
 	 

	  
	  
	<link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
	   
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
	
 	<!--pagination-->
    <script src="assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<!--pagination-->
     <script src="assets/js/app-tables-datatables.js" type="text/javascript"></script>
 	 <!--<script type="text/javascript">
      $(document).ready(function(){
       	App.init();
      	App.dataTables();
      });
    </script>-->
    
   
	<!--charts-->
 	<script src="assets/lib/chartjs/Chart.js" type="text/javascript"></script>
	<script>
	var App = (function () {
	'use strict';

	App.ChartJs = function( ){

    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };
	
	
 		function barChart(){
			//Set the chart colors
      var color1 = tinycolor( App.color.success );
			var color2 = tinycolor( App.color.warning );

      //Get the canvas element
			var ctx = document.getElementById("bar-chart");
			
			var data = {
	      labels: ["January", "February", "March", "April", "May", "June", "July"],
	      datasets: [{
	        label: "Returning",
	        borderColor: color1,
	        backgroundColor: color1.setAlpha(.8),
	        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
	      }, {
	        label: "Non Returning",
	        borderColor: color2,
	        backgroundColor: color2.setAlpha(.5),
	        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
	      }]
	    };

	    var bar = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
          elements: {
            rectangle: {
              borderWidth: 2,
              borderColor: 'rgb(0, 255, 0)',
              borderSkipped: 'bottom'
            }
          },
        }
      });
		}
		
		//Set pieChart3
		function pieChart3(){
 	   //Set the chart colors
			var color1 = App.color.primary;
			var color2 = tinycolor( App.color.primary ).lighten( 12 );;
			var color3 = tinycolor( App.color.primary ).lighten( 22 );;

      //Get the canvas element
			var ctx = document.getElementById("pie-chart3");
			
			var data = {
			  labels: [
			    "Newtown ",
			    "Highton",
			    "Belmont"
			  ],
			  datasets: [
			    {
			      data: [300, 50, 100],
			      backgroundColor: [
			        color1,
			        color2,
			        color3
			      ],
			      hoverBackgroundColor: [
			        color1,
			        color2,
			        color3
			      ]
			  	}]
			};

	    var pie = new Chart(ctx, {
        type: 'pie',
        data: data
      });
		}
		

 
 		barChart();
		pieChart3();
 	};

	return App;
})(App || {});


	</script>
 	
   	 
    <!--<script type="text/javascript">
      $(document).ready(function(){
       	App.init();
      	App.ChartJs();
      });
    </script>-->
	
	<!------ date ------>
	 <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
     <link rel="stylesheet" type="text/css" href="assets/lib/daterangepicker/css/daterangepicker.css"/>
	
     <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
     <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
     <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
     <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
		App.dataTables();
		App.ChartJs();
      	App.formElements();
      });
     </script>
	
 	
	 
		
<?php
	include("include/footer.php")
?>  
   