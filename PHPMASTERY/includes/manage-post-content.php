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
                                    <h4 class="page-title">All Post</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                            <li class="breadcrumb-item active">Add Post</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->  
<?php
if(isset($_GET['status'])&&$_GET['status']=='delete'&&isset($_GET['id'])) {
$post_id=$_GET['id'];
$select_sql="SELECT post_thumb FROM posts WHERE post_id = $post_id";
$result=mysqli_query($conn,$select_sql);
$row=mysqli_fetch_assoc($result);
$post_thumbnail=$row['post_thumb'];

$delete_sql="DELETE FROM posts  WHERE post_id = $post_id";
$d_result=mysqli_query($conn,$delete_sql);

if($d_result&&!empty($post_thumbnail)&&file_exists("img/$post_thumbnail")){
unlink("img/$post_thumbnail");
echo"Post Deleted Successfully";

}
else{
    echo"Failed to Delete the Post".mysqli_error($conn);
}



}

?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <div class="table-responsive">
                                            <table class="table mb-0 text-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.N</th>
                                                        <th scope="col">Post title</th>
                                                        <th scope="col">Post Description</th>
                                                        <th scope="col">Author</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col" style="width: 10%;">Post Date</th>
                                                        <th scope="col"> Thumbnail</th>
                                                        <th scope="col">Tags</th>
                                                        <th scope="col" style="width: 20%;">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql="SELECT * FROM posts";
                                                    $all_post=mysqli_query($conn,$sql);
                                                    while ($row=mysqli_fetch_assoc($all_post)){
                                                    ?>

                                                    <tr>
                                                         <th scope="col"><?php echo$row['post_id']; ?></th>
                                                        <th scope="col"><?php echo$row['post_title']; ?></th>
                                                        <th scope="col"><?php echo$row['post_description']; ?></th>
                                                        <th scope="col"><?php echo$row['post_author']; ?></th>
                                                        <th scope="col"><?php echo$row['post_category']; ?></th>
                                                        <th scope="col"><?php echo$row['post_date']; ?></th>
                                                        <th scope="col"><img src="img/<?php echo$row['post_thumb']; ?>" alt="" width="40px"></th>
                                                        <th scope="col"><?php echo$row['post_tags']; ?></th>
                                                        <th scope="col">
                    <a href="edit-post.php?status=edit&&id=<?php echo $row['post_id'] ;  ?>" class="btn btn-info btn-sm p-0">
                        <i data-feather="edit"></i>
                    </a>
                    <a href="?status=delete&&id=<?php echo $row['post_id'] ;  ?>" class="btn btn-danger btn-sm   p-0">
                        <i data-feather="trash"></i>
                    </a>
                    <a href="?status=view&&id=<?php echo $row['post_id'] ;  ?>" class="btn btn-warning btn-sm p-0">
                        <i data-feather="eye"></i>
                    </a>
                </th>
                                                        
                                                    </tr>

                                                   <?php }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                           
                        </div>
                        <!--- end row -->

                        
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
</div>