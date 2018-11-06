<?php
session_start();
 include '../connection/connection.php';
$db=getDB();

$user=$_POST['email'];
$pass=$_POST['password'];
$stmt = $db->prepare("SELECT `Admin_id`,`Email`,`Password` from `Admin` where Email=:email and Password=:pass"); 
                
                $stmt->bindParam(":email",$user,PDO::PARAM_STR);
                $stmt->bindParam(":pass",$pass,PDO::PARAM_STR);
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                
                    if($count>0)
                           {
                                if($data->Email==$user && $data->Password==$pass)
                                    {
                                        $_SESSION['uid']=$data->Admin_id;
                                                $temp=$_SESSION['uid'];
                                        header('location:index.php');
                                    }
               
 
                           }
                else
                {
                     header("location:../login.php?msg=failed");
                }


?>