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
$stmt=$db->prepare('Delete  From `marque` where marque_id=:nid');
$stmt->bindParam(':nid',$id,PDO::PARAM_STR);
$stmt->execute();
$count=$stmt->rowcount();
if($count>0)
{
      header('location:Addmarque.php');

}
  }
  
?>
