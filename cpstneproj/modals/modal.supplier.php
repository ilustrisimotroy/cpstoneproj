<!-- Add Supplier Modal -->


<div class="offcanvas offcanvas-end" style="width: 45%;" tabindex="-1" id="offcanvasRight" >
  <div class="modal-header">
    <div class="offcanvas-header-title">
      <h5 class="offcanvas-title">
      <span class="right-icon ms-auto"><i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="offcanvas" style="margin: 15px;"></i></span> 
        <!-- <button  class="btn-close" data-bs-dismiss="offcanvas" ></button> -->
        Add New Supplier
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
                        Name
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Phone Number
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Email
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="email" class="form-control" name="add_fname" id="add_fname">
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
                          <select class="form-select" aria-label="Status">
                            <option value="Enabled" Selected>Enabled</option>
                            <option value="Disabled">Disabled</option>
                          </select>
                          <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-12 col-sm-6 col-xs-12 mb-2">
                        Tax Number
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="email" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
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
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-12 col-sm-6 col-xs-12 mb-2">
                        Billing Address
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                            <textarea class="form-control" placeholder="Please Enter Billing Address" id="floatingTextarea2" style="height: 100px; resize:none;"></textarea>
                            <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>


        
      </form>
    </div>

        <footer class="float-end modal-footer" >
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Supplier <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
            <button type="submit" class="btn btn-secondary" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
        </footer>
  </div>
</div>


<!-- <div class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" id="">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Add Supplier </h6>
            </div>
            <form action="" class="form-horizontal" auto-complete="off">
              <div class="modal-body">

                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6">
                        Company Name
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                        Contact Person
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                        Address
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                        Number
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="number" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                        Email
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="email" class="form-control" name="add_fname" id="add_fname">
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Supplier <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
                <button type="submit" class="btn btn-secondary" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
              </div>


            </form>

        </div>
    </div>
</div> -->