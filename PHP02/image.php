<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .upload-form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .upload-form h2 {
            margin-top: 0;
        }
        .upload-form input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }
        .upload-form button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .upload-form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_FILES['pic'])){
//echo "selected";
$image_name=$_FILES["pic"]["name"];
$image_tm_name=$_FILES["pic"]["tmp_name"];
move_uploaded_file($image_tm_name,"img/".$image_name);



}
?>
<div class="upload-form">

    <h2>Upload an Image</h2>
    <form action="/image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pic" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
</div>

</body>
</html>
