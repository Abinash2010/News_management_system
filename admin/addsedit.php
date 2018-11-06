<?php
 session_start();

 include '../connection/connection.php';

 $temp=$_SESSION['uid'];
 if(!isset($temp))
      {
              header('location:../login.php');
       }
  else
    {
$db=getDB();

 $title=$_POST['title'];
 
 $link=$_POST['link'];
 
 
 $date=date('y-m-d');
 $id=$_POST['id'];
      $target_dir = "Image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$pic = $_POST['pic'];
 unlink("Image/" . $pic);
}

$stmt=$db->prepare('Update `addvertise` SET Title=:title,Image=:img,Date=:date,link=:link where a_id=:aid');
$stmt->bindParam(':aid',$id,PDO::PARAM_STR);
$stmt->bindParam(':title',$title,PDO::PARAM_STR);
$stmt->bindParam(':img',$_FILES["fileToUpload"]["name"],PDO::PARAM_STR);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);
$stmt->bindParam(':link',$link,PDO::PARAM_STR);
      
$stmt->execute();
$count=$stmt->rowCount();
if($count>0)
{
    header('location:advertise.php');
}
  }

?>