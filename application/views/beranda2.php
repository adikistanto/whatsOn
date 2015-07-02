<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">



        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title>WhatsOn</title>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">LOGO</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav"> <!--navbar-right-->
                        <li><a class="text" href="<?php echo site_url('beranda');?>">HOME</a></li>
                        <li>
                            <a href=""><img src="<?php echo base_url()?>assets/images/pemberitahuan.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo base_url()?>assets/images/pesan.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo base_url()?>assets/images/teman.png" alt=""></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"> <!--navbar-right-->
                        <li>
                            <form action="" method="get" class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </form>
                        </li>
                        <li>
                            <a href="<?php echo site_url('profile');?>"><img src="<?php echo base_url()?>assets/images/profil.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><span class="glyphicon glyphicon-cog"></span></a>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

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
                <div class="col-sm-10 col-sm-offset-2 main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10" style="padding-left: 0;">
                            <div class="col-xs-12 col-sm-9" style="padding-right: 30px;">
                                <h2>Event</h2>
                                <div class="my status-profil">
                                    <div class="well">
                                        <h4>
                                            <img src="<?php echo base_url()?>assets/images/profil.png" >
                                            <?php echo $user['nama_depan'].' '.$user['nama_belakang'];?>
                                            <button type="button" class="btn btn-default" style="float:right"><span class="glyphicon glyphicon-plus"></span>Tambah Event</button>
                                        </h4>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <textarea name="status" rows="5"></textarea>
                                            <button type="button" class="btn">
                                                <img src="<?php echo base_url()?>assets/images/upload-gambar.png" alt="">
                                            </button>
                                            <button type="button" class="btn">
                                                <img src="<?php echo base_url()?>assets/images/upload-video.png" alt="">
                                            </button>
                                            <button type="button" class="btn">
                                                <img src="<?php echo base_url()?>assets/images/edit-gambar.png" alt="">
                                            </button>
                                            <button type="submit" class="btn btn-default pull-right">Send</button>
                                        </form>
                                        
                                    </div>
                                </div>
                                <div class="status-profil">
                                    <div class="well">
                                        <h4>
                                            <img src="<?php echo base_url()?>assets/images/profil.png" >
                                            Profile
                                            <button type="button" class="btn pull-right" style="color:black"><span class="glyphicon glyphicon-menu-down"></span></button>
                                        </h4>
                                        <hr>
                                        <p>Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                        <hr>
                                        <a href="" title="" class="status-attr">
                                            <img src="<?php echo base_url()?>assets/images/follow.png" alt="">
                                            <span class="badge">4</span>
                                        </a>
                                        <a href="" title="" class="status-attr">
                                            <img src="<?php echo base_url()?>assets/images/komentar.png" alt="">
                                            <span class="badge">5</span>
                                        </a>
                                        <a href="" title="" class="status-attr">
                                            <img src="<?php echo base_url()?>assets/images/berbagi.png" alt="">
                                            <span class="badge">0</span>
                                        </a>
                                        <div style="float:right">
                                            <a href="" title="" class="status-attr">Follow</a>
                                            <a href="" title="" class="status-attr">Share</a>
                                        </div>
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <img src="<?php echo base_url()?>assets/images/profil.png" alt="" style="width:20px;height:20px">
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
                                            <img src="<?php echo base_url()?>assets/images/profil.png" >
                                            Profile
                                            <button type="button" class="btn pull-right" style="color:black"><img src="<?php echo base_url()?>assets/images/status-pemberitahuan.png" alt=""></button>
                                        </h4>
                                        <small class="pull-right text-muted">Few minute ago</small>
                                        <p>Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-xs col-sm-2 col-sm-offset-6 side" style="border-left: solid 1px black; height: 100%">
                                <h4><strong>Recommended Event</strong></h4>
                                <div class="well">
                                    <div class="well-header">
                                        <p class="title"><strong>Event</strong></p>
                                    </div>
                                    <div class="well-content">
                                        
                                    </div>
                                    <div class="well-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-2 col-sm-offset-8 sidebar-offcanvas side" id="sidebar">
                            <div class="well">
                                <div class="well-header">
                                    <h4><strong>Iklan</strong></h4>
                                </div>
                                <div class="well-content">
                                    
                                </div>
                                <div class="well-footer">
                                    
                                </div>
                            </div>
                            <div class="well">
                                <div class="well-header">
                                    <h4><strong>Iklan</strong></h4>
                                </div>
                                <div class="well-content">
                                    
                                </div>
                                <div class="well-footer">
                                    
                                </div>
                            </div>
                            <hr style="border-color:red">
                            <div class="friends">
                                <img src="<?php echo base_url()?>assets/images/profil.png" alt="">
                                Somebody 1
                            </div>
                            <div class="friends">
                                <img src="<?php echo base_url()?>assets/images/profil.png" alt="">
                                Somebody 2
                            </div>
                            <div class="friends">
                                <img src="<?php echo base_url()?>assets/images/profil.png" alt="">
                                Somebody 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

