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
 $id=0;
 
 $date=date('y-m-d');
 

$stmt=$db->prepare('INSERT into `marque` values(:nid,:marque,:date )');
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