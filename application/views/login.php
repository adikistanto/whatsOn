<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>What's On</title>
<!--        <link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/whatsOn.css" type="text/css" media="screen" />
    </head>
    <body>
        <header>
            <span id="welcome">Selamat datang di What's On</span>
        </header>

        <!-- Id Halaman -->        
        <div id="login">
            <div id="login_box">
                <div id="login_box_title"><h3>Login</h3></div>
                <form action="" method="POST">
                    <input id="identitas" class="form-control" type="email" name="identitas" placeholder="Masukkan email" autofocus autocomplete required/>
                    <br>
                    <input id="kunci_rahasia" class="form-control" type="password" name="kunci_rahasia" placeholder="Masukkan kata sandi" required/>
                    <a href="">Lupa password?</a>
                    <br>
                    <input id="login-btn" class="ok-btn btn" type="submit" name="login-btn" value="Masuk" />
                    <a href="<?php echo site_url('daftar') ?>"><input id="sign-up-btn" class="no-btn btn btn-default" type="button" value="Daftar" />
                </form>
            </div>
        </div>
    </body>
</html>