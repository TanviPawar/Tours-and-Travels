
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>SHOW DETAILS TO ADMIN</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus12.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body style="width:1600px">
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
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="post_header" class="container" style="height: 40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <div id="content" style="width:1600px">
                <div class="container background-white">
					<div class="row margin-vert-30">
                        <div class="col-md-12">
						<form method="post">
							<?php
								include("connect.php");
						
								$id=$_GET["id"];
						
								$sql="select * from cab_search where cab_id=".$id."";
								$rs=mysqli_query($con,$sql);
								if(mysqli_num_rows($rs)==1)
								{
									$row=mysqli_fetch_array($rs);
									echo "<table border='2px' align='center' cellpadding='20px' cellspacing='10px'>";
									echo "<tr>";
									echo "<th>CAB CLASS</th>";
									echo "<th>CAB FROM</th>";
									echo "<th>CAB TO</th>";
									echo "<th>CAB PRICE</th>";
									echo "</tr>";
									echo "<tr>";
									echo "<td><input type='text' name='t2' value='$row[1]'></td>";
									echo "<td><input type='text' name='t3' value='$row[2]'></td>";
									echo "<td><input type='text' name='t4' value='$row[3]'></td>";
									echo "<td><input type='text' name='t5' value='$row[4]'></td>";
									echo "</tr>";
									echo"<tr><td colspan='4' align='center'><input type='submit' name='btn6' value='UPDATE'></td></tr>";
									echo "</table>";
								}
							?>
						</form>
						<?php
							if(isset($_POST["btn6"]))
							{
								$id=$_GET["id"];
								$class=$_POST["t2"];
								$from=$_POST["t3"];
								$to=$_POST["t4"];
								$price=$_POST["t5"];
				
								$q="update cab_search set cab_class='".$class."', cab_from='".$from."', cab_to='".$to."', cab_price='".$price."' where cab_id=".$id."";
								$n=mysqli_query($con,$q);
								if($n==1)
								{
									echo "<script>alert('information updated')</script>";
									echo "<script>window.location.href='admin_cabs.php'</script>";
								}
							}
						?>
						</div>
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