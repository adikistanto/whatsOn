<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>What's On</title>
        <link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/whatsOn.css" type="text/css" media="screen" />
    </head>
    <body>
        <header>
            <span id="welcome">Selamat datang di What's On</span>
        </header>
        
        <!-- Id Halaman -->
        <div id="sign-up">
            <div id="login_box">
                <div id="login_box_title"><h3>Daftar</h3></div>
                <form action="" method="POST">
                    <input id="nama_depan" class="form-control" type="text" name="nama_depan" placeholder="Nama depan" autofocus autocomplete required/>
                    <input id="nama_belakang" class="form-control" type="text" name="nama_belakang" placeholder="Nama belakang" autocomplete required/>
                    <br><br>
                    <input id="surel" class="form-control" type="email" name="surel" placeholder="Masukkan email" autocomplete required/>
                    <br>
                    <input id="kunci_rahasia" class="form-control" type="password" name="kunci_rahasia" placeholder="Masukkan kata sandi" required/>
                    <br>
                    <input id="kunci_rahasia_2" class="form-control" type="password" name="kunci_rahasia_2" placeholder="Konfirmasi kata sandi" required/>
                    <br>
                    <label for="tanggal_Lahir">Tanggal lahir</label>
                    <br>
                    <select id="tanggal_lahir" class="form-control" name="tanggal_lahir" required >
                        <option value="">Tanggal</option>
                        <?php
                            for($i=1; $i<=31; $i++){
                                echo '<option value='. $i .'>'. $i .'</option>';
                            }
                        ?>
                    </select>
                    <select id="bulan_lahir" class="form-control" name="tanggal_lahir" required >
                        <option value="">Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <select id="tahun_lahir" class="form-control" name="tahun_lahir" required>
                        <option value="">Tahun</option>
                        <?php
                            $tahun_ini = new DateTime('Y');
                            $tahun_lahir = $tahun_ini->sub(new DateInterval('P18Y'));
                            for($i=1; $i<=70; $i++){
                                echo '<option value='. $tahun_lahir->format('Y') .'>'. $tahun_lahir->format('Y') .'</option>';
                                /*mengurangi tahun*/
                                $tahun_lahir->sub(new DateInterval('P1Y'));
                            }
                        ?>
                    </select>
                    <br><br>
                    <label for="gender">Jenis kelamin</label>
                    <br>
                    <select id="gender" class="form-control" name="gender" required >
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <br>
                    <input id="sign-up-btn" class="ok-btn btn" type="submit" name="sign-up-btn" value="Daftar" />
                    <a href="<?php echo site_url('whatsOn') ?>"><input class="no-btn btn btn-default" type="button" value="Cancel" />
                </form>
            </div>
        </div>
    </body>
</html>