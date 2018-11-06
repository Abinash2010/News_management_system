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
 
 $date=date('y-m-d');
 $id=$_POST['id'];

$stmt=$db->prepare('Update `news` SET Title=:title,Description=:des,Date=:date,Region=:region,Recommended=:recom,Field=:field,Link=:link where news_id=:nid');
$stmt->bindParam(':nid',$id,PDO::PARAM_STR);
$stmt->bindParam(':title',$title,PDO::PARAM_STR);
$stmt->bindParam(':des',$description,PDO::PARAM_STR);
$stmt->bindParam(':date',$date,PDO::PARAM_STR);
$stmt->bindParam(':region',$region,PDO::PARAM_STR);

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