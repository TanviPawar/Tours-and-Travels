<?php
	session_start();
	if(isset($_SESSION["admin"]))
	{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SHOW DESTINATION DETAILS</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus12.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body style="width: 1600px;">
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="https://twitter.com/login?lang=en" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="https://www.facebook.com" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="https://accounts.google.com/signin/v2/identifier?hl=en-US&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height: 40px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                       
                            <a href="index.html" title="">
                                <p><h1>Tired of a busy life???</h1>
                            <h2>Take a break and a relax tour!!!!</h2></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="post_header" class="container" style="height: 40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <div id="content" style="width: 1600px;">
                <div class="container background-white">
					<div class="row margin-vert-30">
                        <div class="col-md-12">
						<h1 style="text-align:center">DESTINATION DETAILS</h1>
						<?php
							$con=mysqli_connect("localhost","root","","tour_database");
							if(!$con)
								die("cannot connect to server");
							else
							{
								$sql="select * from destinations";
								$rs=mysqli_query($con,$sql);
								if(mysqli_num_rows($rs)>0)
								{
									echo "<table border='2px' align='center' cellpadding='20px' cellspacing='10px'>";
									echo "<tr align='center'>";
									echo "<th>&nbsp; DESTINATION ID &nbsp;</th>";
									echo "<th>&nbsp; DESTINATION NAME &nbsp;</th>";
									echo "<th>&nbsp; TOUR DATE &nbsp;</th>";
									echo "<th>&nbsp; TOUR PERIOD &nbsp;</th>";
									echo "<th>&nbsp; TRAVEL CLASS &nbsp;</th>";
									echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TRAVEL BY &nbsp;</th>";
									echo "<th>&nbsp;&nbsp; HOTEL NAME</th>";
									echo "<th>&nbsp HOTEL TYPE &nbsp;</th>";
									echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TOUR PRICE &nbsp;</th>";
									echo "<th>&nbsp;&nbsp;DELETE &nbsp;&nbsp;</th>";
									echo "</tr>";
									while($row=mysqli_fetch_array($rs))
										{
											echo "<tr align='center'>";
											echo "<td><input type='text' name='t0' value='$row[0]'disabled></td>";
											echo "<td><input type='text' name='t1' value='$row[1]'disabled></td>";
											echo "<td><input type='text' name='t2' value='$row[2]'disabled></td>";
											echo "<td><input type='text' name='t3' value='$row[3]'disabled></td>";
											echo "<td><input type='text' name='t4' value='$row[4]'disabled></td>";
											echo "<td><input type='text' name='t5' value='$row[5]'disabled></td>";
											echo "<td><input type='text' name='t6' value='$row[6]'disabled></td>";
											echo "<td><input type='text' name='t7' value='$row[7]'disabled></td>";
											echo "<td><input type='text' name='t8' value='$row[8]'disabled></td>";
											echo "<td><a href='delete2.php?id=".$row[0]."'>Delete</a></td>";
											echo "</tr>";
										}
										echo "</table>";
									}
								}
							?>
						</div>
					</div>
					<hr>
					<div class="row margin-vert-30">
						<div class="row">
                            <div class="col-md-6">
								<form method="post">
									<button class="btn btn-primary pull-right" type="submit" name="btn3">BACK</button>
									<button class="btn btn-primary pull-right" type="submit" name="btn4">UPDATE</button>
								</form>
                            </div>
                        </div>
						<?php
							if(isset($_POST["btn3"]))
							{
								echo "<script>window.location.href='pages-admin.php'</script>";	
							}
							if(isset($_POST["btn4"]))
							{
								echo "<script>window.location.href='update2.php'</script>";	
							}
						?>
					</div>	
				</div>
			</div>
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(+033)2442-7638
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:mrinaldas969@gmail.com">tanvi@gmail.com</a>
                                <br>
                                
                            </p>
                            <p><br><b>Address :</b>
                                <br>Jeevan Anand,
                                <br>Near ycs school,
                                <br>Bhandup(W),
                                <br>Mumbai 78, India</p>
                        </div>
                        
                        
                </div>
            </div>
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    </body>
</html>
<?php
  }
 ?>