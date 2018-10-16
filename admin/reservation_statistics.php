<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Reservations Statistics</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 	<div class="main-content container-fluid">
 		   
 	<div class="row">
    	<div class="col-md-12">
 			<div class="panel panel-default panel-table ">
                <div class="panel-heading">List of Reservations</div>
				
                 <div class="panel-body table-responsive noSwipe">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Adults</th>
                        <th>Children </th>
                        <th>Infant</th>
                        <th>Date and time</th>
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
 						<td><button class="btn btn-space btn-default" >View</button></td>
                      </tr>
					  
					  <tr>
                        <td>Brody Frog</td>
                        <td>10</td>
                        <td>5</td>
						<td>2</td>
                        <td> August 15,2016<br><span class="grayc"> 16:30</span></td>
 						<td><button class="btn btn-space btn-default" >View</button></td>
                      </tr>
					  
					  <tr>
                        <td>Jack Smith</td>
                        <td>2</td>
                        <td>0</td>
						<td>2</td>
                        <td> August 5,2016<br><span class="grayc"> 6:30</span></td>
						<td><button class="btn btn-space btn-default" >View</button></td>
                       </tr>
					  
					   <tr>
                        <td>Shimon York</td>
                        <td>1</td>
                        <td>0</td>
						<td>0</td>
                        <td> August 20,2016<br><span class="grayc"> 12:30</span></td>
 						<td><button class="btn btn-space btn-default" >View</button></td>
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
 			 <div class="col-md-6">
                        <div class="widget widget-fullwidth he389">
                          <div class="widget-head">
 							<span class="title">Average Reservations by Day</span> 
                          </div>
                          <div class="widget-chart-container">
                            <div id="line-chart3" style="height: 220px;"></div>
                           </div>
                        </div>
            </div>
 		</div>
 	</div>
            
			   
 </div>
</div>
  	   
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

 		
		widget_linechart2();
  	};

	return App;
})(App || {});

 	</script>
	
 <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
      	App.ChartJs();
      });
    </script>
  
  
<?php
	include("include/footer.php")
?> 