<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="iXeuDSWh4LPaiEFS54cAl5IWl1JyGEuqh-KAXFRFH_Q"/>
    <title>sman dua bogor</title>
    
    
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dropzone/demos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dropzone/dropzone.js"></script>
    
    <!--Let browser know website is optimized for mobile-->
    <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <style>
        html {
            font-family: Raleway;
        }
        .navbar-prelaunch {
            background-color: rgba(255,255,255,0.3);
            height:4em;
            position: fixed;
            width: 100%;
            text-align: center;
        }
        .logo-prelaunch {
            height: 2.5em;
            margin-top: 0.75em;
        }
        .parallax-container {
            color: #ffffff;
            padding-top: 6em;
        }
        .textbox {
            //background-color: rgba(255,255,255,0.2);
            padding: 0.5em;
            margin-top: 2.5em;
            border-style: solid;
            border-color: white;
            //border-radius: 10px;
        }
        .fullpage {
            min-height: 44em;
        }
        .fullabsolutepage {
            height: 44em;
        }
        .seveblue {
            background-color: #003a75;
            color: #ffffff;
        }
        .paddedrow {
            padding-top: 5.5em;
            text-align: center;
        }
        .brandlogo {
            height: 6em;
        }
    </style>
</head>
    
<body>
    <div class="navbar-prelaunch">
        <h5 style="color:#ffffff"><b>pilih opsi</b></h5>
    </div>
    
    <div class="parallax-container fullpage">
        <div class="parallax"><img src="<?php echo base_url();?>assets/img/parallax1_1.png"></div>
        <div class="container paddedrow row">
            <div class="col m4 offset-m4 s12">
                <div class="textbox">
                    <a href="<?php echo base_url();?>penilaian/lihat">Penilaian</a>
                </div>
                <div class="textbox">
                    <a href="<?php echo base_url();?>kelas/cetak">Kelas</a>
                </div>
                <div class="textbox">
                    <a href="<?php echo base_url();?>mapel/cetak">Mata Pelajaran</a>
                </div>
                <div class="textbox">
                    <a href="<?php echo base_url();?>siswa/cetak">Siswa</a>
                </div>
                <div class="textbox">
                    <a href="<?php echo base_url();?>guru/cetak">Guru</a>
                </div>
            </div>
        </div>
    </div>
    <footer style="color: dimgray; background-color: #e0e0e0; height: 3em; padding-top: 1em;">
        <div class="container" style="font-size: 11pt; text-align: center"><b>SMAN 2 BOGOR</b> | fikry.labsky08@gmail.com</div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.parallax').parallax();
        });
    </script>
    
</body>
    
</html>