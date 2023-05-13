<?php include 'inc/header.php'; ?>

<?php 

  if(isset($_POST['add_category'])){
    $name = $_POST['categoryname'];
    $pid = $_POST['parent_id'];

    $insert_sql = "INSERT INTO category (cat_name,is_sub,status) VALUES ('$name', '$pid', '1')";
    $insert_res = mysqli_query($db,$insert_sql);
    
    if($insert_res){
      header('Location: category.php');
    }else{
       die('Category insert error!'.mysqli_error($db));
    }

  }

?>

<div class="main-panel">
    <div class="content-wrapper">
    	<div class="row">
    		<div class="col-md-5 grid-margin stretch-card">
				<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new category</h4>
                  
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="categoryname">Category Name</label>
                      <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" required>
                    </div>

                    <div class="form-group">
	                    <label>Select Parent Category (if any)</label>
	                    <select class="form-control" name="parent_id">
	                      <option value="0" selected data-select2-id="3">Please select parent category</option>
	                      <?php 

                        $sql = "SELECT * FROM category WHERE is_sub = '0'";
                        $res = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                          $p_id = $row['ID'];
                          $p_name = $row['cat_name'];
                          ?>
                          <option value="<?php echo $p_id;?>" data-select2-id="3"><?php echo $p_name;?></option>
                          <?php
                        }

                        ?>
	                    </select>
	                  </div>

                    <button type="submit" name="add_category" class="btn btn-primary mr-2">Submit</button>
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