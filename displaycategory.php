<?php 



 


class AdminBack{
    private $conn;
  
    public function __construct(){
    $dbhost = "localhost" ;
      $dbuser = "root"; 
      $dbpass = "";
      $dbname = "databasetest";
      $this->conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
      if ($this->conn) {
  //echo "Connected successfully";
       
       } 
  
     else {
      die("DB connection error");
     }
  
    }
public function add_category($data) {
 $ctg_name=$data['ctg_name'];
 $ctg_des=$data['ctg_des'];

$sql="INSERT INTO category(ctg_name,ctg_des) VALUES ('$ctg_name', '$ctg_des')";
$result=mysqli_query($this->conn,$sql);
if ($result){
  $mgs="Data inserted succesfully" ; 

  return $mgs;
}

else{
    $mgs="Data has not inserted !" ; 

    return $mgs;

}

  }
  public function display_category(){
    $sql="SELECT*FROM category";
   $result=mysqli_query($this->conn,$sql);

   if($result){

    return $result;

  } 
  }


  public function delete_category($id){
    $query="DELETE FROM category WHERE id=$id";
    mysqli_query($this->conn,$query);


  }
  
  
  
  
  }
  $obj=new AdminBack();

  if(isset($_POST['ctg_btn'])) {
   $returnmgs=$obj->add_category($_POST);
  }



  if(isset($_GET['status'])){
    $get_id=$_GET['id'];
    if($_GET['status']='delete'){
       $data=$obj->delete_category($get_id);
        
    }

}

  
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category Information</title>
  </head>
  <body>
    

  <table class="table">
  <thead class="thead-dark">

  
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php 
   $data=$obj->display_category();
   while($row=mysqli_fetch_assoc($data)){

   

?>
  <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['ctg_name']; ?></td>
      <td><?php echo $row['ctg_des']; ?></td>
      <td>

      <div class="btn-group">

<a href="?status=delete&&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
<a href="editpage.php?status=edit&&id=<?php echo $row['id']; ?>" class= "btn btn-info">Edit</a>
</div>
      </td>
    </tr>
   
   <?php  }

  ?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

