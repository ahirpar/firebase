<?php
	include("include/header.php");
?>

  <div class="page-title"><span>Delivery Status</span></div>
  
<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
   <div class="main-content container-fluid">
 		   
			 <div class="row">
				  <div class="col-md-12">
						<div class="panel panel-default panel-table ">
						
							  <div class="panel-heading col-md-5">List of Deliveriess</div> 
							  <div class="col-md-4 fright top10">
									<div class="form-group">
									 <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
									  <input type="text" value="" class="form-control">
									  <span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
								 </div>
								</div>
							  
							  </div>
							
							 <div class="panel-body table-responsive noSwipe">
							  <table class="table table-striped table-borderless">
								<thead>
								  <tr>
									<th>Order Address</th>
									<th>Name</th>
									<th>Order Spend</th>
									<th>Driver</th>
									<th>Delivery Time</th>
									<th>Rating</th>
									<th>Order Date</th>
								   </tr>
								</thead>
								<tbody class="no-border-x">
								  <tr>
									<td>2 Mantop Street, Geelong</td>
									<td>Jack Smith</td>
									<td>$35</td>
									<td>48 minutes</td>
									<td>Ryan Willson</td>
									<td>5</td>
									<td> May 6,2016<br><span class="grayc"> 8:30</span></td>
								  </tr>
								  
								  <tr>
									<td>40 Malesworth Street, Highton</td>
									<td>Shimon York</td>
									<td>$32.50</td>
									<td>38 minutes</td>
									<td>Jack Smith</td>
									<td>None</td>
									<td> May 6,2016<br><span class="grayc"> 8:22</span></td>
								  </tr>
								  
								  <tr>
									<td>2 Mantop Street, Geelong</td>
									<td>Jack Smith</td>
									<td>$35</td>
									<td>48 minutes</td>
									<td>Ryan Willson</td>
									<td>5</td>
									<td> May 6,2016<br><span class="grayc"> 8:30</span></td>
								  </tr>
								  
								  <tr>
									<td>40 Malesworth Street, Highton</td>
									<td>Shimon York</td>
									<td>$32.50</td>
									<td>38 minutes</td>
									<td>Jack Smith</td>
									<td>None</td>
									<td> May 6,2016<br><span class="grayc"> 8:22</span></td>
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
 			
			     <div class="col-md-3">
                   <div class="widget be-loading">
                	<div class="widget-head">
					  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                 	 <div class="title">Top Sales</div>
                	</div>
					
                	<div class="widget-chart-container">
					  <div id="top-sales" style="height: 260px;"></div>
					  <div class="chart-pie-counter">38</div>
					</div>
					
                	<div class="chart-legend">
                  	  <table>
                      <tr>
                     	 <td class="chart-legend-color"><span data-color="top-sales-color2"></span></td>
                      	<td>Response / Cooking Time </td>
                     	 <td class="chart-legend-value">30 min</td>
                      </tr>
					
					  <tr>
                     	 <td class="chart-legend-color"><span data-color="top-sales-color1"></span></td>
                     	 <td>Delivery Time</td>
                     	 <td class="chart-legend-value">8 min</td>
                      </tr>
                     
                      </table>
					</div>
					
					 <div class="be-spinner">
						<svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
						<circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
						</svg>
					 </div>
             	   </div>
                 </div>
			
			     <div class="col-md-4">
                    <div class="widget widget-fullwidth he389">
                          <div class="widget-head">
 							  <div class="title col-md-5"> Average Pickup  by Date </div> 
				 			 <div class="col-md-7 fright">
                        <div class="form-group">
                         <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input type="text" value="" class="form-control">
						  <span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                     </div>
                    </div>
				  
				  </div>
                          </div>
                          <div class="widget-chart-container">
                            <div id="line-chart3" style="height: 250px;"></div>
                             
                          </div>
                        </div>
            	</div>
			
				 <div class="col-md-5">
             		<div class="panel panel-default "><!--he389-->
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"> <span class="icon mdi mdi-refresh-sync"></span> </div>
				   Deliveries by suburb <span class="panel-subtitle">Deliveries orders demographics per suburb</span>
                 </div>
				<div class="divider1"></div>
                <div class="panel-body">
                  <canvas id="pie-chart44" height="200"></canvas>
                </div>
              </div>
                </div>
    			  
 		     </div>
			
	
			 <div class="row">
			
				  <div class="col-md-6">
					<div class="panel panel-default panel-table ">
					
						 <div class="panel-heading">Most Popular Pick Up Items
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
								<th>Item</th>
								<th>Sales</th>
								<th>Orders</th>
								<th>Rank  </th>
							   </tr>
							</thead>
							<tbody class="no-border-x">
							
							  <tr>
								<td>Large Vegeterian Pizza</td>
								<td>$50,350</td>
								 <td>5040</td>
								<td>1</td>
							   </tr>
							  
							  <tr>
								<td>Family Hawaiian Pizza</td>
								<td>$35,890</td>
								 <td>3890</td>
								<td>2</td>
							   </tr>
							   
							   <tr>
								<td>Penne Carabaronia Pizza</td>
								<td>$25,850</td>
								 <td>5862</td>
								<td>3</td>
							   </tr>
							   
							   <tr>
								<td>Medium Hawaiian Pizza</td>
								<td>$30,678</td>
								 <td>6890</td>
								<td>4</td>
							   </tr>
							  
							   
							 </tbody>
							
						  </table>
						</div>
						
						 <div class="row">
								 
								
								<div class="col-md-11   tablepagination ">
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
				
				  <div class="col-md-6">
					<div class="panel panel-default panel-table ">
					
						 <div class="panel-heading">Total Amounts Spent by Suburb
							 <div class="tools dropdown"> 
							 <span class="icon mdi mdi-download"></span>
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
								<th>Suburb</th>
								<th>Total Amount</th>
								<th>Orders</th>
								<th> </th>
							   </tr>
							</thead>
							<tbody class="no-border-x">
							
							  <tr>
								<td>Geelong West</td>
								<td>$50,350</td>
								 <td>5040</td>
								<td> <span class="mdi mdi-settings"></span></td>
							   </tr>
							  
							  <tr>
								<td>Newtown</td>
								<td>$100,560</td>
								 <td>8907</td>
								<td> <span class="mdi mdi-settings"></span></td>
							   </tr>
							   
							   <tr>
								<td>Highton</td>
								<td>$78,550</td>
								 <td>5628</td>
								<td> <span class="mdi mdi-settings"></span></td>
							   </tr>
							   
							   <tr>
								<td>Fyansford</td>
								<td>$58,350</td>
								 <td>2468</td>
								<td> <span class="mdi mdi-settings"></span></td>
							   </tr>
							  
							   
							 </tbody>
							
						  </table>
						</div>
						
						 <div class="row">
								 
								
								<div class="col-md-11   tablepagination ">
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
			
				  <div class="col-md-3">
                      <div class="widget be-loading">
                <div class="widget-head">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                  <div class="title">Average Delivery Spend</div>
                </div>
                <div class="widget-chart-container">
                  <div id="top-sales1" style="height: 260px;"></div>
                  <div class="chart-pie-counter">$35</div>
                </div>
                <div class="chart-legend">
                  <table>
                    
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color2"></span></td>
                      <td>Order Spend </td>
                      <td class="chart-legend-value">$28.50</td>
                    </tr>
					
					<tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color1"></span></td>
                      <td>Delivery Cost</td>
                      <td class="chart-legend-value">$6.50</td>
                    </tr>
                     
                  </table>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
                    </div>
				
				  <div class="col-md-4">
					  <div class="panel panel-default">
						<div class="panel-heading panel-heading-divider">
						  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Cash vs Card Breakdown on Delivery</span> 
						</div>
						<div class="panel-body">
						  <div id="donut-chart" style="height:290px;"></div>
						</div>
					  </div>
					</div>
					
				  <div class="col-md-5">
                     <div class="widget widget-fullwidth he389">
                          <div class="widget-head">
                              <div class="title col-md-5">Average Pickup  by Date</div> 
				 			 <div class="col-md-7 fright">
                        <div class="form-group">
                         <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input  type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                     </div>
                    </div>
				  
				  </div>
							
                           </div>
                          <div class="widget-chart-container">
                            <div id="line-chart33" style="height: 340px;"></div>
                             
                          </div>
                        </div>
            	    </div>
				  
			 </div>
			
			 <div class="row">
  				  <div class=" col-md-6">
              <div class="panel panel-default he389">
                <div class="panel-heading panel-heading-divider xs-pb-15">Average Customer Rating</div>
                <div class="panel-body xs-pt-25">
				
                  <div class="row user-progress user-progress-small">
				  <div class="hreviewlab1"><span class="hreviewlab">4.5</span>
				  <fieldset class="rating rating1">
    <input id="star5" name="rating" value="5" type="radio" checked="checked"><label class="full" for="star5" title="Awesome - 5 stars"></label>
    <input id="star4half" name="rating" value="4 and a half" type="radio"  checked="checked"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input id="star4" name="rating" value="4" type="radio"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
    <input id="star3half" name="rating" value="3 and a half" type="radio"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input id="star3" name="rating" value="3" type="radio"><label class="full" for="star3" title="Meh - 3 stars"></label>
    <input id="star2half" name="rating" value="2 and a half" type="radio"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input id="star2" name="rating" value="2" type="radio"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
    <input id="star1half" name="rating" value="1 and a half" type="radio"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input id="star1" name="rating" value="1" type="radio"><label class="full" for="star1" title="Sucks big time - 1 star"></label>
    <input id="starhalf" name="rating" value="half" type="radio"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
				  </div>
				  <div class="clear"></div>
				  
                    <div class="col-md-1"><span class="title">5</span></div>
                    <div class="col-md-10">
                      <div class="progress">
                        <div style="width: 40%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-1"><span class="title">4</span></div>
                    <div class="col-md-10">
                      <div class="progress">
                        <div style="width: 65%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-1"><span class="title">3</span></div>
                    <div class="col-md-10">
                      <div class="progress">
                        <div style="width: 30%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-1"><span class="title">2</span></div>
                    <div class="col-md-10">
                      <div class="progress">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-1"><span class="title">1</span></div>
                    <div class="col-md-10">
                      <div class="progress">
                        <div style="width: 45%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  			 </div>
 
  </div>
