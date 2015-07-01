@extends('layout')

@section('content_title')
<title>Jumbotron Template for Bootstrap</title>
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2 sidebar">
			<h4><strong>Events</strong></h4>
			<hr style="border-color:red">
			<ul class="nav nav-sidebar">
			<li id=""><a href="">Event 1<span style="float:right">4</span></a></li>
                <li id=""><a href="">Event 2<span style="float:right">10</span></a></li>
                <li id=""><a href="">Event 3<span style="float:right">4</span></a></li>
            </ul>
		</div>
		<div class="col-sm-10 main">
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="col-xs-12 col-sm-9">
						<h2>Event</h2>
						<div class="my status-profil">
							<div class="well">
								<h4>
									<img src="{{ Config::get('custom_path.images') }}/home/profil.png" >
									My Profile
									<button type="button" class="btn btn-default" style="float:right"><span class="glyphicon glyphicon-plus"></span>Tambah Event</button>
								</h4>
								<form action="" method="post" accept-charset="utf-8">
									<textarea name="status" rows="5"></textarea>
									<button type="button" class="btn">
										<img src="{{ Config::get('custom_path.images') }}/home/upload-gambar.png" alt="">
									</button>
									<button type="button" class="btn">
										<img src="{{ Config::get('custom_path.images') }}/home/upload-video.png" alt="">
									</button>
									<button type="button" class="btn">
										<img src="{{ Config::get('custom_path.images') }}/home/edit-gambar.png" alt="">
									</button>
									<button type="submit" class="btn btn-default pull-right">Send</button>
								</form>
								
							</div>
						</div>
						<div class="status-profil">
							<div class="well">
								<h4>
									<img src="{{ Config::get('custom_path.images') }}/home/profil.png" >
									Profile
									<button type="button" class="btn pull-right" style="color:black"><span class="glyphicon glyphicon-menu-down"></span></button>
								</h4>
								<hr>
								<p>Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
								<hr>
								<a href="" title="" class="status-attr">
									<img src="{{ Config::get('custom_path.images') }}/home/follow.png" alt="">
									<span class="badge">4</span>
								</a>
								<a href="" title="" class="status-attr">
									<img src="{{ Config::get('custom_path.images') }}/home/komentar.png" alt="">
									<span class="badge">5</span>
								</a>
								<a href="" title="" class="status-attr">
									<img src="{{ Config::get('custom_path.images') }}/home/berbagi.png" alt="">
									<span class="badge">0</span>
								</a>
								<div style="float:right">
									<a href="" title="" class="status-attr">Follow</a>
									<a href="" title="" class="status-attr">Share</a>
								</div>
								<form action="" method="post">
									<div class="input-group">
										<div class="input-group-addon">
											<img src="{{ Config::get('custom_path.images') }}/home/profil.png" alt="" style="width:20px;height:20px">
											My Profile
										</div>
										<input type="text" class="form-control" name="comentar" placeholder="Comentar...">
									</div>
								</form>
								

							</div>
						</div>

						<div class="status-profil new">
							<div class="well">
								<h4>
									<img src="{{ Config::get('custom_path.images') }}/home/profil.png" >
									Profile
									<button type="button" class="btn pull-right" style="color:black"><img src="{{ Config::get('custom_path.images') }}/home/status-pemberitahuan.png" alt=""></button>
								</h4>
								<small class="pull-right text-muted">Few minute ago</small>
								<p>Vivamus suscipit tortor eget felis porttitor volutpat. </p>
							</div>
						</div>
					</div>
					<div class="hidden-xs col-sm-3 side" style="border-left: solid 1px black; height: 100%">
						<h4><strong>Recommended Event</strong></h4>
						<div class="well">
							<div class="well-header">
								<p class="title"><strong>Event</strong></p>
							</div>
							<div class="well-content">
								<p>No record found</p>
							</div>
							<div class="well-footer">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas side" id="sidebar">
					<div class="well">
						<div class="well-header">
							<h4><strong>Iklan</strong></h4>
						</div>
						<div class="well-content">
							<p>No record found</p>
						</div>
						<div class="well-footer">
							
						</div>
					</div>
					<div class="well">
						<div class="well-header">
							<h4><strong>Iklan</strong></h4>
						</div>
						<div class="well-content">
							<p>No record found</p>
						</div>
						<div class="well-footer">
							
						</div>
					</div>
					<hr style="border-color:red">
					<div class="friends">
						<img src="{{ Config::get('custom_path.images') }}/home/profil.png" alt="">
						Somebody 1
					</div>
					<div class="friends">
						<img src="{{ Config::get('custom_path.images') }}/home/profil.png" alt="">
						Somebody 2
					</div>
					<div class="friends">
						<img src="{{ Config::get('custom_path.images') }}/home/profil.png" alt="">
						Somebody 3
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('content_js')
@stop