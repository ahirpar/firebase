<?php
	include("include/header.php");
?>
 <div class="page-title"><span>Add Driver</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
     <div class="row">
	 	<div class="col-md-12">
              <div class="panel panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Add New Driver<span class="panel-subtitle">Please enter details for your new driver.</span></div>
			  <p class="divider1"></p>
                <div class="panel-body">
                 	<div class="text-center">
        			 <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                      
                    <div class="form-group">
                      <label class="col-md-3 control-label">Name</label>
                      <div class="col-md-5">
                        <input placeholder="Jade Smith" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Mobile</label>
                      <div class="col-md-5">
                        <input placeholder="28536952" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Email</label>
                      <div class="col-md-5">
                        <input placeholder="jade@gmail.com" class="form-control" type="text">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-md-3 control-label">Password</label>
                      <div class="col-md-5">
                        <input placeholder="abc$123" class="form-control" type="text">
                      </div>
                    </div>
 					
					<div class="form-group">
                      <label class="col-md-3 control-label">Driver Profile Picture </label>
                       <div class="col-md-5 text-left top10">
                        <input name="file-1" id="file-1" data-multiple-caption="{count} files selected" multiple="" class="inputfile" type="file">
                        <label for="file-1" class="btn-default"> <i class="mdi mdi-upload"></i> <span>Browse files...</span> </label>
                       </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Branch</label>
                      <div class="col-sm-5">
                        <select class="form-control">
                          <option>Geelong </option>
                          <option>Geelong West </option>
                          <option>Hilton </option>
                         </select>
                      </div>
                    </div>
					 
 					 
					
					<div class="row xs-pt-15">
                       <div class="col-md-8">
                         <p class="text-right">
                           <button type="submit" class="btn btn-space btn-primary btn-lg">Add Driver </button>
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

    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
 	<script type="text/javascript">
      $(document).ready(function(){
	  App.formElements();
       	App.init();
       });
    </script>
	
   
 
<?php
	include("include/footer.php")
?>  
   