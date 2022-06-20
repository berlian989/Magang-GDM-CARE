<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?= $title; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url()?>lassets/images/tittleimg.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>lassets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url()?>lassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>lassets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url()?>lassets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>lassets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>lassets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>lassets/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" class="login100-form validate-form" action="<?= base_url('auth'); ?>">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?php echo base_url()?>lassets/images/caregdm.png" alt="IMG">
                    </div>
                    <?=$this->session->flashdata('massage')?>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email"
                            value="<?=set_value('email')?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Lupa
                        </span>
                        <a class="txt2" href="http://localhost/pm/auth/lupapass">
                            Password?
                        </a>
                    </div>
                    <div class="text-center p-t-80">
                        <a class="txt2" href="http://localhost/pm/auth/regis">
                            Daftar
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

            </div>

        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?php echo base_url()?>lassets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url()?>lassets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url()?>lassets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url()?>lassets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url()?>lassets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url()?>lassets/js/main.js"></script>

</body>

</html>