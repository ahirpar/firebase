<?php
include("include/header.php");
?>
<div class="page-title"><span>Specials</span></div>

<div id="deleteitems"></div>
<?php
include("include/sidemenu.php");
?>

<div class="be-content">
    <div class="main-content container-fluid">



        <div class="row">
            <div class="col-md-12">

                <!--                <button type="button" class="btn btn-default trash" data-target="#mod-warning1" data-toggle="modal">
                                    <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                </button>  -->

                <div class="panel panel-default panel-table">
                    <div class="panel-heading"> Special </div>
                    <div class="panel-body table-responsive">
                        <table id="table1" class="table table-striped table-hover table-fw-widget">
<!--                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Pickup / Delivery</th>
                                    <th>Usage</th>
                                    <th class="nosort" style='width:140px;'>&nbsp;  </th>
                                </tr>
                            </thead>-->
                            <!--<tbody id='specialList'>-->

<!--                                <tr class="odd gradeX">
                                    <td>4 X Medium Traditional Pizza's</td>
                                    <td>$24.30</td>
                                    <td>Pickup Only</td>
                                    <td > 1636 ($38,405.20)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>-->


<!--                                <tr class="odd gradeX">
                                    <td>Family Traditional Pizza</td>
                                    <td>$33.90</td>
                                    <td>Both</td>
                                    <td > 2271 ($34,607.00)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>Kids Traditional Pizza</td>
                                    <td>$9.90</td>
                                    <td>Both</td>
                                    <td > 319 ($669.90)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>4 X Medium Traditional Pizza's</td>
                                    <td>$24.30</td>
                                    <td>Pickup Only</td>
                                    <td > 1636 ($38,405.20)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>


                                <tr class="odd gradeX">
                                    <td>Family Traditional Pizza</td>
                                    <td>$33.90</td>
                                    <td>Both</td>
                                    <td > 2271 ($34,607.00)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>Kids Traditional Pizza</td>
                                    <td>$9.90</td>
                                    <td>Both</td>
                                    <td > 319 ($669.90)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>4 X Medium Traditional Pizza's</td>
                                    <td>$24.30</td>
                                    <td>Pickup Only</td>
                                    <td > 1636 ($38,405.20)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>


                                <tr class="odd gradeX">
                                    <td>Family Traditional Pizza</td>
                                    <td>$33.90</td>
                                    <td>Both</td>
                                    <td > 2271 ($34,607.00)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>Kids Traditional Pizza</td>
                                    <td>$9.90</td>
                                    <td>Both</td>
                                    <td > 319 ($669.90)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>


                                <tr class="odd gradeX">
                                    <td>4 X Medium Traditional Pizza's</td>
                                    <td>$24.30</td>
                                    <td>Pickup Only</td>
                                    <td > 1636 ($38,405.20)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>


                                <tr class="odd gradeX">
                                    <td>Family Traditional Pizza</td>
                                    <td>$33.90</td>
                                    <td>Both</td>
                                    <td > 2271 ($34,607.00)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>Kids Traditional Pizza</td>
                                    <td>$9.90</td>
                                    <td>Both</td>
                                    <td > 319 ($669.90)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd gradeX">
                                    <td>4 X Medium Traditional Pizza's</td>
                                    <td>$24.30</td>
                                    <td>Pickup Only</td>
                                    <td > 1636 ($38,405.20)</td>
                                    <td class="text-right">
                                        <button class="btn btn-space btn-default">Edit</button> <button class="btn btn-space btn-primary hover">Delete</button>
                                    </td>
                                </tr>-->


                            <!--</tbody>-->
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!--<pre id="original"></pre>-->
        <!--<pre id="ref"></pre>-->
        <input type="hidden" id="ref" name="ref">
        <!--<pre id="copy"></pre>-->

        <div class="row">
            <div class="col-md-12">

                <form id="special-form">
                    <div class="panel panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            <span class="fleft">Add Special</span>
                            <span class="col-md-4">
                                <input class="form-control input-sm" type="text" id="specialName" name="specialName" placeholder="Special Name">
                            </span>
                        </div>
                        <div class="clear"></div>
                        <div class="panel-body">
                            <hr />
                            <div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label text-right  t10">Select Category</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="categoryList" name="categoryList">
                                        </select>
                                    </div>
                                    <input type="hidden" id="catName1" name="catName1" value="">
                                    <input type="hidden" id="eid" name="eid">
                                    <input type="hidden" id="specialId" name="specialId">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-1 control-label text-right  t10">Quantity</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="intQty" name="intQty">
                                            <?php for ($i = 1; $i <= 20; $i++) { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-1 control-label text-right  t10">Size</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="intSizes" name="intSizes">
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-2 text-right">
                                    <span class="btn btn-space btn-primary btn-lg" onclick="return addSpecialCategory();">  Add to Special</span>
                                </div>

                            </div>

                            <div class="clear"></div> 
                            <hr /> 
                            <div class="col-md-5 table-responcive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Size</th>
                                            <th>&nbsp; </th>
                                        </tr>
                                    </thead>
                                    <tbody id="specialCategoryList">
                                    </tbody>
                                </table>
                            </div>

                            <div class="clear"></div> 
                            <hr/> 
                            <div>
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-right t10">Cost</label>
                                    <div class="col-md-1">
                                        <div class="input-group xs-mb-15"> 
                                            <input placeholder="$35" id="cost" name="cost" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label text-right t10">Pickup / Delivery</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id='pickup_delivery' name="pickup_delivery">
                                            <option value='1'>Both </option>
                                            <option value='2'>Pick up Only</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label text-right t10">Special Photo</label>
                                    <div class="col-md-2 t10">
                                        <input name="specialfile" id="specialfile" data-multiple-caption="{count} files selected" class="inputfile" type="file">
                                        <label for="specialfile" class="btn-default"> <i class="mdi mdi-upload"></i><span>Browse files...					</span></label>
                                        <div class="replacespecialfile" style="clear: both;"></div>
                                    </div>
                                </div>

                                <div class="form-group col-md-2 text-right">
                                    <button class="btn btn-space btn-primary btn-lg" type="submit">  Add Special</button>
                                    <!--<button class="btn btn-space btn-primary btn-lg" onclick="return addSpeical();">  Add Special</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

<script type="text/javascript">
                                        $(document).ready(function () {
                                            App.init();
//                                            App.dataTables();
                                        });
</script>
<?php
include("include/footer.php")
?>  
<script src="js/special.js" type="text/javascript"></script>
