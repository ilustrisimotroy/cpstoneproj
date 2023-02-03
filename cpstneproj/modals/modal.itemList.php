
<!-- Add Item -->
<div class="offcanvas offcanvas-end" style="width: 45%;" id="offcanvasRight" >
  <div class="modal-header">
    <div class="offcanvas-header-title">
      <h5 class="offcanvas-title">
      <span class="right-icon ms-auto"><i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="offcanvas" style="margin: 15px;"></i></span> 
        <!-- <button  class="btn-close" data-bs-dismiss="offcanvas" ></button> -->
        Add New Item
      </h5>
    </div>    
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <form>
      <div class="row pt-2">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                        Item No.
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="" id="">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-12 col-sm-6 col-xs-12">
                        Category
                      </label>

                      <script>
                        $(document).ready(function() {
                            $("#selects").select2({
                                theme: "classic",
                                placeholder: "Select Category"
                            });
                        });
                      </script>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mt-2">
                        <div class="form-group">
                          <div class="input-group">
                            <select class="form-select" id="selects">
                                <option hidden></option>
                                <option>orange</option>
                                <option>white</option>
                                <option>purple</option>
                            </select>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                        Description
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="" id="">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Unit of Measure
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                              <input type="email" class="form-control form-control-sm" name="" id="">
                                <!-- <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-radius: 5px" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="bi bi-plus"></i>
                                </button> -->
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Status
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                          <select class="form-select form-select-sm" aria-label="Status">
                            <option value="Enabled" Selected>Enabled</option>
                            <option value="Disabled">Disabled</option>
                          </select>
                          <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                  <!-- <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-12 col-sm-6 col-xs-12 mb-2">
                        Shipping Address
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                            <textarea class="form-control" placeholder="Please Enter Shipping Address" id="floatingTextarea2" style="height: 100px; resize:none;"></textarea>
                            <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div> -->

                  <!-- <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-sm-6 col-xs-6 mt-4">
                    <div class="form-group">
                        <div class="form-floating">
                        <textarea class="form-control" style="height: 100%;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Remarks</label>
                        </div>
                    </div>
                    </div>
                  </div> -->

                </div>
              </div>


        
      
    </div>

        <footer class="float-end modal-footer" >
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Item <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
            <button type="submit" class="btn btn-secondary" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
        </footer>
  </div>
        </form>
</div>







<!-- Edit Item -->

<div class="offcanvas offcanvas-end" style="width: 45%;" id="editItemCanvas" >
  <div class="modal-header">
    <div class="offcanvas-header-title">
      <h5 class="offcanvas-title">
      <span class="right-icon ms-auto"><i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="offcanvas" style="margin: 15px;"></i></span> 
        <!-- <button  class="btn-close" data-bs-dismiss="offcanvas" ></button> -->
        Edit Item
      </h5>
    </div>    
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <form>
      <div class="row pt-2">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                        Item No.
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="" id="">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-12 col-sm-6 col-xs-12">
                        Category
                      </label>

                      <script>
                        $(document).ready(function() {
                            $("#selectCategory2").select2({
                                theme: "classic",
                                placeholder: "Select Category"
                            });
                        });
                      </script>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mt-2">
                        <div class="form-group">
                          <div class="input-group">
                            <select class="form-select" id="selectCategory2">
                                <option hidden></option>
                                <option>orange</option>
                                <option>white</option>
                                <option>purple</option>
                            </select>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                        Description
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control form-control-sm" name="" id="">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Unit of Measure
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                              <input type="email" class="form-control form-control-sm" name="" id="">
                                <!-- <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-radius: 5px" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="bi bi-plus"></i>
                                </button> -->
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Status
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                          <select class="form-select form-select-sm" aria-label="Status">
                            <option value="Enabled" Selected>Enabled</option>
                            <option value="Disabled">Disabled</option>
                          </select>
                          <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>


        
      
    </div>

        <footer class="float-end modal-footer" >
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Save Changes <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
            <button type="submit" class="btn btn-secondary" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
        </footer>
  </div>
        </form>
</div>