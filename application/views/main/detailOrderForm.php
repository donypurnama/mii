<div class="title-block">
  <h3 class="title"> Orders Detail</h3>
  <nav>
    <a class="breadcrumb-item" href="order/orders">Order</a>
    <span class="breadcrumb-item active"><?=$param_soid;?></span>
  </nav>

  <div class="pull-right">
    <a class="btn btn-primary pull-right" href="order/additem"><i class="fa fa-plus"></i> Create Item</a>
  </div>

</div>

<section class="section form-shipment-detail">
  <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-block sameheight-item">
              <div class="title-block">
                  <h3 class="title"> Overview </h3>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">SO No.</label>
                          <p class="form-control-static"><?=$param_soid;?></p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">Ship To:</label>
                          <p class="form-control-static">Becker Berlin</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group"> <label class="control-label">Address</label>
                          <p class="form-control-static">Hermsdorf, Calvinstreet 36, 13467 Berlin, Germany</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-block sameheight-item">
              <div class="title-block">
                  <h3 class="title">  </h3>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">Ordered Date</label>
                          <p class="form-control-static">2014.10.28</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">Price</label>
                          <p class="form-control-static"><h3>4.3700,00 EUR</h3></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">Requested Date</label>
                          <p class="form-control-static">2014.10.28</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group"> <label class="control-label">Sell Price Date</label>
                          <p class="form-control-static"><h3>4.5700,00 EUR</h3></p>
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

    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Items </h3>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-responsive">
                      <table class="table">
                        <thead style="font-size:12px;">
                          <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Your Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody style="font-size:12px;">
                          <tr>
                            <td>10 Oplex Air Laptop</td>
                            <td>1</td>
                            <td>1.330,00</td>
                            <td>1.430.00</td>
                            <td>
                              <a href="#"><i class="fa fa-pencil-square-o text-success"></i></a>
                              <a href="#"><i class="fa fa-trash text-danger"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>20 Oplex WL Laptop</td>
                            <td>1</td>
                            <td>3.040,00</td>
                            <td>3.140.00</td>
                            <td>
                              <a href="#"><i class="fa fa-pencil-square-o text-success"></i></a>
                              <a href="#"><i class="fa fa-trash text-danger"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


    <div class="row">
      <div class="col-md-8 offset-md-2">
          <div class="card card-block sameheight-item">
              <div class="title-block">
                  <h3 class="title"> Purchase Order </h3>
              </div>
              <form>
                  <div class="form-group">
                      <label class="control-label">Customer Name</label>
                      <input type="text" class="form-control boxed" placeholder="Customer Purchase Number" disabled>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Sold To</label>
                      <select class="form-control select2" style="width: 100%;" name="soldto">
                          <option selected="selected" value="0">Employee</option>
                          <option value="1">Driver</option>
                          <option value="9">Admin</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label">To Payment</label>
                      <select class="form-control select2" style="width: 100%;" name="topayment">
                          <option selected="selected" value="0">Employee</option>
                          <option value="1">Driver</option>
                          <option value="9">Admin</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Incoterm</label>
                      <select class="form-control select2" style="width: 100%;" name="incoterm">
                          <option selected="selected" value="0">Employee</option>
                          <option value="1">Driver</option>
                          <option value="9">Admin</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Request Date</label>
                      <input type="text" class="form-control boxed" placeholder="Request Date" disabled value="<?=date('Y-m-d');?>">
                  </div>
                  <div class="form-group">
                    <div class="pull-right">
                      <a href="#" class="btn btn-success pull-right disabled">Submit</a>
                    </div>
                  </div>
              </form>
          </div>
      </div>
    </div>

</section>
