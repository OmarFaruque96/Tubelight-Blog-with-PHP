<?php include 'inc/header.php'; ?>
<div class="main-panel">
    <div class="content-wrapper">
    	<div class="row">
    		<div class="col-md-5 grid-margin stretch-card">
				<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new category</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="categoryname">Category Name</label>
                      <input type="text" class="form-control" id="categoryname" placeholder="Category Name" required>
                    </div>

                    <div class="form-group">
	                    <label>Select Parent Category (if any)</label>
	                    <select class="form-control">
	                      <option value="AL" data-select2-id="3">Alabama</option>
	                      <option value="WY" data-select2-id="10">Wyoming</option>
	                      <option value="AM" data-select2-id="11">America</option>
	                      <option value="CA" data-select2-id="12">Canada</option>
	                      <option value="RU" data-select2-id="13">Russia</option>
	                    </select>
	                  </div>
                    
                    <div class="form-group">
                      <label for="icon">Category Icon (optional)</label>
                      <input type="file" class="form-control" id="icon" >
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>		
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">All Categories</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Icon</th>
                          <th>Category Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                        	<td>01</td>
                          <td>Search Engine Marketing</td>
                          <td class="font-weight-bold">$362</td>
                          <td>21 Sep 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>

                          <td>Search Engine Optimization</td>
                          <td class="font-weight-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>

                          <td>Display Advertising</td>
                          <td class="font-weight-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>
                        	
                          <td>Pay Per Click Advertising</td>
                          <td class="font-weight-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>

                          <td>E-Mail Marketing</td>
                          <td class="font-weight-bold">$781</td>
                          <td>01 Nov 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>

                          <td>Referral Marketing</td>
                          <td class="font-weight-bold">$283</td>
                          <td>20 Mar 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                        	<td>01</td>

                          <td>Social media marketing</td>
                          <td class="font-weight-bold">$897</td>
                          <td>26 Oct 2018</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
    </div>

<?php include 'inc/footer.php'; ?>