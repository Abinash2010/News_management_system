
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
          <a class="navbar-brand" href="index.php"><h1><img  alt="channel "  /></h1></a>
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
				
									<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
									<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
									<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								
									
								
								
									<div id="small-dialog6" class="mfp-hide">
										<div class="video-information-text">
											<h4>Video information & settings</h4>
											<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
											<ol>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											</ol>
										</div>
									</div>
									<script>
											$(document).ready(function() {
											$('.popup-with-zoom-anim').magnificPopup({
												type: 'inline',
												fixedContentPos: false,
												fixedBgPos: true,
												overflowY: 'auto',
												closeBtnInside: true,
												preloader: false,
												midClick: true,
												removalDelay: 300,
												mainClass: 'my-mfp-zoom-in'
											});
																											
											});
									</script>	
				</div>
				<div class="signin">
					<a href="logout.php" >Sign Up</a>
				
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
					<?php
                      
                     echo '<li><a href="index.php?val='.'Assam'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Assam'.'</a></li>'; 
					 echo '<li><a href="index.php?val='.'North-East'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'North East'.'</a></li>';
					echo '<li><a href="index.php?val='.'National'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'National'.'</a></li>';
					echo '<li><a href="index.php?val='.'International'.'" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>'.'International'.'</a></li>';
					echo '<li><a href="index.php?val='.'Sports'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Sports'.'</a></li>';
					echo '<li><a href="index.php?val='.'Entertainment'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Entertainment'.'</a></li>';
				 echo	'<li><a href="index.php?val='.'Business'.'" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Business'.'</a></li>'; 
                       echo '<li ><a href="addnews.php" class="home-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Add News'.'</a></li>'; 
                       echo '<li ><a href="editnews.php" class="home-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Edit News'.'</a></li>';
    		   echo '<li ><a href="Addmarque.php" class="home-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Marque'.'</a></li>';
                             echo '<li ><a href="advertise.php" class="home-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>'.'Adds'.'</a></li>'; 
                      ?>
					
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
							<p>Copyright © 2018 Channel East Media. All Rights Reserved</p>
						</div>
					</div>
				</div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			
						<div class="col-md-offset-3 col-md-6" style="overflow-y:auto">
                            
                            <form class="text-center border border-light p-5" action="add.php" method="post">

    <p class="h4 mb-4">Add News</p>

    <div class="form-row ">
        <div>
           
             <textarea id="defaultRegisterFormLastName" name="title" class="form-control" style="height:10vh;" >
                Title
            </textarea>
        </div>
      
        <div >
           
            <textarea id="defaultRegisterFormLastName" name="description" class="form-control" style="height:20vh;" >
                Description
            </textarea>
            
        </div>
    </div>

   
    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" name="link" placeholder="Youtube link">
<br/>
   
    <select class="form-control mb-4" name="region" required=" ">
        <option value="">Select Region</option>
        <option value="All">All</option>
        <option value="Assam">Assam</option>
        <option value="North-East">North East</option>
        <option value="National">National</option>
        <option value="International">International</option>
    </select>
      <br/>
    <select class="form-control mb-4" name="field" required=" ">
        <option value="">Select Field</option>
        <option value="All">All</option>
        <option value="Sports">Sports</option>
        <option value="Business">Business</option>
        <option value="Entertainment">Entertainment</option>
        
    </select>
                                <br/>
                                 <div class="col-md-3">
                               <h4> <b>Recommended:</b> </h4>                        
                                </div>
                                <div class="col-md-offset-1 col-md-3">
                                <h5> Yes :</h5><input type="radio" name="recomnded" value="1" class="form-control "></div>
                                 <div class="col-md-3">
                                <h5> No :</h5><input type="radio" name="recomnded" value="0" class="form-control "></div>
     
                               

    
    <button class="btn btn-info my-4 btn-block" type="submit">Add</button>

  
  
    <hr>

  

</form>
            </div>
					
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}

?>