</div>
 	 
 
  	<style>
 	 .chart-legend { margin-top: -10px; padding: 0 15px; }
 	 /*.datetimepicker.datetimepicker-dropdown-bottom-right.dropdown-menu { left: 1622px !important; }*/
	</style>
 
  	
     <script src="assets/lib/raphael/raphael-min.js" type="text/javascript"></script>
     <script src="assets/lib/morrisjs/morris.min.js" type="text/javascript"></script>
     <script>
	  var App = (function () {
	  'use strict';

	  App.chartsMorris = function( ){
 	  //Donut Chart
	  function donut_chart(){
	  	var color1 = App.color.primary;
      var color2 = App.color.success;
 
  	  Morris.Donut({
		    element: 'donut-chart',
		    data: [
		      {label: 'Cash', value: 55 },
		      {label: 'Card', value: 33 } 
		    ],
		    colors:[color1, color2],
		    formatter: function (y) { return y + "%" }
		  });
	  }
 
 	  donut_chart();
 	};

	return App;
})(App || {});
	
	</script>
	
      <!--<script type="text/javascript">
      $(document).ready(function(){
       	App.init();
      	App.chartsMorris();
      });
     </script>-->

 

	
	 <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
	 <script src="assets/lib/chartjs/Chart.js" type="text/javascript"></script>
  	
     <script>
	var App = (function () {
	'use strict';

	App.ChartJs = function( ){

    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };
 
  //Line Chart 2
    function widget_linechart33(){

      var color1 = tinycolor( App.color.primary ).lighten( 5 ).toString();

    	var plot_statistics = $.plot($("#line-chart33"), [{
        data: [
        	[0, 20], [1, 30], [2, 25], [3, 39], [4, 35], [5, 40], [6, 50] 
        ],
        label: "Page Views"
      }
      ], {
        series: {
          lines: {
            show: true,
            lineWidth: 2, 
            fill: true,
            fillColor: {
              colors: [{
                opacity: 0.1
              }, {
                opacity: 0.1
              }
              ]
            } 
          },
          points: {
            show: true
          },
          shadowSize: 0
        },
        legend:{
          show: false
        },
        grid: {
          margin: {
            left: 23,
            right: 30,
            top: 20,
            botttom: 40
          },
        	labelMargin: 15,
          axisMargin: 500,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(0,0,0,0.15)",
          borderWidth: 0
        },
        colors: [color1],
        xaxis: {
		ticks: 11,
          tickDecimals: 0,
             ticks: [
				[0, "Mon."],
                [1, "Tues."],
                [2, "Wed."],
                [3, "Thurs."],
                [4, "Fri."],
                [5, "Sat."],
				[6, "Sun."],
             ]
        },
        yaxis: {
          ticks: 4,
          tickSize: 15,
          tickDecimals: 0
        }
      });
    }
	
	
	 //Line Chart 2
    function widget_linechart2(){

      var color1 = tinycolor( App.color.primary ).lighten( 5 ).toString();

    	var plot_statistics = $.plot($("#line-chart3"), [{
        data: [
        	[0, 20], [1, 30], [2, 25], [3, 39], [4, 35], [5, 40], [6, 50] 
        ],
        label: "Page Views"
      }
      ], {
        series: {
          lines: {
            show: true,
            lineWidth: 2, 
            fill: true,
            fillColor: {
              colors: [{
                opacity: 0.1
              }, {
                opacity: 0.1
              }
              ]
            } 
          },
          points: {
            show: true
          },
          shadowSize: 0
        },
        legend:{
          show: false
        },
        grid: {
          margin: {
            left: 23,
            right: 30,
            top: 20,
            botttom: 40
          },
        	labelMargin: 15,
          axisMargin: 500,
          hoverable: true,
          clickable: true,
          tickColor: "rgba(0,0,0,0.15)",
          borderWidth: 0
        },
        colors: [color1],
 		xaxis: {
		ticks: 11,
          tickDecimals: 0,
             ticks: [
				[0, "Mon."],
                [1, "Tues."],
                [2, "Wed."],
                [3, "Thurs."],
                [4, "Fri."],
                [5, "Sat."],
				[6, "Sun."],
             ]
        },
		
		
        yaxis: {
          ticks: 4,
          tickSize: 15,
          tickDecimals: 0
        }
      });
    }


function pieChart44(){
			//Set the chart colors
			var color1 = App.color.primary;
			var color2 = tinycolor( App.color.primary ).lighten( 12 );;
			var color3 = tinycolor( App.color.primary ).lighten( 22 );;

      //Get the canvas element
			var ctx = document.getElementById("pie-chart44");
			
			var data = {
			  labels: [
			    "Geelong West ",
			    "Newtown",
			    "Highton"
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
		
 		pieChart44();
		widget_linechart2();
		widget_linechart33();
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
 	
     <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
     <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
 	 <script>
	 var App = (function () {
  'use strict';
  
  App.dashboard = function( ){
     //Top sales chart
    function topSales(){

      var data = [
        { label: "Delivery Time", data: 30 },
        { label: "Responce Time", data: 70 } 
      ];

      var color1 = App.color.success;
      var color2 = App.color.warning;
 
      $.plot('#top-sales', data, {
        series: {
          pie: {
            radius: 0.75,
            innerRadius: 0.58,
            show: true,
            highlight: {
              opacity: 0.1
            },
            label: {
              show: false
            }
          }
        },
        grid:{
          hoverable: true,
        },
        legend:{
          show: false
        },
        colors: [color1, color2 ]
      });

      //Chart legend color setter
      $('[data-color="top-sales-color1"]').css({'background-color':color1});
      $('[data-color="top-sales-color2"]').css({'background-color':color2});
     }
	 
	 
	  //Top sales chart
    function topSales1(){

      var data = [
        { label: "Delivery Time", data: 30 },
        { label: "Responce Time", data: 70 } 
      ];

      var color1 = App.color.success;
      var color2 = App.color.warning;
 
      $.plot('#top-sales1', data, {
        series: {
          pie: {
            radius: 0.75,
            innerRadius: 0.58,
            show: true,
            highlight: {
              opacity: 0.1
            },
            label: {
              show: false
            }
          }
        },
        grid:{
          hoverable: true,
        },
        legend:{
          show: false
        },
        colors: [color1, color2 ]
      });

      //Chart legend color setter
      $('[data-color="top-sales-color1"]').css({'background-color':color1});
      $('[data-color="top-sales-color2"]').css({'background-color':color2});
     }

    
   
 
    topSales();
	topSales1();
   };

  return App;
})(App || {});

	 </script>
	 
	 
   <!-- <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
       	App.dashboard();
      
      });
    </script>-->
  	
	
	 <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
     <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
     <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
     <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
		App.chartsMorris();
		App.ChartJs();
      	App.dashboard();
      	App.formElements();
      });
     </script>

	
  
<?php
	include("include/footer.php")
?>  
   