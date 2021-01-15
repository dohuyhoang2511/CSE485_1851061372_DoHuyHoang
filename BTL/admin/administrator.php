<?php include('../functions.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Resume</title>
<link rel="icon" href="../img/favicon.png" type="image/png">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/style.css" rel="stylesheet" type="text/css"> 
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

 
</head>
<body>

<!--Hero_Section-->

<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-6">		   
            <div class="top_left_cont intro zoomIn wow animated"> 

			<?php $results_introduce = mysqli_query($db, "SELECT * FROM introduce") ?>
            <?php while ($row = mysqli_fetch_array($results_introduce)) { ?>
			<a href="edit_introduce.php?id_introduce=<?php echo $row['id_introduce']; ?>" class = "btn btn-danger">Edit Introduce</a>
              <h2><?php echo $row['name']; ?><br> 
              <strong><?php echo $row['career']; ?></strong></h2>
              <p><?php echo $row['introduce_message']; ?></p>
            <?php } ?>
                
			
              <div class="underline"></div>

			  	<?php $results_social = mysqli_query($db, "SELECT * FROM social_link") ?>
            	<?php while ($row = mysqli_fetch_array($results_social)) { ?>  	

				<ul class="social_links">			  	
					<li class="instagram animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
					<li class="facebook animated bounceIn wow delay-03s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook"></i></a></li>
					<li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['pinterest'] ?>"><i class="fab fa-pinterest"></i></a></li>
					<li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['google'] ?>"><i class="fab fa-google"></i></a></li> 
				</ul>

				<?php } ?>

              


			  </div>
          </div> 
		  <div class="col-md-6">
		   <img alt="" src="../img/profile-picture.jpg">
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<!--Header_section-->
<header id="header_wrapper"> 
    <div class="header_box">
		<nav class="navbar navbar-inverse" role="navigation">
      		<div class="navbar-header">
        		<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    		</div>
	    	<div id="main-nav" class="collapse navbar-collapse navStyle">
				<ul class="nav navbar-nav" id="mainNav">
			  		<li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  		<li><a href="#aboutUs" class="scroll-link">About Me</a></li>
			  		<li><a href="#service" class="scroll-link">Skills</a></li>
			  		<li><a href="#education" class="scroll-link">Education</a></li>
			  		<li><a href="#experience" class="scroll-link">Experience</a></li>
			  		<li><a href="#contact" class="scroll-link">Contact</a></li>
				</ul>
      		</div>
	 	</nav>
    </div> 
</header>
<!--Header_section--> 

<!--Aboutus-->

<section id="aboutUs">
	<div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
  		<div class="container">
    		<h2>About Me</h2>
    		<div class="inner_section"> 
	  			<div class="row">
				  	<?php $results_about = mysqli_query($db, "SELECT * FROM about") ?>
					<?php while ($row = mysqli_fetch_array($results_about)) { ?>
						<a href="edit_about.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">Edit</a>
					<div class="col-lg-12 about-us">					
						<h3><?php echo $row['introduce_1']?></h3>
						<p><?php echo $row['introduce_2']?></p>
            		<?php } ?>
						

						<div class="row">
							<div class="col-md-6">
								<p>Personal Information :</p>

								<?php $results_personal = mysqli_query($db, "SELECT * FROM personal_information") ?>
								<?php while ($row = mysqli_fetch_array($results_personal)) { ?>									
								<ul class="about-us-list">
									<li>Name: <?php echo $row['name']?></li>
									<li>Gender: <?php echo $row['gender']?></li>
									<li>Date of birth: <?php echo $row['date_of_birth']?></li>
									<li>Address: <?php echo $row['address']?></li>										
									<li>Interest: <?php echo $row['interest']?></li>
								</ul><!-- /.about-us-list -->
								<?php } ?>


							</div><!-- /.col-md-6 -->
								
							<div class="col-md-6">
								<p>Soft Skills :</p>
								<ul class="about-us-list">
								<?php $results_soft = mysqli_query($db, "SELECT * FROM soft_skills") ?>								
								<?php while ($row = mysqli_fetch_array($results_soft)) { ?>									
									<li class="points"><?php echo $row['skills']?></li>
									<a href="edit_skills.php?STT=<?php echo $row['STT']; ?>" class = "btn btn-danger">Edit</a>
									<a href="delete_skills.php?STT=<?php echo $row['STT']; ?>" class = "btn btn-danger">Delete</a>
								</ul><!-- /.about-us-list -->
								<?php } ?>
								
								<a href="create_skills.php" class = "btn btn-danger">Create</a>
								<br><br>
								
							</div><!-- /.col-md-6 -->
						</div><!-- /.row -->	
					</div><!-- /.col-lg-12 -->
				</div>      
    		</div>
  		</div> 
	</div>
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
	<div class="container">
    	<h2>Skills</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-md-3">
			<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-database"></i></span> </div>
        		<div class="service_block">
    	            <h3 class="animated fadeInUp wow">Database</h3>
        		    <p class="animated fadeInDown wow">Design Simple Database</p>
          		</div>
        	</div>
        <div class="col-md-3"> 
			<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fab fa-css3-alt"></i></span> </div> 
				<div class="service_block">
            		<h3 class="animated fadeInUp wow">CSS3</h3>
            		<p class="animated fadeInDown wow">Start studying from November to now</p>
          		</div>
        	</div>
        <div class="col-md-3">
			<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fab fa-html5"></i></span> </div>
        		<div class="service_block">
            		<h3 class="animated fadeInUp wow">HTML5</h3>
            		<p class="animated fadeInDown wow">Start studying from November to now</p>
          		</div>
        	</div>
		<div class="col-md-3">
			<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-user"></i></span> </div>
    	    	<div class="service_block">
        	    	<h3 class="animated fadeInUp wow">Development</h3>
            		<p class="animated fadeInDown wow">Progamming in C++ and C# language</p>
          		</div>
        	</div>
      	</div> 
    </div>
	</div>
</section>
<!--Service-->

<section id="education" class="timeline">
	<div class="container">
		<h2>Education</h2>
		<div class="qa-message-list" id="wallmessages">

			<?php $results_education = mysqli_query($db, "SELECT * FROM education") ?>
			<?php while ($row = mysqli_fetch_array($results_education)) { ?>
				<a href="delete_education.php?STT_education=<?php echo $row['STT_education']; ?>" class = "btn btn-danger pull-right">Delete</a>
				<a href="edit_education.php?STT_education=<?php echo $row['STT_education']; ?>" class = "btn btn-danger pull-right">Edit</a>
				<br><br>
						<div class="message-item" id="m16">
							<div class="message-inner">
								<div class="message-head clearfix"> 
									<div class="user-detail">
										<h5 class="handle"><?php echo $row['education_name']?></h5>
										<div class="post-meta">
											<div class="asker-meta">
												<span class="qa-message-what"></span>
												<span class="qa-message-when">
													<span class="qa-message-when-data"><?php echo $row['education_time']?></span>
												</span> 
											</div>
										</div>
									</div>
								</div>
								<div class="qa-message-content">
									<?php echo $row['education_message']?>
								</div>
							</div>
						</div>
						
			<?php } ?>

				<br>
				<a href="create_education.php" class = "btn btn-danger">Create</a>
			

						
		</div>
	</div>
</section>
 

<section id="experience" class="timeline">
	<div class="container">
	 	<h2>Experience</h2>
    	<div class="qa-message-list" id="wallmessages">
				
			<?php $results_experience = mysqli_query($db, "SELECT * FROM experience") ?>
			<?php while ($row = mysqli_fetch_array($results_experience)) { ?>
				<a href="delete_experience.php?STT_experience=<?php echo $row['STT_experience']; ?>" class = "btn btn-danger pull-right">Delete</a>
				<a href="edit_experience.php?STT_experience=<?php echo $row['STT_experience']; ?>" class = "btn btn-danger pull-right">Edit</a>
				<br><br>

    				<div class="message-item" id="m16">
						<div class="message-inner">
							<div class="message-head clearfix"> 
								<div class="user-detail">
									<h5 class="handle"><?php echo $row['experience_name']?></h5>
									<div class="post-meta">
										<div class="asker-meta">
											<span class="qa-message-what"></span>
											<span class="qa-message-when">
												<span class="qa-message-when-data"><?php echo $row['experience_time']?></span>
											</span> 
										</div>
									</div>
								</div>
							</div>
							<div class="qa-message-content">
								<?php echo $row['experience_message']?>
							</div>
						</div>
					</div>

			<?php } ?>

				<br>
				<a href="create_experience.php" class = "btn btn-danger">Create</a>	
		</div>
	</div>
</section>

<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
	<div class="container">
	  	<section class="page_section contact" id="contact">
			<div class="contact_section">
		  		<h2>Get In Touch</h2>
			</div>
			<div class="row">
				<div class="wow fadeInLeft">	
					<?php $results_contact = mysqli_query($db, "SELECT * FROM contact") ?>
					<?php while ($row = mysqli_fetch_array($results_contact)) { ?>
					<a href="edit_contact.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">Edit Contact</a>
		   			<div class="contact_info">
							<div class="detail col-lg-5">
								<h4><?php echo $row['name']?></h4>
								<p><?php echo $row['address_contact']?></p>
							</div>
							<div class="detail col-lg-4">
								<h4>Call us</h4>
								<p><?php echo $row['phone_number']?></p>
							</div>
							<div class="detail col-lg-3">
								<h4>Email us</h4>
								<p><?php echo $row['email_contact']?></p>
							</div>
					</div>
					<?php } ?>

					<?php $results_social = mysqli_query($db, "SELECT * FROM social_link") ?>
            		<?php while ($row = mysqli_fetch_array($results_social)) { ?>  	
				
					<ul class="social_links">			  	
						<li class="instagram animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
						<li class="facebook animated bounceIn wow delay-03s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook"></i></a></li>
						<li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['pinterest'] ?>"><i class="fab fa-pinterest"></i></a></li>
						<li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;"><a href="<?php echo $row['google'] ?>"><i class="fab fa-google"></i></a></li> 
					</ul>

					<?php } ?>

		  		</div>
			</div>
	  	</section>
		<div>
			<a href="administrator.php?logout_admin='1'" style="color: red; border-left: 2px solid black;" class="btn btn-primary pull-right">Logout</a>
            <input type = "button" onclick = "document.location.href = 'home.php';" value = "Back" name = "button" 
            style="color: red; border-right: 2px solid black;" class = "btn btn-primary pull-right">
		</div>
	</div>
</footer>

<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.nav.js"></script> 
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script src="../js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="../js/wow.js"></script> 
 <script src="../contact/jqBootstrapValidation.js"></script>
 <script src="../contact/contact_me.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

</body>
</html>