<?php 
include 'connection.php';

if(isset($_GET['status'])&&$_GET['status']=='edit'&&isset($_GET['id'])) {
    $post_id=$_GET['id'];
    $select_sql="SELECT * FROM posts WHERE post_id = $post_id";
    $result=mysqli_query($conn,$select_sql);
    $row=mysqli_fetch_assoc($result);
    $post_thumbnail=$row['post_thumb'];
}

if(isset($_POST['update_post'])) {
        $post_id=$_POST['post_id'];
        $post_date = $_POST['post_date'];
        $post_author = $_POST['post_author'];
        $post_title = $_POST['post_title'];
        $post_description = $_POST['post_description'];
        $post_category = $_POST['post_category'];
        $post_tags = $_POST['post_tags'];
        $post_thumbnail=$row['post_thumb'];

        if(isset($_FILES['post_thumbnail'])) {
            $basename=$_FILES['post_thumbnail']['name'];
            $post_thumbnail_tmp=$_FILES['post_thumbnail']['tmp_name'];
            $post_thumbnail = 'author_' . time() . '_' . rand(100000, 10000000) . '.' . pathinfo($basename, PATHINFO_EXTENSION);

            if (!empty($row['post_thumb'])&& file_exists("img/".$row['post_thumb'])) {
               unlink("img/".$row['post_thumb']) ;
               move_uploaded_file($post_thumbnail_tmp,"img/".$post_thumbnail);
                
            }
         
}

$update_sql=" UPDATE posts SET post_date='$post_date',post_title='$post_title',post_description='$post_description',post_author='$post_author'
, post_thumb='$post_thumbnail', post_category='$post_category',post_tags='$post_tags' WHERE post_id='$post_id'";

$result=mysqli_query($conn,$update_sql);

if ($result) {
    echo "Post updated successfully";
}

else{
    echo "Query failed".mysqli_error($conn);
}




}

?>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Post</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <div class="icon-item">
                                        <i data-feather="list"></i>
                                        <i data-feather="layers"></i>
                                        <a href="">ALL POSTS</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                            
                             ?>

                            <form class="form" action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-10 offset-1">
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Date</label>
                                            <div class="col-lg-10">
                                                <input type="date" name="post_date" required autocomplete="off" class="form-control" value="<?php echo $row['post_date']; ?>">
                                                <input hidden type="text" name="post_id" required autocomplete="off" class="form-control" value="<?php echo $row['post_id']; ?>">
                                            </div>
                                        </div>

                                       
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Author</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_author" required autocomplete="off" class="form-control" value="<?php echo $row['post_author']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_title" required autocomplete="off" class="form-control" value="<?php echo $row['post_title']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-email">Post Description</label>
                                            <div class="col-lg-10">
                                                <textarea name="post_description" class="form-control" rows="5">
                                                <?php echo $row['post_description']; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label">Category</label>
                                            <div class="col-lg-10">
                                                <select name="post_category" class="form-control">
                                                    <option>Please Select The Post Category</option>
                                                    <?php  
													
                                                    $query = "SELECT * FROM categories";
                                                    $the_category = mysqli_query($conn, $query);
                                                    while ($data = mysqli_fetch_assoc($the_category)) {
                                                        $cat_id = $data['cat_id'];
                                                        $cat_name = $data['cat_name'];
                                                        echo "<option value='{$cat_id}'>{$cat_name}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-password">Post Thumbnail</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="post_thumbnail" class="form-control-file">
                                                <img src="img/<?php echo $post_thumbnail ?>" alt="" style="width:50px;">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Tags</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_tags" required autocomplete="off" class="form-control" value="<?php echo $row['post_tags']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-0 justify-content-end">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-dark" name="update_post">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div><!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
</div>
