<?php
include("include/header.php");
?>
<style>
    .contentPost { display:none;}
    .modal{ overflow-y: auto;}
</style>
<!--<script>
   </script>-->
<div class="page-title"><span>Menu</span></div>
<?php
include("include/sidemenu.php");
?>

<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12 p0">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-divider  ptitle">
                            Categories
                            <span class="panel-subtitle psubtitle">Drag & drop the order of categories as they will appear in the app<br />  and the website.<button class="btn btn-space btn-default btn-space1 fright"  data-toggle="modal" data-target="#category">Add Catagory</button></span>
                        </div>
                        <p class="divider1"></p>
                        <div class="panel-body">
                            <div class="cf nestable-lists">
                                <div id="nestable" class="dd">
                                    <ol class="dd-list" id="categoryList">
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="eid" name="eid">
                <textarea hidden id="nestable-output"></textarea>
                <div id="menucategoryList"></div>

            </div>
            <div class="col-md-6">
                <div class="col-md-12 p0">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-divider ptitle">Menu Items
                            <div class="menuitemsearch">
                                <div class="email-search w50">
                                    <div class="input-group input-search input-group-sm">
                                        <input placeholder="Search mail..." class="form-control" type="text"><span class="input-group-btn">
                                            <button type="button" class="btn btn-default"><i class="icon mdi mdi-search"></i></button></span>
                                    </div>
                                </div>
                                <button type="button"  class="btn btn-space btn-default fright" data-toggle="modal" data-target="#md-custom">Add Category</button>
                            </div>
                        </div>
                        <p class="divider1"></p>
                        <div class="panel-body">
                            <ul id="thumbails" class="list-unstyled  ">
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                                <div class="thumbnail  col-md-4 col-sm-6 col-xs-12">
                                    <img src="assets/img/pizza.png" alt="titre">
                                    <div class="caption text-center titleicon">
                                        <h3 class="boxtitle11">Vegeterian  Pizza</h3>
                                        <p>
                                            <button type="button" class="btn btn-default viewbtnb" ><span>View</span> </button>  
                                            <button type="button" class="btn btn-default trash"  >
                                                <span class="glyphicon glyphicon-trash f16 to4" aria-hidden="true"></span>
                                            </button>  
                                        </p>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Popup Start---->
