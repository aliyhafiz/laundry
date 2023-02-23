	<div class="navbar navbar-main navbar-fixed-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="info">
							<div class="info-item">
								<span class="fa fa-phone"></span> <?php echo $myData_setting['telp']; ?>
							</div>
							<div class="info-item">
								<span class="fa fa-envelope-o"></span> <a href="mailto:<?php echo $myData_setting['email']; ?>" title=""><?php echo $myData_setting['email']; ?></a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="top-sosmed pull-right">
							<a href="<?php echo $myData_setting['fb']; ?>" title="" target="_blank"><span class="fa fa-facebook"></span></a>
							<a href="<?php echo $myData_setting['twitter']; ?>" title="" target="_blank"><span class="fa fa-twitter"></span></a>
							<a href="<?php echo $myData_setting['ig']; ?>" title="" target="_blank"><span class="fa fa-instagram"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home"><img src="images/logo/<?php echo $myData_setting['logo']; ?>" alt="" /></a>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="services.html">SERVICES</a></li>
					<li><a href="price.html">PRICING</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
			</div>
		</div>
    </div>