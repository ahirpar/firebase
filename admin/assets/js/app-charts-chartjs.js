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
        	[0, 20], [1, 30], [2, 25], [3, 39], [4, 35], [5, 40], [6, 30], [7, 45]
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
          tickDecimals: 0
        },
        yaxis: {
          ticks: 4,
          tickSize: 15,
          tickDecimals: 0
        }
      });
    }


		function pieChart(){
			//Set the chart colors
			var color1 = App.color.primary;
			var color2 = tinycolor( App.color.primary ).lighten( 12 );;
			var color3 = tinycolor( App.color.primary ).lighten( 22 );;

      //Get the canvas element
			var ctx = document.getElementById("pie-chart");
			
			var data = {
			  labels: [
			    "Pick Up",
 			    "Delivery"
			  ],
			  datasets: [
			    {
			      data: [300, 50],
			      backgroundColor: [
			        color1,
 			        color3
			      ],
			      hoverBackgroundColor: [
			        color1,
 			        color3
			      ]
			  	}]
			};

	    var pie = new Chart(ctx, {
        type: 'pie',
        data: data
      });
		}
		
		
		
		function pieChart1(){
			//Set the chart colors
			//var color1 = App.color.primary;
			//var color2 = tinycolor( App.color.primary ).lighten( 12 );;
			//var color3 = tinycolor( App.color.primary ).lighten( 22 );;
			var color1 = App.color.primary;
 			var color3 = App.color.warning;
 			var color5 = tinycolor( App.color.primary ).lighten( 10 );;
			var color6 = tinycolor( App.color.warning ).lighten( 10 );;
			

      //Get the canvas element
			var ctx = document.getElementById("pie-chart1");
			
			var data = {
			  labels: [
			    "Traditional Pizza",
 			    "Gourment Pizza"
			  ],
			  datasets: [
			    {
			      data: [300, 150],
			      backgroundColor: [
			        color5,
 			        color6
			      ],
			      hoverBackgroundColor: [
			        color5,
 			        color6
			      ]
			  	}]
			};

	    var pie = new Chart(ctx, {
        type: 'pie',
        data: data
      });
		}
		
		
		
		function pieChart2(){
			//Set the chart colors
			var color1 = App.color.primary;
			var color2 = tinycolor( App.color.primary ).lighten( 12 );;
			var color3 = tinycolor( App.color.primary ).lighten( 22 );;

      //Get the canvas element
			var ctx = document.getElementById("pie-chart2");
			
			var data = {
			  labels: [
			    "Cash",
 			    "Card"
			  ],
			  datasets: [
			    {
			      data: [300, 50],
			      backgroundColor: [
			        color1,
 			        color3
			      ],
			      hoverBackgroundColor: [
			        color1,
 			        color3
			      ]
			  	}]
			};

	    var pie = new Chart(ctx, {
        type: 'pie',
        data: data
      });
		}
		
		
		
	 
		
		
		
		
		//function polarChart(){
//			//Set the chart colors
//			var color1 = App.color.primary;
//			var color2 = App.color.success;
//			var color3 = App.color.warning;
//			var color4 = App.color.danger;
//      var color5 = App.color.grey;
//
// 			var ctx = document.getElementById("polar-chart");
//			
//			var data = {
//		    datasets: [{
//	        data: [16,7,14],
//	        backgroundColor: [
//             color2,
//            color3,
//             color1
//	        ],
//	        label: 'My dataset'
//		    }],
//		    labels: [
//	        "Card",
//	        "Cash Down",
// 	        "Blue"
//		    ]
//			};
//
//	    var polar = new Chart(ctx, {
//        type: 'polarArea',
//        data: data
//      });
//		}
		
		

		function donutChart(){
			//Set the chart colors
			var color1 = App.color.success;
			var color2 = tinycolor( App.color.success ).lighten( 12 );;
			var color3 = tinycolor( App.color.success ).lighten( 22 );;

      //Get the canvas element
			var ctx = document.getElementById("donut-chart");
			
			var data = {
			  labels: [
			    "Existing Customers",
 			    "New Customers"
			  ],
			  datasets: [
			    {
			      data: [300,  50],
			      backgroundColor: [
			        color1,
 			        color3
			      ],
			      hoverBackgroundColor: [
			        color1,
 			        color3
			      ]
			  	}]
			};

	    var pie = new Chart(ctx, {
        type: 'doughnut',
        data: data
      });
		}
		
 		
		
		
		widget_linechart2();
 		pieChart();
		//polarChart();
		pieChart1();
		pieChart2();
 		donutChart();
 	};

	return App;
})(App || {});

 

 