<div id="category" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div> 
            <div class="modal-body">
                <div class="">
                    <div class="col-md-12">
                        <div class="text-center md-mb-30">
                            <form style="border-radius: 0px;" id="form-category" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Category Name</label>
                                    <div class="col-md-8">
                                        <input parsley-trigger="change" name="catName" class="form-control" id="catName" type="text">
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button class="btn btn-primary btn-xl" id="categoryBtn">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----Popup End---->
<!-----  model start  --------> 
<div id="md-custom" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog modal-dialog1 col-md-12">
        <div class="modal-content modal-content1">
            <div class="modal-body">
                <div class="">

                    <div class="col-md-12">
                        <h1>Add Item</h1>
                        <div class="mainadditem">
                            <!--left side-->
                            <div class="col-md-4">
                                <div class="text-center">
                                    <form id="my-awesome-dropzone" action="#" class="dropzone">
                                        <div class="dz-message">
                                            <div class="icon"><span class="mdi mdi-cloud-upload"></span></div>
                                            <h2>Drag and Drop Item Photo</h2> 
                                            <div class="dropzone-mobile-trigger needsclick"></div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clear"></div>
                                <div class="mt3">
                                    <p class="sizestitle">Sizes</p>
                                    <div class="btn-group btn-hspace fright">


                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">Add Size <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                                        <ul role="menu" class="dropdown-menu" id="sizeList">

                                        </ul>
                                        <input type="hidden" name="file_hd" id="file_hd" value="0">

                                    </div>

                                    <button type="button" class="btn btn-space btn-default fright" data-toggle="modal" data-target="#addSizes">Add Size Name</button>
                                </div>

                                <span class="addsizes"></span>
                                <div class="clear"></div>
                                <div class="mt3">
                                    <div class="col-md-6 pp0 fright">
                                        <select class="form-control" id="defaultsizeList" name="defaultsizeList"></select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="be-checkbox">
                                            <input id="isAbbreviation" name="isAbbreviation" checked="" type="checkbox">
                                            <label for="isAbbreviation"><span class=" ">Hide Abbreviation</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--left side-->
                            <!--right side-->
                            <div class="col-md-8 xs-mt-40">
                                <div>
                                    <form id="add-item-form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label sidepanellable">Category</label>
                                            <div class="col-sm-8" id="popupcategoryList">

                                            </div>
                                        </div>
                                        <div class="form-group mt3">
                                            <input id="addExtraId" style="display:none;" name="addExtraId"  class="form-control">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group mt3">
                                            <label class="col-sm-2 control-label sidepanellable">Item Name</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" id="itemName" name="itemName" type="text" placeholder="Item Name">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group mt3">
                                            <label class="col-sm-2 control-label sidepanellable">Item Description</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="itemDesc" name="itemDesc" type="text" placeholder="Item Description"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clear"></div>
                                    <!--Ingradiants Start-->
                                    <div class="form-group mt3">
                                        <label class="col-sm-2 control-label sidepanellable">Ingredients</label>
                                        <div class="col-sm-8">
                                            <div class="panel panel-default">
                                                <div class="tab-container">
                                                    <input type="hidden" name="ingredients_hd" id="ingredients_hd"  value="0">
                                                    <ul class="nav nav-tabs" id="IngredientsList"></ul>
                                                    <div class="tab-content" id="inttab">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <form id="addIngredients-form">
                                        <div class="form-group mt3"> 
                                            <label class="col-md-2 control-label sidepanellable">Add Ingredients</label>
                                            <div class="col-md-3">
                                                <input class="form-control input-xs xs-mb-20" id="AddIngredientsName" name="AddIngredientsName" type="text" placeholder="Ingredients Name">
                                            </div>
                                            <div class="col-md-2 pp0">
                                                <select class="form-control input-xs xs-mb-20" id="drpdownIngredients" name="drpdownIngredients"></select>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group xs-mb-20"><span class="input-group-addon input-xs">$</span>
                                                    <input placeholder="14.20" onkeypress="return KeycheckOnlyNumeric(event)" name="AddIngredientsPrice" id="AddIngredientsPrice" class="form-control input-xs" type="text" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-space btn-primary active">Add Ingredients</button>
                                            </div>
                                        </div>
                                    </form>


                                    <!--Ingradiants End-->
                                    <div class="clear"></div>

                                    <div class="form-group mt3">
                                        <label class="col-sm-2 control-label sidepanellable">Extra</label>
                                        <div class="col-sm-8">
                                            <div class="panel panel-default">
                                                <div class="tab-container">
                                                    <input type="hidden" name="extra_hd" id="extra_hd"  value="0">
                                                    <ul class="nav nav-tabs" id="ExtraList"></ul>
                                                    <div class="tab-content" id="extraTab">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <form id="addExtra-form">
                                        <div class="form-group mt3">
                                            <label class="col-md-2 control-label sidepanellable">Add Extra</label>
                                            <div class="col-md-3">
                                                <input class="form-control input-xs xs-mb-20" id="AddExtraName" name="AddExtraName" type="text" placeholder="Extra Name">
                                            </div>
                                            <div class="col-md-2 pp0">
                                                <select class="form-control input-xs xs-mb-20" id="drpdownExtra" name="drpdownExtra"></select>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group xs-mb-20"><span class="input-group-addon input-xs">$</span>
                                                    <input placeholder="14.20" onkeypress="return KeycheckOnlyNumeric(event)" name="AddExtraPrice" id="AddExtraPrice" class="form-control input-xs" type="text" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-space btn-primary active">Add Extra</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clear"></div>
                                    <div class="form-group mt3">
                                        <label class="col-md-2 control-label sidepanellable">Discounts</label>
                                        <div class="col-md-7">
                                            <div class="be-checkbox">
                                                <input id="isDiscountable" checked="" type="checkbox">
                                                <label for="isDiscountable"><span class=" ">Allow Discounts for this item</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pp0">
                                            <input type="button" id="btn" value="Add Item" class="btn btn-space btn-success btn-lg"></div>
                                        <!--<div class="col-md-3 pp0"><button type="submit" class="btn btn-space btn-success btn-lg" onclick="return addItem();"> Add Item</button></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-----  model end  --------> 

<div id="addExtra" tabindex="9" role="dialog" class="modal fade">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div> 
            <div class="modal-body">
                <div class="">
                    <div class="col-md-12">
                        <div class="text-center md-mb-30">
                            <form style="border-radius: 0px;" id="extra-form" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Extra Category Name</label>
                                    <div class="col-md-8">

                                        <input id="addExtraName" name="addExtraName" parsley-trigger="change" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button class="btn btn-primary btn-xl" id="categoryBtn"  onclick="addExtra()">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="addIngredients" tabindex="9" role="dialog" class="modal fade">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div> 
            <div class="modal-body">
                <div class="">
                    <div class="col-md-12">
                        <div class="text-center md-mb-30">
                            <form style="border-radius: 0px;" id="ingredients-form" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ingredients Category Name</label>
                                    <div class="col-md-8">
                                        <input id="addIngredientsId" id="addIngredientsId" type="hidden">
                                        <input id="addIngredientsName" name="addIngredientsName" parsley-trigger="change" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button class="btn btn-primary btn-xl" id="categoryBtn" >Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addSizes" tabindex="9" role="dialog" class="modal fade">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div> 
            <div class="modal-body">
                <div class="">
                    <div class="col-md-12">
                        <div class="text-center md-mb-30">
                            <form id="size-form">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Size Name</label>
                                    <div class="col-md-8">
                                        <input name="addSizeName" id="addSizeName" parsley-trigger="change" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button class="btn btn-primary btn-xl" style="margin-top:10px;" id="sizeBtn"  onclick="return addSizes()">Add</button>
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
    .modal-dialog1{ width:100% !important; }
    .modal-content1 { max-width: 100% !important;  min-width: 100% !important;   padding-bottom: 100px !important; }
</style>

<?php
include("include/footer.php")
?>  
<script src="js/menu.js" type="text/javascript"></script>
<script src="assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="assets/lib/dropzone/dist/dropzone.css"/>

<script src="assets/lib/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="assets/js/app-ui-nestable-lists.js" type="text/javascript"></script>
<script type="text/javascript">
                                        $(document).ready(function () {
                                            //initialize the javascript
                                            App.init();
                                            App.uiNestableLists();
                                        });
</script>
