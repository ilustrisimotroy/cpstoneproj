<div class="offcanvas offcanvas-end" style="width: 60%;" id="offcanvasPO" >
  <div class="modal-header">
    <div class="offcanvas-header-title">
      <h5 class="offcanvas-title">
      <span class="right-icon ms-auto"><i type="button" class="bi bi-x-lg" aria-label="Close" data-bs-dismiss="offcanvas" style="margin: 15px;"></i></span> 
        <!-- <button  class="btn-close" data-bs-dismiss="offcanvas" ></button> -->
        Create Purchase Order
      </h5>
    </div>    
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <form>
      <div class="row pt-2" >
        <div class="col-md-6 col-sm-6 col-xs-12" >
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2">
                    P.O Code
                </label>
                      
                <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="" id="" disabled>
                            <span id="trapping"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                Supplier
                </label>
                
                <div class="col-md-12 col-sm-6 col-xs-6" style="margin-top: 1px;">
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

        <div class="row m-1 p-2">
          <div class="col-md-24 col-sm-24 col-xs-24">
              <div class="form-group">
                  <label for="" class="col-md-6 col-sm-6 col-xs-6 mb-2 fs-5">
                      Item Form
                  </label>
                  <hr class="dropdown-divider"/>
              </div>


              <div class="row m-2 mt-5">
                <div class="col-md-3 col-sm-3 col-xs-3 mb-3">
                    <div class="form-group">

                    <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                      Item
                    </label>

                    <script>
                        $(document).ready(function() {
                          $("#selectItems").select2({
                              theme: "classic",
                              placeholder: "Select Items"
                          });
                        });
                    </script>

                        <div class="form-group" style="margin-top: 2px;">
                          <div class="input-group">
                            <select class="form-select" id="selectItems" >
                              <option hidden></option>
                              <option>orange</option>
                              <option>white</option>
                              <option>purple</option>
                            </select>
                          </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3 mb-3">
                    <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                      Unit
                    </label>
                        <div class="input-group">
                          <input type="text" class="form-control form-control-sm" name="" id="">
                            <span id="trapping"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-2 mb-3">
                    <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Quantity
                    </label>
                        <div class="input-group">
                          <input type="text" class="form-control form-control-sm" name="" id="" >
                            <span id="trapping"></span>
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-2 col-sm-2 col-xs-2 mb-3">
                    <div class="form-group">
                    <label for="" class="col-md-6 col-sm-6 col-xs-12 mb-2">
                        Cost
                    </label>
                        <div class="input-group">
                          <input type="text" class="form-control form-control-sm" name="" id="" >
                            <span id="trapping"></span>
                        </div>
                    </div>
                </div>  
                
                
                <div class="col-md-2 col-sm-1 col-xs-1">
                  <div class="float-end">
                    <button class="btn btn-sm btn-primary" style="margin-top: 32px;" type="button">
                      <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                          Add to list
                    </button>
                  </div>
                </div>
              </div>  <!-- End of Row -->

              
                <div class="card">
                    <div class="card-header">
                        P.O List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" style="width: 100%">
                              <colgroup>
                                  <col width="5%">
                                  <col width="10%">
                                  <col width="10%">
                                  <col width="25%">
                                  <col width="25%">
                                  <col width="25%">
                              </colgroup>
                              <thead>
                                <tr>
                                  <th class="text-center py-1 px-2"></th>
                                  <th class="text-center py-1 px-2">Qty</th>
                                  <th class="text-center py-1 px-2">Unit</th>
                                  <th class="text-center py-1 px-2">Item</th>
                                  <th class="text-center py-1 px-2">Cost</th>
                                  <th class="text-center py-1 px-2">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="py-1 px-2 text-center">
                                      <button class="btn btn-outline-danger btn-sm" type="button"><i class="bi bi-x"></i></button>
                                  </td>
                                  <td class="py-1 px-2 text-center">50</td>   
                                  <td >PCS</td>
                                  <td class="py-1 px-2 text-start">Item Description</td>
                                  <td class=" text-end">200</td>
                                  <td class=" text-end">200</td>                           
                                </tr>
                                <tr>
                                  <td class="py-1 px-2 text-center">
                                      <button class="btn btn-outline-danger btn-sm" type="button"><i class="bi bi-x"></i></button>
                                  </td>
                                  <td class="py-1 px-2 text-center">20</td>   
                                  <td >PCS</td>
                                  <td class="py-1 px-2 text-start">Item Description</td>
                                  <td class=" text-end">200</td>
                                  <td class=" text-end">200</td>                           
                                </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Sub Total</th>
                                    <th class="text-end py-1 px-2 sub-total">0</th>
                                </tr>
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Discount <input style="width:40px !important" name="discount_perc" class='' type="number" min="0" max="100" value="<?php echo isset($discount_perc) ? $discount_perc : 0 ?>">%
                                        <input type="hidden" name="discount" value="">
                                    </th>
                                    <th class="text-end py-1 px-2 discount"><?php //echo isset($discount) ? number_format($discount) : 0 ?></th>
                                </tr>
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Tax <input style="width:40px !important" name="tax_perc" class='' type="number" min="0" max="100" value="<?php echo isset($tax_perc) ? $tax_perc : 0 ?>">%
                                        <input type="hidden" name="tax" value="<?php //echo isset($discount) ? $discount : 0 ?>">
                                    </th>
                                    <th class="text-end py-1 px-2 tax"><?php// echo isset($tax) ? number_format($tax) : 0 ?></th>
                                </tr>
                                <tr>
                                    <th class="text-end py-1 px-2" colspan="5">Total
                                        <input type="hidden" name="amount" value="<?php //echo isset($discount) ? $discount : 0 ?>">
                                    </th>
                                    <th class="text-end py-1 px-2 grand-total">0</th>
                                </tr>
                            </tfoot>
                          </table>
                        </div>
                    </div>
                </div> <!-- End of Ccard -->

                <div class="col-md-6 col-sm-6 col-xs-6 mt-4">
                  <div class="form-group">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Remarks</label>
                    </div>
                  </div>
                </div>
          </div>


        </div> <!-- End of Canvas Body -->

      </div>
    </div>


        
      
    </div>

        <footer class="float-end modal-footer" >
            <button type="submit" class="btn btn-primary" name="" id="" data-loading-text="Loading.."> Add Supplier <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="offcanvas" name="" id="" data-loading-text="Loading.."> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
        </footer>
        </form>
  </div>
</div>
