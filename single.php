<?php
 include 'connection/connection.php';
if(isset($_GET['id']) )
{
    $id=$_GET['id'];
    
}
if(isset($_GET['var']))
{
        $var=$_GET['var'];

}
else
{
     $var='all';
}
  $db=getDB();
                        
                      $sql1=$db->prepare("SELECT * FROM `news` where news_id=:idss");
                        $sql1->bindParam(":idss",$id,PDO::PARAM_STR);
                        $sql1->execute();
                        $data1=$sql1->fetch(PDO::FETCH_OBJ);
                       
                        if( $sql1->rowcount()>0)
                        {
                            
                               
                        
function embed_converter($url)
{
    preg_match(
        '/[\?\&]v=([^\?\&]+)/',
        $url,
        $matches
    );
 $id = $matches[1];
    return $id;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Channel </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="channel east, news, latest news, updated, assam, assamese news, online news" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<link href="css/dashboard.css" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

</head>
  <body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><h1><img alt="channel " /></h1></a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<div class="ch"><br></div>
					<div class="ch1">The Voice of North East</div>

				<form class="navbar-form navbar-right" action="search.php" method="post">

					<input type="text" class="form-control" name="search" placeholder="Search...">
					<input type="submit" value=" " >
				</form>
			</div>
			<div class="header-top-right">
			
				<div class="signin">
					<a href="login.php"><?php echo date("Y-m-d"); ?></a>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<?php echo '<li class="active"><a href="index.php?val='.'Home'.'" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>'.'Home'.'</a></li>'; 
					 echo '<li><a href="index.php?val='.'Assam'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Assam'.'</a></li>'; 
					 echo '<li><a href="index.php?val='.'North-East'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'North East'.'</a></li>';
					echo '<li><a href="index.php?val='.'National'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'National'.'</a></li>';
					echo '<li><a href="index.php?val='.'International'.'" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>'.'International'.'</a></li>';
					echo '<li><a href="index.php?val='.'Sports'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Sports'.'</a></li>';
					echo '<li><a href="index.php?val='.'Entertainment'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Entertainment'.'</a></li>';
				 echo	'<li><a href="index.php?val='.'Business'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Business'.'</a></li>'; ?>
					
				  </ul>
				  
					<div class="side-bottom">
						<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
							</ul>
						</div>
						<div class="copyright">
							<p></p>
						</div>
					</div>
				</div>
        </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
                        <?php
                        $db=getDB();
                        
                         $sql=$db->prepare("SELECT * FROM `news` where news_id=:ids");
                        $sql->bindParam(":ids",$id,PDO::PARAM_STR);
                        $sql->execute();
                        $data=$sql->fetch(PDO::FETCH_OBJ);
                        $count=$data->view;
                        $counts=$count+1;
                     
                        
                         $update=$db->prepare('UPDATE `news` SET view=:view where news_id=:id ');
                                $update->bindParam(":view",$counts,PDO::PARAM_STR);
                                 $update->bindParam(":id",$id,PDO::PARAM_STR);
                                $update->execute();
                        
						echo '<div class="song-info">';
                         $const=1;
                     $idd=$id+$const;
                          
                        
							echo '<h3>'.$data->Title.'</h3></div>'; 
                       
                        $ids=$id-$const;
                            
                            if(!isset($_GET['first']))
                            {
                                 echo '<h4><a href="single.php?id='.$idd.'&var='.$var.'&status='.'prev'.'"  style="color:black;font-weight:bold;float:left;margin-top:-15px;" >'.'Previous Video'.'</a></h4>'; 
                            }
                           
                        
                             echo '<h4><a href="single.php?id='.$ids.'&var='.$var.'&status='.'next'.'"  style="color:black; font-weight:bold;float:right;margin-top:-15px;" >'.'Next Video'.'</a></h4>'; 
                        
                            
                        ?>
                        <br>
					
						<div class="video-grid">
                            <?php
									$video1=embed_converter($data->link);

							echo '<iframe  src="//www.youtube.com/embed/'.$video1.'?rel=0" allowfullscreen></iframe>';
                            ?>
						
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5></h5>
							<ul>
								<li><a href="#" class="icon fb-icon">Facebook</a></li>
								<li><a href="#" class="icon whatsapp-icon">Whatsapp</a></li>
								<li><a href="#" class="icon like">Like</a></li>
								<li><a href="#" class="icon comment-icon">Comments</a></li>
                               
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
                                        
										<h4>Published on <?php echo $data->Date; ?> </h4>
										
								<?php	
										echo '<p>'.$data->Description.'</p>'; ?>
										<div class="load-grids">
											<div class="load-grid">
												<p></p>
											</div>
											<div class="load-grid">
												
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							
						</div>
						
						</div>
					</div>
				</div>
				<div class="col-md-4 single-right" style=" overflow-y:scroll;height: 100vh;">
					<h3>Up Next</h3>
                    <?php
                   
                if(isset($_GET['recomnded']))
                    {
                    $rec=$_GET['recomnded'];
                         if($var=='all' || $var=='Home')
                        {
                            $sql1=$db->prepare("SELECT * FROM `news` where Recommended=:recom order by  news_id DESC ");
                            $sql1->bindParam(":recom",$rec,PDO::PARAM_STR);
                            $sql1->execute();
                            $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International')
                        {
                             $sql1=$db->prepare("SELECT * FROM `news` where  Recommended=:recom and Region=:reg order by  news_id DESC");
                            $sql1->bindParam(":reg",$var,PDO::PARAM_STR);
                            $sql1->bindParam(":recom",$rec,PDO::PARAM_STR);
                            $sql1->execute();
                            $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    else
                        {
                             $sql1=$db->prepare("SELECT * FROM `news` where Recommended=:recom and field=:field order by  news_id DESC ");
                                    $sql1->bindParam(":field",$var,PDO::PARAM_STR);
                                    $sql1->bindParam(":recom",$rec,PDO::PARAM_STR);
                                    $sql1->execute();
                                    $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    }
              elseif(isset($_GET['pref']))
                    {
                      if($var=='all' || $var=='Home')
                        {
                            $sql1=$db->prepare("SELECT * FROM `news` order by  view DESC ");
                            $sql1->execute();
                            $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International')
                        {
                             $sql1=$db->prepare("SELECT * FROM `news` where Region=:reg order by  view DESC");
                            $sql1->bindParam(":reg",$var,PDO::PARAM_STR);
                            $sql1->execute();
                            $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    else
                        {
                             $sql1=$db->prepare("SELECT * FROM `news` where  field=:field order by view DESC ");
                                    $sql1->bindParam(":field",$var,PDO::PARAM_STR);
                        
                                    $sql1->execute();
                                    $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                        }
                    }
                else
                {
                    if($var=='all' || $var=='Home')
                    {
                        $sql1=$db->query("SELECT * FROM `news` order by  news_id DESC ");
                        $sql1->execute();
                        $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                    }
                    elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International')
                    {
                         $sql1=$db->prepare("SELECT * FROM `news` where Region=:reg order by  news_id DESC");
                        $sql1->bindParam(":reg",$var,PDO::PARAM_STR);
                        $sql1->execute();
                        $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                    }
                    else
                    {
                         $sql1=$db->prepare("SELECT * FROM `news` where field=:field order by  news_id DESC ");
                                $sql1->bindParam(":field",$var,PDO::PARAM_STR);
                                $sql1->execute();
                                $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);
                    }
                }
                    
                    foreach($data1 as $row1)
                    {
                    ?>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
                                 <?php
									$video=embed_converter($row1['link']);

								echo '<a href="single.php?id='.$row1['news_id'].'&var='.$var.'"><div class="embed-responsive embed-responsive-16by9"><embed class="embed-responsive-item"  src="//www.youtube.com/embed/'.$video.'">';
							?>
							</div></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<?php				echo '<a href="single.php?id='.$row1['news_id'].'&var='.$var.'">'.$row1['Title'].'</a>'; ?>
								
							</div>
							<div class="clearfix"> </div>
						</div>
					
						
						
				
    <?php
                    }
                            echo '	</div>';
                    $dt=date("y-m-d");
                  $stmt=$db->prepare("SELECT * From `marque` where date=:dt");
                $stmt->bindParam(":dt",$dt,PDO::PARAM_STR);
                    $stmt->execute();
                    $read=$stmt->fetchAll(PDO::FETCH_ASSOC);
                    $headline='';
                    foreach($read as $news)
                    {
                        $headline=$headline.'-----'.$news['marque'];
                    }
                    ?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->
			
			
		</div>
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
                         }
                        else
                        {
                             $const=1;
                           
                          if($_GET['status']=='prev')
                            {
                                 
                                $ids=$id+$const;
                                $status='prev';
                                 header('location:single.php?id='.$ids.'&var='.$var.'&status='.$status);
                                $stmt=$db->query('SELECT * FROM `news` ORDER BY news_id DESC LIMIT 1');
                                $stmt->execute();
                                $data=$stmt->fetch(PDO::FETCH_OBJ);
                                
                                if($ids<=$data->news_id)
                               {
                                    header('location:single.php?id='.$ids.'&var='.$var.'&status='.$status);
                               }
                               else
                               {
                                   $ids=$data->news_id;
                                    header('location:single.php?id='.$ids.'&var='.$var.'&status='.$status);
                               }
                              
                                 
                            }
                           else if($_GET['status']='next')
                             {
                                 
                        $ids=$id-$const;
                                $status='next';
                               if($ids>=1)
                               {
                                    header('location:single.php?id='.$ids.'&var='.$var.'&status='.$status);
                               }
                               else
                               {
                                   $ids=$id+$const;
                                    header('location:single.php?id='.$ids.'&var='.$var.'&status='.$status);
                               }
                                
                            }
                             
                           
                        }
                        
                         
?>
<?php
				

			
		
      $dt=date("y-m-d");
                 $stmt=$db->prepare("SELECT * From `marque` where date=:dt");
                $stmt->bindParam(":dt",$dt,PDO::PARAM_STR);
                    $stmt->execute();
                    $read=$stmt->fetchAll(PDO::FETCH_ASSOC);
                    $headline='';
                    foreach($read as $news)
                    {
                        $headline=$headline.'-----'.$news['marque'];
                    }
                    ?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->
			<div id="footer" style="position:fixed; overflow:hidden" >
				
						<font size="5px" color="WHITE"><marquee direction="left" >
				
						<?php echo $headline; ?>
</marquee></font>
                
					
			</div>
			
		</div>
      </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>