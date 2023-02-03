<div class="offcanvas offcanvas-end" style="width: 60%;" id="offcanvasPR" >
  <div class="modal-header">
    <div class="offcanvas-header-title">
      <h5 class="offcanvas-title">
      <span class="right-icon ms-auto"><i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="offcanvas" style="margin: 15px;"></i></span> 
        <!-- <button  class="btn-close" data-bs-dismiss="offcanvas" ></button> -->
        Create Purchase Request
      </h5>
    </div>    
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <form>
      <div class="row pt-2" >
        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                    PR no.
                </label>
                      
                <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                    <div class="    form-group">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="" id="" >
                            <span id="trapping"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                    Supplier
                </label>
                      
                <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                    <div class="form-group">
                        <div class="input-group">
                          <select class="form-select" id="select">
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

        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                    Rqst By
                </label>

                <script>
                    $(document).ready(function() {
                        $("#requestedBy").select2({
                            theme: "classic",
                            placeholder: "Request By"
                        });
                    });
                </script>
                      
                <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                    <div class="form-group">
                        <div class="input-group">
                          <select class="form-select" id="requestedBy">
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

        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                    Status
                </label>

                <script>
                    $(document).ready(function() {
                        $("#status").select2({
                            theme: "classic",
                            placeholder: "Select Status"
                        });
                    });
                </script>
                      
                <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                    <div class="form-group">
                        <div class="input-group">
                          <select class="form-select" id="status">
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
        

        

        <!-- <div class="row col-md-24 mb-5 "> -->
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-6">
                        Item
                    </label>

                    <script>
                        $(document).ready(function() {
                            $("#selectItem").select2({
                                theme: "classic",
                                placeholder: "Select Items"
                            });
                        });

                    </script>
                        
                    <div class="col-md-12 col-sm-6 col-xs-6" style="margin-top: 6px;">
                        <div class="form-group">
                            <div class="input-group">
                            <select class="form-select" id="selectItem">
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

            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-6">
                        UoM
                    </label>
                        
                    <div class="col-md-12 col-sm-6 col-xs-6 mt-1">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="" id="">
                                <span id="trapping"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-6">
                        Quantity
                    </label>
                        
                    <div class="col-md-12 col-sm-6 col-xs-6 mt-1">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="" id="" >
                                <span id="trapping"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-6">
                        Date
                    </label>
                        
                    <div class="col-md-12 col-sm-6 col-xs-6 mt-1">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="date" class="form-control form-control-sm" name="" id="" >
                                <span id="trapping"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->

        <div class="mt-4 mb-5 text-end">
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Item <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
        </div>
        

        



       

        <!-- <div class="row m-1 p-2"> -->
          <div class="col-md-24 col-sm-24 col-xs-24">

                <div class="card">
                    <div class="card-header">
                        List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" style="width: 100%">
                              <colgroup>
                                  <!-- <col width="5%"> -->
                                  <col width="5%">
                                  <col width="30%">
                                  <col width="10%">
                                  <col width="10%">
                                  <!-- <col width="10%">
                                  <col width="10%"> -->
                              </colgroup>
                              <thead>
                                <tr>
                                  <!-- <th class="text-center py-1 px-2"></th> -->
                                  <th class="text-center py-1 px-2">No.</th>
                                  <th class="text-center py-1 px-2">Description</th>
                                  <th class="text-center py-1 px-2">Quantity</th>
                                  <th class="text-center py-1 px-2">UoM</th>
                                  <!-- <th class="text-center py-1 px-2">Cost</th>
                                  <th class="text-center py-1 px-2">Total</th> -->
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <!-- <td class="text-center">
                                      <button class="btn btn-outline-danger btn-sm" type="button"><i class="bi bi-x"></i></button>
                                  </td> -->
                                  <td class="text-center">001</td>   
                                  <td class="text-start">Item Descriptiom</td>
                                  <td class="text-center">20</td>
                                  <td class=" text-center">Pcs</td>
                                  <!-- <td class=" text-end"></td>   
                                  <td class=" text-center">Cost * Qty</td>                         -->
                                </tr>
                              </tbody>
                              <!-- <tfoot>
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Sub Total</th>
                                    <th class="text-end py-1 px-2 sub-total">0</th>
                                </tr>
                                
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Total
                                        <input type="hidden" name="amount" value="<?php //echo isset($discount) ? $discount : 0 ?>">
                                    </th>
                                    <th class="text-end py-1 px-2 grand-total">0</th>
                                </tr>
                            </tfoot> -->
                          </table>
                        </div>
                    </div>
                </div> <!-- End of Ccard -->

                <div class="col-md-6 col-sm-6 col-xs-6 mt-4">
                  <div class="form-group">
                    <div class="form-floating">
                      <textarea class="form-control" style="height: 100%;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Remarks</label>
                    </div>
                  </div>
                </div>
          <!-- </div> -->


        </div> <!-- End of Canvas Body -->

      </div>
    </div>


        
      
    </div>

        <footer class="float-end modal-footer" >
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Request <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="offcanvas" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
        </footer>
      </form>
  </div>
</div>