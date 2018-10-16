<?php
	include("include/header.php");
?>
 <div class="page-title"><span>View Driver</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
     <div class="row">
	 	<div class="col-md-6  ">
		
		<div class="user-display">
                  
                  <div class="user-display-bottom">
				  	<div class="viewdriver1">
                    <div class="user-display-avatar"><img src="assets/img/avatar-150.png" alt="Avatar"></div>
                    <div class="user-display-info">
                      <div class="name">Kristopher Donny</div>
                     </div>
					</div>
					
                    <div class="row user-display-details">
                      <div class="col-md-3 xs-mb-20">
                        <div class="title">Date Joined</div>
                        <div class="counter">15/03/17</div>
                      </div>
                      <div class="col-md-3 xs-mb-20">
                        <div class="title">No of Deliveries</div>
                        <div class="counter">1265</div>
                      </div>
                      <div class="col-md-3 xs-mb-20">
                        <div class="title">Avg Delivery time</div>
                        <div class="counter">26 mins</div>
                      </div>
                    </div>
					
					<div class="row user-display-details">
                      <div class="col-md-3 xs-mb-20">
                        <div class="title">Mobile</div>
                        <div class="counter">0445 352 325</div>
                      </div>
                      <div class="col-md-3 xs-mb-20">
                        <div class="title">Email</div>
                        <div class="counter">krish@gmail.com</div>
                      </div>
                     </div>
					 
					 <div class="row md-mt-40">
					 <div class="widget widget-fullwidth ">
                          <div class="widget-head">
                           <div class="text-left col-md-4 col-xs-3"><span class="title"><b>Deliveries</b></span><span class="description"> Past 7 days </span></div>
						   <div class="fright col-md-6"> 
                     	   <div class="form-group  ">
                          <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                       </div>
                    </div> 
					</div>
						   
                     </div>
                          <div class="widget-chart-container">
                            <div id="line-chart3" style="height: 220px;"></div>
                           </div>
                        </div>
					 </div>
					
					
                  </div>
                </div>
               
			   
            </div>
			
			
			<div class="col-md-6">
                <div class="panel panel-default">
				
				<div class="panel-heading col-md-4">Delivery History</div> 
				  <div class="col-md-6 fright top10">
                        <div class="form-group">
                         <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input  type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                     </div>
                    </div>
				  
				  </div>
				
				
				 
				
 				  <p class="divider1"></p>
                  <div class="panel-body">
                    <ul class="user-timeline">
                      <li class="latest">
                        <div class="user-timeline-date">Just Now</div>
                        <div class="user-timeline-title">Delivery Time : 24 Minutes</div>
                        <div class="user-timeline-description">
							<span><b>Customer </b>: John Biggs</span>&nbsp;&nbsp;&nbsp;
							<span><b>Ph </b>: 0452 256 365</span>&nbsp;&nbsp;&nbsp;
							<span><b>Email </b>: j.biggs@gmail.com</span>&nbsp;&nbsp;&nbsp;
							<br />							
							<span><b>Delivery Address </b>:  2 Malop street, Geelong VIC 3212</span> 
							<br />
							<span><b>Order Details </b>:  1x  pepperioni Large (No anchovies) Extra Cheese</span> 
							<br />
							<span><b>Order Total </b>:  $20.45</span> 
 						
						</div>
                      </li>
                      <li>
                        <div class="user-timeline-date">Today - 15:35</div>
                        <div class="user-timeline-title">Delivery Time : 50 Minutes</div>
                        <div class="user-timeline-description">
							<span><b>Customer </b>: John Biggs</span>&nbsp;&nbsp;&nbsp;
							<span><b>Ph </b>: 0452 256 365</span>&nbsp;&nbsp;&nbsp;
							<span><b>Email </b>: j.biggs@gmail.com</span>&nbsp;&nbsp;&nbsp;
							<br />							
							<span><b>Delivery Address </b>:  2 Malop street, Geelong VIC 3212</span> 
							<br />
							<span><b>Order Details </b>:  1x  pepperioni Large (No anchovies) Extra Cheese</span> 
							<br />
							<span><b>Order Total </b>:  $20.45</span> 
 						
						</div>
                      </li>
                      <li>
                        <div class="user-timeline-date">Yesterday - 10:41</div>
                        <div class="user-timeline-title">Delivery Time : 12 Minutes</div>
                        <div class="user-timeline-description">
							<span><b>Customer </b>: John Biggs</span>&nbsp;&nbsp;&nbsp;
							<span><b>Ph </b>: 0452 256 365</span>&nbsp;&nbsp;&nbsp;
							<span><b>Email </b>: j.biggs@gmail.com</span>&nbsp;&nbsp;&nbsp;
							<br />							
							<span><b>Delivery Address </b>:  2 Malop street, Geelong VIC 3212</span> 
							<br />
							<span><b>Order Details </b>:  1x  pepperioni Large (No anchovies) Extra Cheese</span> 
							<br />
							<span><b>Order Total </b>:  $20.45</span> 
 						
						</div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
	 </div>      
		   
 	 
	
  </div>
</div>

 
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
 	
	
	
	<script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
 	 <script src="assets/lib/chartjs/Chart.js" type="text/javascript"></script>
 	<!-- homepage pie-chart and donut-chart-->
    <script>
	var App = (function () {
	'use strict';

	App.ChartJs = function( ){

    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };
 
 
 
  //Line Chart 2
    function widget_linechart2(){

      var color1 = tinycolor( App.color.primary ).lighten( 5 ).toString();

    	var plot_statistics = $.plot($("#line-chart3"), [{
        data: [
        	[0, 20], [1, 25], [2, 23], [3, 10], [4, 12], [5, 20], [6, 24] 
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
          tickSize: 7,
          tickDecimals: 0
        }
      });
    }
 	 
		
		widget_linechart2();
  	};

	return App;
})(App || {});

  
	</script>
  	 
     <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
	<script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
	<script src="assets/js/app-form-elements.js" type="text/javascript"></script>
	 
    <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
 		App.ChartJs();
       	App.formElements();
      });
     </script>
 
<?php
	include("include/footer.php")
?>  
   