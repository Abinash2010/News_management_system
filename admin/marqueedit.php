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

 
 $marque=$_POST['marque'];
 $id=$_POST['id'];
 
 $date=date('y-m-d');
 

$stmt=$db->prepare('Update `marque` SET marque=:marque,date=:date where marque_id=:nid');
$stmt->bindParam(':nid',$id,PDO::PARAM_STR);
$stmt->bindParam(':marque',$marque,PDO::PARAM_STR);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);
$stmt->execute();
$count=$stmt->rowCount();
if($count>0)
{
    header('location:Addmarque.php');
}
  }

?>