
<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Anjungan Mahasiswa - ITPLN | User Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="itpln.ac.id" name="description" />
        <meta content="itpln.ac.id" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="https://mahasiswa.itpln.ac.id/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="https://mahasiswa.itpln.ac.id/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="https://mahasiswa.itpln.ac.id/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
		
		<link href="https://mahasiswa.itpln.ac.id/assets/parsley/css/parsley.css" rel="stylesheet"> 
		
        <link rel="shortcut icon" href="favicon.ico" /> 
	</head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(bg_anjungan.jpg)">
                        <!-- <img class="login-logo" src="../assets/pages/img/login/logo.png" /> --> 
					</div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <h2>Anjungan Mahasiswa - ITPLN</h2>
                        <form action="process_login.php" class="login-form" method="post" data-parsley-validate="">
							<input type="hidden" name="csrf_test_name" value="b7fadd2c1e623ad0d49b21c089d68077" />
							<input type="hidden" name="badanhukum_id"       value="033104" />
																
																
                            <div class="row">
                                <div class="col-xs-6">
									<label for="userid">NIM</label>
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" name="user_id" data-parsley-required="true">
								</div>
                                <div class="col-xs-6">
									<label for="password">Password</label>
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" name="password"  data-parsley-required="true">
								</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Ingatkan saya
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                            
                            
                        

                                <div class="col-sm-8 text-right"><!--
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div> -->
                                    <button class="btn green" id="submit_login" name="submit_login"  type="submit">Sign In</button>
                                </div>
                                <div class="col-sm-12 text-left">
                                        
                                            <h5><strong>Panduan Anjungan Mahasiswa klik <a href="https://sttpln-my.sharepoint.com/:b:/g/personal/pdsi_itpln_ac_id/EYrzG9z5zyxLoqsDPWLhMSQBHHt9aXOhJz94z7RHpyVCmA?e=O0Kaa6" target="_blank"> disini </a></strong></h5>
                                </div>

                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="https://mahasiswa.itpln.ac.id/MHS.ResetPassword" method="post" data-parsley-validate="">
							<input type="hidden" name="csrf_test_name" value="b7fadd2c1e623ad0d49b21c089d68077" />
                            <h3 class="font-green">Lupa Password ?</h3>
                            <p> Gunakan email yang terdaftar di anjungan anda untuk mendapatkan bantuan lupa password </p>
                            <div class="form-group">
                                <input type="email" class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="alamat email anda" name="email_reset" id="email_reset" required="" /> 
                            </div>
                            <div class="form-actions">
<!--                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button> -->
                                <button type="submit" class="btn btn-success uppercase pull-right" id="submit_reset" name="submit_reset">Submit</button>
                            </div>
                        </form>
						<p></p>
						<h2><strong>Vaksinasi</strong></h2>
						Pendataan Vaksinasi klik <a href="http://itpln.id/pendataanvaksinasi" target="_blank">disini.</a>
                        <!-- END FORGOT PASSWORD FORM -->


                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-3 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="https://www.facebook.com/gabungitpln/">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-9 bs-reset">
                                <div class="login-copyright text-right">
                                    <p></p>
									<p>Copyright &copy; 2020 <a target="_blank" href="/cdn-cgi/l/email-protection#a4d7d1d4d4cbd6d0e4cdd0d4c8ca8ac5c78acdc0">PDSI ITPLN</a>&nbsp;|&nbsp;<i class="fa fa-envelope"></i>&nbsp;<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="25565055554a5751654c5155494b0b44460b4c41">[email&#160;protected]</a></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!-- BEGIN CORE PLUGINS -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="https://mahasiswa.itpln.ac.id/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="https://mahasiswa.itpln.ac.id/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--        <script src="https://mahasiswa.itpln.ac.id/assets/pages/scripts/login-5.min.js" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->

        <script src="https://mahasiswa.itpln.ac.id/assets/parsley/js/parsley.min.js" type="text/javascript"></script>
		</body>
</html>
