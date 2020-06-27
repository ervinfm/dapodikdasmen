<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Management - Dapodik Kemendikbud RI</title>
        <link rel="shortcut icon" href="<?=base_url().'assets/img/logo-dikdasmen.png'?>" type="image/x-icon">

        <!-- CSS  -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url().'assets/css/style.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assets/css/icons/fontawesome/styles.min.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assets/css/icons/icomoon/styles.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assets/plugins/sweetalert/dist/sweetalert2.css'?>">

        <style>
            .wrap { -webkit-box-shadow: #999999 0 0 10px 0; background: #FFFFFF url('<?=base_url()?>/assets/img/twh.jpg')  scroll no-repeat 20px 20px; border-radius: 8px 8px 8px 8px; box-shadow: #999999 0 0 10px 0; position: absolute; top: 50%; left: 50%; margin: -200px 0 0 -200px; width: 400px; z-index: 1000; color: #333333; }
            .wrap h2 { font-size: 26px; line-height: 36px; margin: 25px 20px 0 85px; font-weight: bold; }
            .wrap h4 { font-size: 14px; color: #999999; line-height: 18px; margin: -3px 0 30px 85px; }
            .wrap .alert { margin: 20px; text-align: center; }
            .wrap .login { background-color: #EEEEEE; border-radius: 6px 6px 6px 6px; padding: 10px; margin: 5px 20px 20px; overflow: hidden; }
            .wrap .login .email { margin-top: 5px; }
            .wrap .login .pw { margin-top: 55px; }
            .wrap .login .remember { margin: 15px 0 0 95px }
            .wrap .login label { float: left; font-weight: bold; font-size: 13px; margin: 10px 5px; width: 80px; }
            .wrap .login label.checkbox { font-size: 13px; font-weight: normal; width: 100%; }
            .wrap .login .field-input { background-color: #DDDDDD; border-radius: 3px 3px 3px 3px; float: right; padding: 5px; }
            .wrap .login .field-input .control-group { margin: 0; }
            .wrap .login .field-input .control-group .input-prepend { margin-bottom: 0 !important; }
            .wrap .login .field-input input { margin: 0; width: 190px !important; }
            .wrap .submit { margin-bottom: 15px; }
            .wrap .submit .forget { float: left; font-size: 13px; text-decoration: none; margin-left: 20px; }
            .wrap .submit .btn { margin-left: 300px; color: #FFFFFF; border-radius: 5px;}
        </style>

        <!-- JS  -->
        <script src="<?=base_url().'assets/plugins/sweetalert/sweetalert2.js'?>"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrap">
            <h2>Data Pokok Pendidikan</h2>
            <h4>login pengguna aplikasi dapodikdasmen</h4>
            <?=form_open();?>
                <div class="alert alert-info">Akses dapat menggunakan akun operator data pokok pendidikan</div>			
                <div class="login">

                    <div class="email">
                        <label for="user">Email</label>
                        <span style="font-size: 11px; color: red"><?= form_error('email'); ?><?=$this->session->flashdata('email');?></span>
                        <div class="field-input">
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-envelope"></i></span>
                                    <input type="email" name="email" value="<?=$this->session->flashdata('v_mail');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pw">
                        <label for="pass">Password</label>
                        <span style="font-size: 11px; color: red"><?= form_error('pass'); ?><?=$this->session->flashdata('pass');?></span>
                        <div class="field-input">
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input type="password" name="pass" value="<?=$this->session->flashdata('v_pass');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remember">
                        <label class="checkbox">
                            <input type="checkbox" value="1" name="remember">
                            Ingatkan saya dikomputer ini
                        </label>
                    </div>
                </div>
                <div class="submit">
                    <a class="forget" href="/acc/passwd">Lupa password</a>
                    <button type="submit" name="login" class="btn btn-primary"><span class="fa fa-sign-in"></span> Login</button>
                </div>
            <?=form_close()?>
        </div>
    </body>
</html>