<?php
	$servername = "localhost";
	$username = "admin";
	$password = "Hasbro@602";
	$dbname = "cmpe_272_db";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
    $Count_Estate = 0;
    $sql="select visited from Tracking where company_name='Real_Estate'";
    $result=mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $Count_Estate = $row["visited"];
        }
    }
	$Count_Estate += 1;
	$sql = "UPDATE  Tracking SET visited =  $Count_Estate where company_name = 'Real_Estate'";
	if ($conn->query($sql) === TRUE) {
    // echo "True";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Real Estate Builders Free Responsive Website Templates - icon">
	<meta name="author" content="webThemez.com">
	<title>Free Html5 Responsive Web Template</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
						<li class="active"><a href="services.html">Services</a></li>
					<li><a href="price.html">Price</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Services</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h3>Constructions</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3><a href = "land.php">Land</a></h3>
                            Land is the baseline for all types of real property. Land typically refers to undeveloped property and vacant land. Developers acquire land and combine it with other properties (called assembly) and rezone it so they can increase the density and increase the value of the property.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3><a href = "residential.php">Residential</a></h3>
							Residential real estate consists of housing for individuals, families, or groups of people. This is the most common type of estate and is the asset class that most people are familiar with. Within residential, there are single-family homes, apartments, condominiums, townhouses, and other types of living arrangements.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-tachometer fa-2x"></i>
						<div class="text">
							<h3><a href = "commercial.php">Commercial</a></h3>
							Commercial property refers to land and buildings that are used by businesses to carry out their operations. Examples include shopping malls, individual stores, office buildings, parking lots, medical centers, and hotels
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-eye fa-2x"></i>
						<div class="text">
							<h3><a href = "industrial.php">Industrial</a></h3>
							Industry property refers to land and buildings that are used by businesses to carry out their operations. Examples include shopping malls, individual stores, office buildings, parking lots, medical centers, and hotels
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-quote-right fa-2x"></i>
						<div class="text">
							<h3><a href = "propertData.php">Property data</a></h3>
							Property Data refers to land and buildings that are used by businesses to carry out their operations. Examples include shopping malls, individual stores, office buildings, parking lots, medical centers, and hotels
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-arrows fa-2x"></i>
						<div class="text">
							<h3><a href = "landData.php">Land Data</a></h3>
							Land Data refers to land and buildings that are used by businesses to carry out their operations. Examples include shopping malls, individual stores, office buildings, parking lots, medical centers, and hotels
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>
	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Article content -->
			<section class="col-sm-12 maincontent">
				<h3>Responsive Website</h3>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<h3>Bootstrap</h3>
				<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</section>
		</div>
		<div class="row offs1">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news2.jpg" alt="">

                            <div class="caption">
                                <h4>
                                    <a href="#">
                                        Aliquam eu aliquet quam
                                    </a>
                                </h4>

                                <p>
                                    Souvlaki ignitus carborundum e pluribus unumfacto lingo est igpay atinlay arquee
                                    selectus. non provisio incongruous feline nolo contendre. Gratuitous octopus niacin,
                                    sodium glutimate. Quote meon
                                </p>
                                <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news3.jpg" alt="">

                            <div class="caption">
                                <h4>
                                    <a href="#">
                                        Factorial non deposit
                                    </a>
                                </h4>

                                <p>
                                    Enumfacto lingo est igpay atinlay arquee selectus.
                                    non provisio incongruous feline nolo contendre. Grat uitous octopus niacin, sodium
                                    glutimate. Quote meon an estimate et non interruptus stad
                                </p>
                                <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail4">
                            <img src="assets/images/news4.jpg" alt="">

                            <div class="caption">
                                <h4>
                                    <a href="#">
                                        Deposit quid proquo
                                    </a>
                                </h4>

                                <p>
                                    Arquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus
                                    niacin, sodium gluti mate. Quote meon an estimate et non interruptus stad ium. Sic
                                    tempus fugit esperanto
                                </p>
                                <a href="#" data-title="Read More" class="btn-link"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
	</div>
	<!-- /container -->

	 <section class="btm-section secpadding">
	  <div class="container">
      <div class="row">
      	    <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">New Projects</h3></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
            </ul>
            </div>
         </div>
        
        <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Large Projects</h3></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
            </ul>
            </div>
         </div>
         <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Our Clients</h3></div> 
            <blockquote class="blockquote-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote></div>
         
      </div></div>
      </section>
      
    	 
    <footer id="footer">
	 
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<a href="services.html">Services</a> |
								<a href="price.html">Price</a> |
								<a href="projects.html">Projects</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2015. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
