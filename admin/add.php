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
$description=$_POST['description'];
$link=$_POST['link'];
$region=$_POST['region'];
$field=$_POST['field'];
$recom=$_POST['recomnded'];
$view=0;
$date=date('y-m-d');
$id=0;

$stmt=$db->prepare('INSERT INTO `news` VALUES (:nid,:title,:des,:date,:region,:view,:recom,:field,:link)');
$stmt->bindParam(':nid',$id,PDO::PARAM_STR);
$stmt->bindParam(':title',$title,PDO::PARAM_STR);
$stmt->bindParam(':des',$description,PDO::PARAM_STR);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);
$stmt->bindParam(':region',$region,PDO::PARAM_STR);
$stmt->bindParam(':view',$view,PDO::PARAM_STR);
$stmt->bindParam(':recom',$recom,PDO::PARAM_STR);
$stmt->bindParam(':field',$field,PDO::PARAM_STR);
$stmt->bindParam(':link',$link,PDO::PARAM_STR);
$stmt->execute();
$count=$stmt->rowCount();
if($count>0)
{
    header('location:index.php');
}
  }
 
?>