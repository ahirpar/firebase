<?php
include("include/header.php");
?>
<div class="page-title"><span>Dashboard</span></div>

<?php
include("include/sidemenu.php");
?>

<div class="be-content">
    <div class="main-content container-fluid">

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div class="data-info">
                        <div class="desc">Today's Sales</div>
                        <div class="value"><Span>$2,500</Span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div class="data-info">
                        <div class="desc">Average Order</div>
                        <div class="value"><Span>$32.50</Span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div class="data-info">
                        <div class="desc">Today's Total Orders</div>
                        <div class="value"><Span>89</Span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                    <div class="data-info">
                        <div class="desc">Average Delivery Time</div>
                        <div class="value"><Span>35 Minutes</Span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-6">
                <div class="panel panel-default "><!--he389-->
                    <div class="panel-heading panel-heading-divider">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Pick up vs Delivery</span> 
                    </div>
                    <div class="panel-body">
                        <canvas id="pie-chart" height="180"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-divider">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Today's Customer Breakdown</span> 
                    </div>
                    <div class="panel-body">
                        <canvas id="donut-chart" height="180"></canvas>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">

            <!--<div class="col-md-3">
<div class="panel panel-default he389">
  <div class="panel-heading panel-heading-divider">
     <span class="title">Today's Average Order Spend</span> 
  </div>
  <div class="widget-chart-container widget-chart-container1">
     <svg viewbox="0 0 100 100">
<circle cx="50" cy="50" r="45" fill="#fff"/>
<path fill="none" stroke-linecap="round" stroke-width="10" stroke="#35A853"
stroke-dasharray="251.2,0"
d="M50 10
a 40 40 0 0 1 0 80
a 40 40 0 0 1 0 -80"/>
<text x="50" y="50" text-anchor="middle" dy="7" font-size="20">$36</text>
</svg>
  </div>
</div>
</div>-->

            <div class="col-md-6">
                <div class="widget widget-fullwidth he389">
                    <div class="widget-head">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span> </div><span class="title">Revenue by Hour</span><span class="description">Revenue Breakdown over the past 24 hours.</span>
                    </div>
                    <div class="widget-chart-container">
                        <div id="line-chart3" style="height: 220px;"></div>

                    </div>
                </div>
            </div>

            <div class=" col-md-6">
                <div class="panel panel-default he389">
                    <div class="panel-heading panel-heading-divider xs-pb-15">Average Customer Rating</div>
                    <div class="panel-body xs-pt-25">

                        <div class="row user-progress user-progress-small">
                            <div class="hreviewlab1"><span class="hreviewlab">4.5</span>
                                <fieldset class="rating rating1">
                                    <input id="star5" name="rating" value="5" type="radio" checked="checked"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input id="star4half" name="rating" value="4 and a half" type="radio" checked="checked"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
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
                                    <div style="width: 40%" class="progress-bar progress-bar-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-1"><span class="title">4</span></div>
                            <div class="col-md-10">
                                <div class="progress">
                                    <div style="width: 65%" class="progress-bar progress-bar-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-1"><span class="title">3</span></div>
                            <div class="col-md-10">
                                <div class="progress">
                                    <div style="width: 30%" class="progress-bar progress-bar-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-1"><span class="title">2</span></div>
                            <div class="col-md-10">
                                <div class="progress">
                                    <div style="width: 80%" class="progress-bar progress-bar-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-md-1"><span class="title">1</span></div>
                            <div class="col-md-10">
                                <div class="progress">
                                    <div style="width: 45%" class="progress-bar progress-bar-info"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <!--<div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading panel-heading-divider">
        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Card vs  Cash Breakdown </span>
      </div>
      <div class="panel-body">
        <canvas id="polar-chart" height="180"></canvas>
      </div>
    </div>
  </div>-->

            <div class="col-md-6">
                <div class="panel panel-default "><!--he389-->
                    <div class="panel-heading panel-heading-divider">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Card vs  Cash Breakdown </span> 
                    </div>
                    <div class="panel-body">
                        <canvas id="pie-chart2" height="180"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default ">
                    <div class="panel-heading panel-heading-divider">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Today's Menu Category Sales Breakdown</span> 
                    </div>
                    <div class="panel-body">
                        <canvas id="pie-chart1" height="180"></canvas>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class=" col-md-6">
                <div class="panel panel-default he389">
                    <div class="panel-heading panel-heading-divider xs-pb-15">Suburb Popularity</div>
                    <div class="panel-body xs-pt-25">


                        <div class="row user-progress user-progress-small">
                            <div class="col-md-4"><span class="title">Newtown</span></div>

                            <div class="col-md-8">
                                <div class="progress">
                                    <div style="width: 65%" class="progress-bar greemc"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row user-progress user-progress-small">
                            <div class="col-md-4"><span class="title">Geelong West</span></div>
                            <div class="col-md-8">
                                <div class="progress">
                                    <div style="width: 30%" class="progress-bar greemc"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row user-progress user-progress-small">
                            <div class="col-md-4"><span class="title">Highton</span></div>
                            <div class="col-md-8">
                                <div class="progress">
                                    <div style="width: 80%" class="progress-bar greemc"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row user-progress user-progress-small">
                            <div class="col-md-4"><span class="title">Manifold Heights</span></div>
                            <div class="col-md-8">
                                <div class="progress">
                                    <div style="width: 45%" class="progress-bar greemc"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row user-progress user-progress-small">
                            <div class="col-md-4"><span class="title">Fyansford</span></div>
                            <div class="col-md-8">
                                <div class="progress">
                                    <div style="width: 10%" class="progress-bar greemc"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
</div>

<style>svg{width:70%;}</style>

<script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/lib/chartjs/Chart.js" type="text/javascript"></script>
<!-- homepage pie-chart and donut-chart-->
<script src="assets/js/app-charts-chartjs.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        App.init();
        App.ChartJs();
    });
</script> 


<?php
include("include/footer.php")
?>  
