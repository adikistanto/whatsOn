<html>
	<head>
		<title>WhatsOn</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fajar.css" type="text/css" media="screen" />
		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>  
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">LOGO</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url('beranda');?>">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="#"><div class="icon"><img src="<?php echo base_url();?>assets/images/pemberitahuan.png" /></div></a></li>
								<li><a href="#"><div class="icon"><img src="<?php echo base_url();?>assets/images/pesan.png" /></div></a></li>
								<li><a href="#"><div class="icon"><img src="<?php echo base_url();?>assets/images/teman.png" /></div></a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo site_url('profile');?>"><div class="icon"><img src="<?php echo base_url();?>assets/images/default-profil.png" /></div></a></li>
								<li><a href="#"><div class="icon"><img src="<?php echo base_url();?>assets/images/pengaturan.png" /></div></a></li>
							</ul>
							<form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div><!--end header-->
			<div style="clear:both"></div>
			<div id="content">
				<div id="col1" class="col-md-2">
					<div id="profile_photo" class="col-md-12">
						<div id="photo" class="col-md-12">
							<img width="120px;"src="<?php echo base_url();?>assets/images/default-profil.png" />
						</div>
						<div id="nickname" class="col-md-12">
							<h5><?php echo $user['nama_depan'].' '.$user['nama_belakang'];?></h5>
						</div>
						<div id="profile_status" class="col-md-12">
							<?php 
								if(!empty($user['status'])){
									echo $user['status'];
								}else{
									echo 'Hello World!';
								}
							?>
						</div>
					</div>
					<div id="profile_data" class="col-md-12">
						<div class="_data" class="col-md-12">
							<span style="color:#BCA7A5;">Full Name</span><br>
							<span><?php echo $user['nama_depan'].' '.$user['nama_belakang'];?></span>
						</div>
						<div class="_data" class="col-md-12">
							<span style="color:#BCA7A5;">Birthday</span><br>
							<span><?php echo date('d F Y', strtotime($user['ttl']));?></span>
						</div>
						<div class="_data" class="col-md-12">
							<span style="color:#BCA7A5;">Address</span><br>
							<span><?php if(isset($user['kota'])){ echo $user['kota'];}else{ echo '-';}?></span>
						</div>
						<div class="_data" class="col-md-12">
							<span style="color:#BCA7A5;">Work On</span><br>
							<span><?php if(isset($user['work'])){ echo $user['work'];}else{ echo '-';}?></span>
						</div>
					</div>
					<div id="profile_event" class="col-md-12">
						<div id="event_header">
							Events
						</div>
						<div id="events">
							<ul>
								<li>Event 1</li>
								<li>Event 2</li>
								<li>Event 3</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="col2" class="col-md-6">
					<div id="tab" class="col-md-6">
						<div id="tab_status" class="col-md-4">
							<span class="tab_text">Status</span>
						</div>
						<div id="tab_event" class="col-md-4">
							<span>Events</span>
						</div>
						<div id="tab_friend" class="col-md-4">
							<span>Friends</span>
						</div>
					</div>
					<div style="clear:both;">

					</div>
					<div id="editor" class="col-md-12">
						<div id="editor_title" class="col-md-12">
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="editor_title_text" class="icon col-md-11"><?php echo $user['nama_depan'].' '.$user['nama_belakang'];?></div>
						</div>
						<form method="post" action="<?php echo site_url('set_status');?>">
						<div id="editor_content" class="col-md-12">
							
							<!--<textarea name="status" rows="5"></textarea>-->
							<textarea cols="97" rows="5" name="status" style="resize:none;"></textarea>
						</div>
						<div id="editor_action" class="col-md-12">
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/upload-gambar.png" /></div>
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/upload-video.png" /></div>
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/edit-gambar.png" /></div>
							<button type="submit" class="btn btn-default pull-right">Send</button>
						</div>
						</form>
					</div>
					<div class="col-md-12 status">
						<div id="status_title" class="col-md-12">
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-10">Profile</div>
							<div class="icon_dropdown col-md-1"><img src="<?php echo base_url();?>assets/images/dropdown.png" /></div>
						</div>
						<div id="status_content" class="col-md-12">
							Somebody's Status
						</div>
						<div id="status_footer" class="col-md-12">
							<div id="status_footer_text" class=" pull-right">Few Minutes Ago</div>
						</div>
					</div>
					<div class="col-md-12 status">
						<div id="status_title" class="col-md-12">
							<div class="icon col-md-1"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-10">Profile</div>
							<div class="icon_dropdown col-md-1"><img src="<?php echo base_url();?>assets/images/dropdown.png" /></div>
						</div>
						<div id="status_content" class="col-md-12">
							Somebody's Status
						</div>
						<div id="status_footer" class="col-md-12">
							<div id="status_footer_text" class=" pull-right">Few Minutes Ago</div>
						</div>
					</div>
				</div>
				<div id="col3" class="col-md-2">
					<div id="date" class="col-md-12">
						Disini Tanggal
					</div>
					<div style="clear:both;">
					</div>
					<div id="rec_header">
						<h4><b>Recomended Event</b></h4>
					</div>
					<div id="rec_event" class="col-md-12">
						<div id="rec_event_title" class="col-md-12">
							<span><b>Event</b></span>
						</div>
						<div id="rec_event_content" class="col-md-12">
							<div id="events">
								<ul>
									<li>Event 1</li>
									<li>Event 2</li>
									<li>Event 3</li>
								</ul>
							</div>
						</div>
						<div id="rec_event_footer" class="col-md-12">
						
						</div>
					</div>
				</div>
				<div id="col4" class="col-md-2">
					<div class="col-md-12 ads">
						<div id="ads_title" class="col-md-12">
							<span><b>Iklan</b></span>
						</div>
						<div id="ads_content" class="col-md-12">
							adnladnalkdnsalkdnalkdnsla dmlkasdmadlmasldna lkdnalkdndlknaldknasl kdnaslkdnlkdnsal
						</div>
						<div id="ads_footer" class="col-md-12">
						
						</div>
					</div>
					<div class="col-md-12 ads">
						<div id="ads_title" class="col-md-12">
							<span><b>Iklan</b></span>
						</div>
						<div id="ads_content" class="col-md-12">
							adnladnalkdnsalkdnalkdnsla dmlkasdmadlmasldna lkdnalkdndlknaldknasl kdnaslkdnlkdnsal
						</div>
						<div id="ads_footer" class="col-md-12">
						
						</div>
					</div>
					
					<div id="people" class="col-md-12" style="padding:0px;">
						<div class="col-md-12 list_people">
							<div class="icon col-md-3"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-9">Profile</div>
						</div>
						<div class="col-md-12 list_people">
							<div class="icon col-md-3"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-9">Profile</div>
						</div>
						<div class="col-md-12 list_people">
							<div class="icon col-md-3"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-9">Profile</div>
						</div>
						<div class="col-md-12 list_people">
							<div class="icon col-md-3"><img src="<?php echo base_url();?>assets/images/profil.png" /></div>
							<div id="status_title_text" class="icon col-md-9">Profile</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>