<?php
	include("include/header.php");
?>
 <div class="page-title"><span>System Setting</span></div>

<?php
	include("include/sidemenu.php");
?>
	  
 <div class="be-content">
 <div class="main-content container-fluid">
		
           
		   
 	<div class="row">
	
	<div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Product and ingredients setup
 					<div class="fright">
					  <button type="submit" class="btn btn-space btn-primary">Save</button>
                      <button class="btn btn-space btn-default">Edit</button>
					</div>
 				</div>
				<div class="divider1"></div>
				
                <div class="panel-body">
                  <form class="form-horizontal">
                     
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Ingredient Pricing</label>
                      <div class="col-sm-6">
                        <select class="form-control">
                          <option>Per prize group</option>
                          <option>Per prize group 2</option>
                          <option>Per prize group 3</option>
                          <option>Per prize group 4</option>
                          <option>Per prize group 5</option>
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Allow Half/Half Products </label>
                      <div class="col-sm-6">
                        <select class="form-control">
                          <option>Half the price of each product</option>
                          <option>Half the price of each product 2</option>
                          <option>Half the price of each product 3</option>
                          <option>Half the price of each product 4</option>
                          <option>Half the price of each product 5</option>
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Allow Half/Half Ingredients</label>
                      <div class="col-sm-6">
                        <select class="form-control">
                          <option>Half the price of each Ingredients</option>
                          <option>Half the price of each Ingredients 2</option>
                          <option>Half the price of each Ingredients 3</option>
                          <option>Half the price of each Ingredients 4</option>
                          <option>Half the price of each Ingredients 5</option>
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Allow Half/Half in Specials</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline w70">
                          <input checked="" name="rad3" id="rad6" type="radio">
                          <label for="rad6">Yes</label>
                        </div>
                        <div class="be-radio inline w70">
                          <input checked="" name="rad3" id="rad7" type="radio">
                          <label for="rad7">No</label>
                        </div>
                         
                      </div>
                    </div>
                     
                  </form>
                </div>
              </div>
            </div>
			
			
	<div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Order and Delivery setup
 					<div class="fright">
					  <button type="submit" class="btn btn-space btn-primary">Save</button>
                      <button class="btn btn-space btn-default">Edit</button>
					</div>
 				</div>
				<div class="divider1"></div>
				
                <div class="panel-body">
                  <form class="form-horizontal">
                     
                   <div class="form-group">
                      <label class="col-md-3 control-label">Minimum pickup order value</label>
                      <div class="col-md-6">
                        <div class="input-group xs-mb-15"><span class="input-group-addon">$</span>
                          <input placeholder="10" class="form-control" type="text">
                        </div>
                       </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Minimum delivery order value</label>
                      <div class="col-md-6">
                        <div class="input-group xs-mb-15"><span class="input-group-addon">$</span>
                          <input placeholder="10" class="form-control" type="text">
                        </div>
                       </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Allow Deliveries</label>
                      <div class="col-md-6">
                        <div class="be-checkbox be-checkbox-color inline">
                          <input id="check9" checked="" type="checkbox">
                          <label for="check9">Yes</label>
                        </div>
                        <div class="be-checkbox be-checkbox-color inline">
                          <input id="check10" type="checkbox">
                          <label for="check10">No</label>
                        </div>
                         
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Delivery Free Over</label>
                      <div class="col-md-6">
                        <div class="input-group xs-mb-15">
                          <div class="input-group-addon">
                            <div class="be-checkbox">
                              <input id="check12" type="checkbox">
                              <label for="check12"></label>
                            </div>
                          </div>
                          <input class="form-control" type="text" placeholder=" $80">
                        </div>
                         
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Default delivery waiting time</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text">
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Default pickup waiting time</label>
                      <div class="col-md-6">
                        <input placeholder="25 minutes" class="form-control" type="text">
                      </div>
                    </div>
                     
                  </form>
                </div>
              </div>
            </div>
			
			
	<div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Order for Later (Future Orders)
 					<div class="fright">
					  <button type="submit" class="btn btn-space btn-primary">Save</button>
                      <button class="btn btn-space btn-default">Edit</button>
					</div>
 				</div>
				<div class="divider1"></div>
				
                <div class="panel-body">
                  <form class="form-horizontal">
 					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Allow order for later orders ?</label>
                      <div class="col-md-6">
                        <div class="be-checkbox be-checkbox-color inline">
                          <input id="check9" checked="" type="checkbox">
                          <label for="check9">Yes</label>
                        </div>
                        <div class="be-checkbox be-checkbox-color inline">
                          <input id="check10" type="checkbox">
                          <label for="check10">No</label>
                        </div>
                         
                      </div>
                    </div>
					
 				   <div class="form-group">
                      <label class="col-md-3 control-label">Customer can order in advance a Minimum of</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="0 Days">
                      </div>
                    </div>
					
				   <div class="form-group">
                      <label class="col-md-3 control-label">Customer can order in advance a Maximum of</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="10 Days">
                      </div>
                    </div>
				
				   <div class="form-group">
                      <label class="col-md-3 control-label">At start of shift  - First order can be ready in </label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="45 mins">
                      </div>
                    </div>
				   
				   <div class="form-group">
                      <label class="col-md-3 control-label">During shift  - Minimum time 'For later' orders</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" placeholder="75 mins">
                      </div>
                    </div>
                     
                  </form>
                </div>
              </div>
            </div>
    	 
			
 	</div>
	
               
 </div>
</div>
 	 
 
 
 <script type="text/javascript">
      $(document).ready(function(){
       	App.init();
       });
    </script> 
<?php
	include("include/footer.php")
?>  
   