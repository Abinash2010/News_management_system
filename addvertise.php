<?php
 include 'connection/connection.php';
if(isset($_GET['id']) )
{
    $id=$_GET['id'];
    
}


  $db=getDB();
                        
                      
                            
                               
                        

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Channel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
          <a class="navbar-brand" href="index.php"><h1><img  alt="" /></h1></a>
          <a class="navbar-brand1"><h1>The voice of North East</h1></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right" action="search.php" method="post">
					<input type="text" class="form-control" name="search" placeholder="Search...">
					<input type="submit" value=" " >
                  
				</form>
                                <h4 style="padding-top:5px;padding-right:-10px;color:red;"><?php echo date("Y-m-d"); ?></h4> 
			</div>  
			<div class="header-top-right">
				
				<div class="signin">
					<a href="login.php" >Sign In</a>
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
                    <h3><i><b>Advertise Page</b></i></h3>
					<div class="song">
                        <?php
                        $db=getDB();
                        
                         $sql=$db->prepare("SELECT * FROM `addvertise` where a_id=:ids");
                        $sql->bindParam(":ids",$id,PDO::PARAM_STR);
                        $sql->execute();
                        $data=$sql->fetch(PDO::FETCH_OBJ);
                        $count=$data->view;
                        $counts=$count+1;
                     
                        
                         $update=$db->prepare('UPDATE `addvertise` SET view=:view where a_id=:id ');
                                $update->bindParam(":view",$counts,PDO::PARAM_STR);
                                 $update->bindParam(":id",$id,PDO::PARAM_STR);
                                $update->execute();
                        
						echo '<div class="song-info">
							<h3>'.$data->Title.'</h3></div>'; 
                       
                        
                            
                        ?>
                        
					
						<div class="video-grid">
                            <?php
									

							echo '<img class="img img-responsive"  src="Admin/Image/'.$data->Image.'"/>';
                            ?>
						
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
										echo '<p>'.$data->link.'</p>'; ?>
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
							<a href="#">All Comments (8,657)</a>
							<div class="box">
								<form>
									<input type="text" placeholder="Name" required=" ">			           					   
									<input type="text" placeholder="Email" required=" ">
									<input type="text" placeholder="Phone" required=" ">
									<textarea placeholder="Message" required=" "></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
							<div class="all-comments-buttons">
								<ul>
									<li><a href="#" class="top">Top Comments</a></li>
									<li><a href="#" class="top newest">Newest First</a></li>
									<li><a href="#" class="top my-comment">My Comments</a></li>
								</ul>
							</div>
						</div>
						
						</div>
					</div>
				</div>
				<div class="col-md-4 single-right" style=" overflow-y:scroll;height: 100vh;">
					<h3>Up Next</h3>
                    <?php
                   
               
                         $sql1=$db->prepare("SELECT * FROM `addvertise`  order by  a_id DESC ");
                            
                                $sql1->execute();
                                $data1=$sql1->fetchAll(PDO::FETCH_ASSOC);

                    
                    foreach($data1 as $row1)
                    {
                    ?>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
                                 <?php
									

								
							echo '<img class="img img-responsive"  src="Admin/Image/'.$row1['Image'].'"/>';
							?>
							</div></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<?php				echo '<h5><a href="addvertise.php?id='.$row1['a_id'].'">'.$row1['Title'].'</a></h5>'; ?>
								
							</div>
							<div class="clearfix"> </div>
						</div>
					
						
						
					
    <?php
                    }
                    echo '</div>';
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
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
                         

                        
                         
?>