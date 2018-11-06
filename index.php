
<?php
 include 'connection/connection.php';
if(isset($_GET['val']))
{
    $var=$_GET['val'];
}
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
<title>Channel East Media</title>
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
          <a class="navbar-brand" href="index.php"><img src="images/chalogo.gif" alt="channel east" /></a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<div class="ch">CHANNEL <br></div>
					<div class="ch1"></div>

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
						</div> <br>
						<div class="copyright" id="copy">
							<p>BREAKING</p>
						</div>
					</div>
				</div>
        </div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>Recent News</h3>
					</div>
					<?php
						$db=getDB();
                        if(isset($var))
                        {
                            if($var=='Home')
                            {
                                $recent=$db->query("SELECT * FROM `news` order by  news_id DESC LIMIT 2");
                                $recent->execute();
                                $data=$recent->fetchAll(PDO::FETCH_ASSOC);
                            }
                            elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International' )
                            {
                                $recent=$db->prepare("SELECT * FROM `news` where Region=:reg order by  news_id DESC LIMIT 2");
                                $recent->bindParam(":reg",$var,PDO::PARAM_STR);
                                $recent->execute();
                                $data=$recent->fetchAll(PDO::FETCH_ASSOC);
                            }
                            else
                            {
                                $recent=$db->prepare("SELECT * FROM `news` where field=:field order by  news_id DESC LIMIT 2");
                                $recent->bindParam(":field",$var,PDO::PARAM_STR);
                                $recent->execute();
                                $data=$recent->fetchAll(PDO::FETCH_ASSOC);
                            }
                        }
                    else{
                        
                        $recent=$db->query("SELECT * FROM `news` order by  news_id DESC LIMIT 2");
                                $recent->execute();
                                $data=$recent->fetchAll(PDO::FETCH_ASSOC);
                    }
						
						foreach ($data as $row) {
						
						

					?>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
								<div class="resent-grid-info recommended-grid-info video-info-grid">
								<?php 
                            $first=1;
							if(isset($var))
                            {
                                echo '<h5><a href="single.php?id='.$row['news_id'].'&var='.$var.'&first='.$first.'" class="title">'.$row['Title'].'</a></h5>';
                            }
                            else
                            {
                                 echo '<h5><a href="single.php?id='.$row['news_id'].'&var='.'all'.'&first='.$first.'" class="title">'.$row['Title'].'</a></h5>';
                            }
                                    ?>
								</div>
								<div class="embed-responsive embed-responsive-16by9">
									<?php
									$video=embed_converter($row['link']);

							echo '<iframe class="embed-responsive-item"  src="//www.youtube.com/embed/'.$video.'?rel=0" allowfullscreen></iframe>';
							?>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
								<?php 
							if(isset($var))
                            {
                                echo '<h3><a href="single.php?id='.$row['news_id'].'&var='.$var.'&first='.$first.'" class="title">'.$row['Description'].'</a></h3>';
                            }
                            else
                            {
                                 echo '<h3><a href="single.php?id='.$row['news_id'].'&var='.'all'.'&first='.$first.'" class="title">'.$row['Description'].'</a></h3>';
                            }
                                    ?>
							<ul>
								<br/>
				          <?php			echo '<li><p class="glyphicon glyphicon-eye-open"> '.$row['view'] .'</a></p></li>'; ?>
							</ul>
						</div>
					</div>
                    
					<?php
                            
				}
				?>
                    <?php
                        $add=$db->query('SELECT *  FROM `addvertise` ORDER BY a_id DESC LIMIT 1');
                            $add->execute();
                            $datas=$add->fetchAll(PDO::FETCH_ASSOC);
							foreach($datas as $adds)
                            {
                                ?>
                        <div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<?php 
							
                            
                                 echo '<h3></h3>';
                            
                                            ?>
								</div>
								<div class="embed-responsive embed-responsive-16by9">
										<?php
									

							echo '<img class="embed-responsive-item"  src="Admin/image/'.$adds['Image'].'"/>';
							?>
							</div>
						</div>
                            	
						</div>
						
					</div>
                    <?php
                            }
      ?>
				
					<div class="clearfix"> </div>
				</div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>Recommended</h3>
						</div>
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						  	<?php
					
						  	$recomended=1;
                        
                         if(isset($var))
                        {
                            if($var=='Home')
                            {
                               $recomnded=$db->prepare("SELECT * FROM `news` where Recommended=:recom order by  news_id DESC LIMIT 4");
                                $recomnded->bindParam(":recom",$recomended,PDO::PARAM_STR);
						       $recomnded->execute();
						      $data1=$recomnded->fetchAll(PDO::FETCH_ASSOC);
                            }
                            elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International' )
                            {
                                $recomnded=$db->prepare("SELECT * FROM `news` where Recommended=:recom and Region=:regs order by  news_id DESC LIMIT 4");
						      $recomnded->bindParam(":recom",$recomended,PDO::PARAM_STR);
                                $recomnded->bindParam(":regs",$var,PDO::PARAM_STR);
						      $recomnded->execute();
						      $data1=$recomnded->fetchAll(PDO::FETCH_ASSOC);
                               
                            }
                            else
                            {
                               $recomnded=$db->prepare("SELECT * FROM `news` where Recommended=:recom and field=:fields order by  news_id DESC LIMIT 4");
						      $recomnded->bindParam(":recom",$recomended,PDO::PARAM_STR);
                                $recomnded->bindParam(":fields",$var,PDO::PARAM_STR);
						      $recomnded->execute();
						      $data1=$recomnded->fetchAll(PDO::FETCH_ASSOC);
                               
                            }
                             }
                        else
                        {
                           
                            $recomnded=$db->prepare("SELECT * FROM `news` where Recommended=:recom order by  news_id DESC LIMIT 4");
                                $recomnded->bindParam(":recom",$recomended,PDO::PARAM_STR);
						       $recomnded->execute();
						      $data1=$recomnded->fetchAll(PDO::FETCH_ASSOC);
                        }
						
						foreach ($data1 as $row1) {
						
						

					?>
						
					<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
								<div class="resent-grid-info recommended-grid-info video-info-grid">
								
								</div>
								<div class="embed-responsive embed-responsive-16by9">
										<?php
									$video1=embed_converter($row1['link']);

							echo '<iframe class="embed-responsive-item"  src="//www.youtube.com/embed/'.$video1.'?rel=0" allowfullscreen></iframe>';
							?>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							
										<?php 
							if(isset($var))
                            {
                                echo '<h5><a href="single.php?id='.$row1['news_id'].'&var='.$var.'&recomnded='.'1'.'&first='.$first.'" class="title">'.$row1['Title'].'</a></h5>';
                            }
                            else
                            {
                                 echo '<h5><a href="single.php?id='.$row1['news_id'].'&var='.'all'.'&recomnded='.'1'.'&first='.$first.'" class="title">'.$row1['Title'].'</a></h5>';
                            }
                                    ?>
								
							
							<ul>
                                <br/>
				<?php			echo '<li><p class="glyphicon glyphicon-eye-open"> '.$row1['view'] .'</a></p></li>'; ?>
							</ul>
						</div>
					</div>
					<?php
				}
                         
				?>
                    

					</div>
				</div>
                
					
				
				
				<div class="clearfix"> </div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>Visitors Preferance</h3>
						</div>
						
						<?php
                          if(isset($var))
                        {
                              if($var=='Home')
                              {
                                  $pref=$db->prepare("SELECT * FROM `news`  order by  view DESC LIMIT 8");
						       $pref->execute();
						      $data2=$pref->fetchAll(PDO::FETCH_ASSOC);
                              }
                          elseif($var=='Assam' || $var=='North-East' || $var=='National' || $var=='International' )
                            {
                                $pref=$db->prepare("SELECT * FROM `news` where Region=:regis order by  view DESC LIMIT 8");
						     
                                $pref->bindParam(":regis",$var,PDO::PARAM_STR);
						      $pref->execute();
						      $data2=$pref->fetchAll(PDO::FETCH_ASSOC);
                               
                            }
                            else
                            {
                               $pref=$db->prepare("SELECT * FROM `news` where field=:fieldss order by  news_id DESC LIMIT 8");
						    
                                $pref->bindParam(":fieldss",$var,PDO::PARAM_STR);
						      $pref->execute();
						      $data2=$pref->fetchAll(PDO::FETCH_ASSOC);
                              
                            }
                        }
                        else
                        {
                           
                              $pref=$db->prepare("SELECT * FROM `news`  order by  view DESC LIMIT 8");
						       $pref->execute();
						      $data2=$pref->fetchAll(PDO::FETCH_ASSOC);
                        }
						foreach ($data2 as $row2) {
						
						

					?>
						
					<div class="col-md-3 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									
								</div>
								<div class="embed-responsive embed-responsive-16by9">
										<?php
									$video2=embed_converter($row2['link']);

							echo '<iframe class="embed-responsive-item"  src="//www.youtube.com/embed/'.$video2.'?rel=0" allowfullscreen></iframe>';
							?>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
								<?php 
							if(isset($var))
                            {
                                echo '<h5><a href="single.php?id='.$row2['news_id'].'&var='.$var.'&pref='.'1'.'&first='.$first.'" class="title">'.$row2['Title'].'</a></h5>';
                            }
                            else
                            {
                                 echo '<h5><a href="single.php?id='.$row2['news_id'].'&var='.'all'.'&pref='.'1'.'&first='.$first.'" class="title">'.$row2['Title'].'</a></h5>';
                            }
                                    ?>
							<ul>
                                <br/>
				<?php			echo '<li><p class="glyphicon glyphicon-eye-open"> '.$row2['view'] .'</a></p></li>'; ?>
							</ul>
						</div>
					</div>
					<?php
				}

			
		$dates=$db->query('SELECT date from `marque` order by marque_id DESC limit 1');
        $dates->execute();
        $datedata=$dates->fetch(PDO::FETCH_OBJ);
                 $stmt=$db->prepare("SELECT * From `marque`where date=:dt");
                $stmt->bindParam(":dt",$datedata->date,PDO::PARAM_STR);
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