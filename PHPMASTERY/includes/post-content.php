<?php 
include 'connection.php';
?>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Post</h4>
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
                            
                            if (isset($_POST['add_post'])) {
                                $post_date = $_POST['post_date'];
                                $post_author = $_POST['post_author'];
                                $post_title = $_POST['post_title'];
                                $post_description = $_POST['post_description'];
                                $post_category = $_POST['post_category'];
                                $post_tags = $_POST['post_tags'];
                                $post_thumbnail = '';
                                $post_thumbnail = 'author_' . time() . '_' . rand(100000, 10000000) . '.' . pathinfo($_FILES['post_thumbnail']['name'], PATHINFO_EXTENSION);
                                $post_image_tmp = $_FILES['post_thumbnail']['tmp_name'];

                                $query = "INSERT INTO posts (post_title, post_description, post_author, post_thumb, post_category, post_tags, post_date) 
                                          VALUES ('$post_title', '$post_description', '$post_author', '$post_thumbnail', '$post_category', '$post_tags', '$post_date')";
                                $add_new_post = mysqli_query($conn, $query);

                                if ($add_new_post) {
                                    if (!empty($_FILES['post_thumbnail']['name'])) {
                                       
                                        move_uploaded_file($post_image_tmp, "img/" . $post_thumbnail);
                                        echo "Post Added Successfully";
                                    }
                                    
                                } else {
                                    die("Query Failed: " . mysqli_error($conn));
                                }
                            }
                            ?>

                            <form class="form" action="add-post.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-10 offset-1">
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Date</label>
                                            <div class="col-lg-10">
                                                <input type="date" name="post_date" required autocomplete="off" class="form-control" value="">
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const today = new Date().toISOString().split('T')[0];
                                                document.querySelector('input[name="post_date"]').value = today;
                                            });
                                        </script>

                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Author</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_author" required autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_title" required autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-email">Post Description</label>
                                            <div class="col-lg-10">
                                                <textarea name="post_description" class="form-control" rows="5"></textarea>
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
                                                    while ($row = mysqli_fetch_assoc($the_category)) {
                                                        $cat_id = $row['cat_id'];
                                                        $cat_name = $row['cat_name'];
                                                        echo "<option value='{$cat_id}'>{$cat_name}</option>";
                                                    }
                                                    ?>
                                                </select>-
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-password">Post Thumbnail</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="post_thumbnail" class="form-control-file">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="simpleinput">Post Tags</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="post_tags" required autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-0 justify-content-end">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-dark" name="add_post">Save</button>
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
