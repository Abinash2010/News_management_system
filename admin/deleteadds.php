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
$id=$_GET['id'];
        			$stmt=$db->prepare("SELECT * FROM `addvertise` where a_id=:id");
        			$stmt->bindParam(':id',$id,PDO::PARAM_STR);
        			$stmt->execute();
        			$data=$stmt->fetch(PDO::FETCH_OBJ);
       unlink("Image/" . $data->Image);

$stmt=$db->prepare('Delete  From `addvertise` where a_id=:nid');
$stmt->bindParam(':nid',$id,PDO::PARAM_STR);
$stmt->execute();
$count=$stmt->rowcount();
if($count>0)
{
      header('location:advertise.php');

}
  }
  
?>
