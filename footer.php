<?php 
$query = mysqli_query($koneksidb, "SELECT * FROM setting")
or die('Query salah : '.mysqli_error($koneksidb));
$myData_setting = mysqli_fetch_assoc($query);
?>	
	
	<div class="footer">
	
		<div class="f-desc">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-logo">
								<img src="images/logo/<?php echo $myData_setting['logo']; ?>" alt="" />
							</div>
							<p></p>
							<div class="footer-sosmed">
								<a href="<?php echo $myData_setting['fb']; ?>" target="_blank" title="">
									<div class="item">
										<i class="fa fa-facebook"></i>
									</div>
								</a>
								<a href="<?php echo $myData_setting['twitter']; ?>" target="_blank" title="">
									<div class="item">
										<i class="fa fa-twitter"></i>
									</div>
								</a>
			
	
								<a href="<?php echo $myData_setting['ig']; ?>" target="_blank" title="">
									<div class="item">
										<i class="fa fa-instagram"></i>
									</div>
								</a>
	
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>LINK</h4>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="about.html" title="">Tentang Kami</a>
								</div>
							
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="services.html" title="">Pelayanan</a>
								</div>
		
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="price.html" title="">Harga Jasa</a>
								</div>
		
							</div>							
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>MOTTO</h4>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="#" title="">Cepat</a>
								</div>
							
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="#" title="">Bersih</a>
								</div>
		
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="#" title="">Wangi</a>
								</div>
		
							</div>							
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>CONTACT</h4>
							</div>
							<div class="footer-getintouch">
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-phone"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Phone</div>
										<div class="desc-2">:</div>
										<div class="desc-3"><?php echo $myData_setting['telp']; ?></div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-envelope "></b>
									</div>
									<div class="desc">
										<div class="desc-1">Email</div>
										<div class="desc-2">:</div>
										<div class="desc-3"><a href="mailto:<?php echo $myData_setting['email']; ?>" title=""><?php echo $myData_setting['email']; ?></a></div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-map-marker"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Address </div>
										<div class="desc-2">:</div>
										<div class="desc-3"><?php echo $myData_setting['alamat']; ?></div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
				
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="ftex">Copyright &copy; <?php echo date("Y") ?> <?php echo $myData_setting['footer']; ?></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>