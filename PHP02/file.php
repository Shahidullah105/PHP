<?php
//$path_parts = pathinfo('/www/htdocs/inc/photos.png');

//echo $path_parts['dirname'],"\n";
//echo $path_parts['basename'],"\n";
//echo $path_parts['extension'],"\n";
//echo $path_parts['filename'],"\n";

  $path = "/path/to/images/photo.png";

 //$info = pathinfo($path);
 //print_r($info);

 //$dirname = pathinfo($path, PATHINFO_DIRNAME);
// echo $dirname;

   $basename = pathinfo($path, PATHINFO_FILENAME);
    //echo $basename;

$Ex = pathinfo($path, PATHINFO_EXTENSION);
//echo $Ex;

$image=uniqid().TIME()."_n".".".$Ex;
echo $image;
?> 