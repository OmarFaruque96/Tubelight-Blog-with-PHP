<?php include 'inc/header.php'; ?>
<div class="main-panel">
    <div class="content-wrapper">
    	<?php 

        if(isset($_GET['action'])){
            $do = $_GET['action'];
        }else{
            $do = 'view';
        }

        if($do == 'view'){
            // view html code
            ?>
            <div class="row">
           
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">All Posts</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Thumbnail</th>
                          <th>Date</th>
                          <th>Post Title</th>
                          <th>Desc</th>
                          <th>Category</th>
                          <th>Tags</th>
                          <th>Author</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        

        <?php 

        $posts_sql = "SELECT * FROM posts";
        $all_posts = mysqli_query($db, $posts_sql);

        $serial = 0;

        while($row = mysqli_fetch_assoc($all_posts)){
            $ID = $row['ID'];
            $Pdate = $row['Pdate'];
            $title = $row['title'];
            $pdesc = $row['pdesc'];
            $category = $row['category'];
            $tags = $row['tags'];
            $author = $row['author'];
            $thumbnail = $row['thumbnail'];
            $status = $row['status'];
            $serial++;
            ?>
            <tr>
                <td><?php echo $serial;?></td>
                <td>
                    <img src="images/posts/<?php echo $thumbnail;?>" width="140" />
                </td>
                <td><?php echo $Pdate;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $pdesc;?></td>
                <td><?php echo $category;?></td>
              <td><?php echo $tags;?></td>
              <td class="font-weight-bold"><?php echo $author;?></td>
              <td>
                  <?php 

                  if($status == 0){
                    echo 'Inactive';
                  }else{
                    echo 'Active';
                  }

                  ?>
              </td>
              <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
            </tr>
            <?php
        }

        ?>
                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

            <?php
        }
        if($do == 'add'){
            // add html code
            ?>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new post</h4>
                 
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Description</label>
                      <textarea class="form-control" name="description" rows="12"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Thumbnail Image</label>
                      <input type="file" class="form-control" name="image" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="category">
                          <option value="100" selected>Uncategorised</option>
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
                   
                    
                    <div class="form-group">
                      <label for="exampleTextarea1">Tags</label>
                      <input class="form-control" name="tags"  id="tag-input1">
                    </div>
                    <button type="submit" name="add_post" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>

                  <?php 

      if(isset($_POST['add_post'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $tags = $_POST['tags'];
        $filename = $_FILES['image']['name']; //file name
        $tmpname = $_FILES['image']['tmp_name']; //file name
        //$filesize = $_FILES['image']['size']; // file size

        //$mbsize = ($filesize/1024)/1024;

        // if($mbsize > 1){

        // }

        $extnarray = array('jpg', 'png', 'jpeg');

        $extns = explode('.', $filename);
        $extention = strtolower(end($extns));

        if (in_array($extention,$extnarray) === true) {
            $filename = rand().$filename;
            move_uploaded_file($tmpname, 'images/posts/'.$filename);

            $insert_sql = "INSERT INTO posts (Pdate,title,pdesc,category,tags,author,thumbnail,status) VALUES (now(), '$title', '$description', '$category', '$tags', '1', '$filename', '1')";
            $insert_res = mysqli_query($db,$insert_sql);
            if($insert_res){
              header('Location: posts.php');
            }else{
               die('Posts insert error!'.mysqli_error($db));
            }

        }else{
            echo 'not an image';
        }

      }

                  ?>
                </div>
              </div>
            </div>
            </div>
            <?php
        }
        if($do == 'edit'){
            // edit html code
        }
        if($do == 'update'){
            // update code
        }
        if($do == 'delete'){
            // delete code
        }

        ?>
    </div>

<?php include 'inc/footer.php'; ?>