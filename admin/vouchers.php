<?php
include("include/header.php");
?>
<div class="page-title"><span>Vouchers</span></div>

<?php
include("include/sidemenu.php");
?>
<style>
    .on { background-color:red; }
</style>
<div class="be-content">
    <div class="main-content container-fluid">



        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-table ">
                    <div class="panel-heading">Current Vouchers
                    </div>
                    <div class="panel-body table-responsive noSwipe">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th >Vouchers Code</th>
                                    <th >Discount</th>
                                    <th class="number">Max. Use </th>
                                    <th class="number">Times used</th>
                                    <th class="actions">Date Last Used</th>
                                    <th> Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x" id="voucher-table">
<!--                                <tr>
                                    <td>LACAMPA25</td>
                                    <td>25% off totle order</td>
                                    <td class="number">1000 order</td>
                                    <td class="number">480 order</td>
                                    <td class="text-center"> May 6,2016<br><span class="grayc"> 8:30</span></td>
                                    <td>Active</td>
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#vouch">View</button></td>
                                </tr>-->

<!--                                <tr>
                                    <td>ERINK50</td>
                                    <td>50% off order</td>
                                    <td class="number">1 order</td>
                                    <td class="number">2 order</td>
                                    <td class="text-center"> April 22,2016<br><span class="grayc"> 14:45</span></td>
                                    <td>Complete</td>
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#vouch">View</button></td>
                                </tr>-->


<!--                                <tr>
                                    <td>CHEAPTUESDAY</td>
                                    <td>15% off totle order</td>
                                    <td class="number">850 order</td>
                                    <td class="number">850 order</td>
                                    <td class="text-center"> April 15,2016<br><span class="grayc"> 8:30</span></td>
                                    <td>Complete</td>
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#vouch">View</button></td>
                                </tr>-->


<!--                                <tr>
                                    <td>ERINK50</td>
                                    <td>50% off order</td>
                                    <td class="number">1 order</td>
                                    <td class="number">2 order</td>
                                    <td class="text-center"> April 22,2016<br><span class="grayc"> 14:45</span></td>
                                    <td>Complete</td>
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#vouch">View</button></td>
                                </tr>-->


<!--                                <tr>
                                    <td>CHEAPTUESDAY</td>
                                    <td>15% off totle order</td>
                                    <td class="number">850 order</td>
                                    <td class="number">850 order</td>
                                    <td class="text-center"> April 15,2016<br><span class="grayc"> 8:30</span></td>
                                    <td>Complete</td>
                                    <td><button class="btn btn-space btn-default" data-toggle="modal" data-target="#vouch">View</button></td>
                                </tr>-->
                            </tbody>

                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-5 tableentrieas col-sm-5 col-xs-12">
                            <P id="getcount"></P>
                        </div>


                        <div class="col-md-4 col-md-offset-2 tablepagination col-sm-6 col-xs-12">
                            <nav>
                                <ul class="pagination">
<!--                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-left"></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>-->
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading panel-heading-divider bline">Create New Voucher</div>
                    <div class="panel-body">

                        <form class="form-horizontal" id="vouchers-form">
                            <div class="form-group xs-mt-10">
                                <label for="Code" class="col-md-3 control-label">Voucher Code </label>
                                <div class="col-md-7">
                                    <input id="Code" name="Code" placeholder="" class="form-control" type="text">
                                    <input id="Type" name="Type" placeholder="" type="hidden">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-md-3 control-label">Voucher Type</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="be-radio inline w210">
                                                <input checked="checked" value="DP" name="Type" id="rad1" type="radio" onclick="Show_Discount(this.value);">
                                                <label for="rad1">Discount Percentage</label>
                                            </div>
                                            <div class="be-radio inline w210">
                                                <input name="Type" value="DA" id="rad2" type="radio" onclick="Show_Discount(this.value);">
                                                <label for="rad2" >Discount Amount</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" id='dDiscount'>Discount Percentage (%)</label>
                                <div class="col-md-3">
                                    <input placeholder="25" id="DiscountPercentage" onkeypress="return KeycheckOnlyNumeric(event)" name="DiscountPercentage" class="form-control" type="text">
                                    <input placeholder="25" id="DiscountAmount" onkeypress="return KeycheckOnlyNumeric(event)" name="DiscountAmount" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Valid Form </label>
                                    <div class="col-md-3 ">
                                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date" id="ValidFrom">
                                            <input size="16" readonly="" name="ValidFrom" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                        </div>
                                        <div class="ValidFrom" style="clear: both;"></div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Valid To </label>
                                    <div class="col-md-3 ">
                                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date" id="ValidTo">
                                            <input size="16" data-date-format="yyyy-mm-dd" readonly="" name="ValidTo" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                        </div>
                                        <div class="ValidTo" style="clear: both;"></div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group">
                                <label  class="col-md-3 control-label">Max. Amount of Uses</label>
                                <div class="col-md-3">
                                    <input placeholder="150 Orders" id="MaxUses" name="MaxUses" class="form-control" type="text">
                                </div>
                            </div>


                            <div class="row xs-pt-15">

                                <div class="col-md-10">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Add Voucher</button>
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


<!-----  model  --------> 
<div id="vouch" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog col-md-12">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div> 
            <div class="modal-body">
                <div class="">
                    <div class="col-md-12">

                        <div class="text-center">
                            <form style="border-radius: 0px;" class="form-horizontal group-border-dashed">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Voucher Code</label>
                                    <div class="col-md-8">
                                        <input readonly="readonly" id="editcode" value="LACAMPA25" class="form-control" type="text">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label">Discount</label>
                                    <div class="col-md-8">
                                        <input readonly="readonly" id="editdiscount" value="25% of total order" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Max. Use </label>
                                    <div class="col-md-8">
                                        <input readonly="readonly" id="editmaxUses" value="1000 Orders" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Times Use</label>
                                    <div class="col-md-8">
                                        <input readonly="readonly" id="edituses" value="440" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date Last Used</label>
                                    <div class="col-md-8">
                                        <input readonly="readonly" id="editLastUsed" value="May 6, 2017 - 8:30 " class="form-control" type="text">
                                    </div>
                                </div>

                                <div id="checkactive">

                                </div>

                                <div class="row xs-pt-15">

                                    <div class="col-md-12">
                                        <p class="text-right">
                                            <span id="eid" class="btn btn-space  btn-default" data-dismiss="modal" aria-hidden="true" onclick="return deleteVouchers(this.value)">Delete</span>
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

<script src="http://momentjs.com/downloads/moment.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/lib/daterangepicker/css/daterangepicker.css"/>

<script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
<script src="assets/js/app-form-elements.js" type="text/javascript"></script>

<script type="text/javascript">
                                                $(document).ready(function () {
                                                    //initialize the javascript
                                                    App.init();
                                                    App.formElements();
                                                });
</script>


<?php
include("include/footer.php")
?>  

<script src="js/vouchers.js" type="text/javascript"></script>
