<!DOCTYPE html>
 
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo e(trans('trans.title')); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo e(url('/')); ?>/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo e(url('/')); ?>/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo e(url('/')); ?>/assets/pages/css/login-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->

           <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

       
    </head>
    <!-- END HEAD -->

    <body class=" login" style="background-color: #fff !important;">
        <!-- BEGIN LOGO -->


        <div class="logo">
            <a href="/">

                <img src="<?php echo e(config('global.site_logo')); ?>" alt=""  style="height: 79px;" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="border: 1px solid gainsboro;">
              <?php if(session('status')): ?>
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <!-- BEGIN LOGIN FORM -->
          

                 <form class="login-form" action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
            <?php echo csrf_field(); ?>
             <?php if(session('success')): ?>
   <div class="alert alert-success ">
   <?php echo e(session('success')); ?>


     </div>
   <?php endif; ?>

          <?php if(session('danger')): ?>
   <div class="alert alert-danger ">
   <?php echo e(session('danger')); ?>


     </div>
   <?php endif; ?>
                <h3 class="form-title font-green" style="color:#40bdbd !important" ><?php echo e(trans('trans.Sign In')); ?></h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> <?php echo e(trans('trans.Enter any username and password.')); ?> </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9"><?php echo e(trans('trans.email')); ?>..</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php echo e(trans('trans.email')); ?>" name="email" /> 
<?php if($errors->has('email')): ?>
                                    <span style="color:red;" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9"><?php echo e(trans('trans.Password')); ?></label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="<?php echo e(trans('trans.Password')); ?>" name="password" />

  <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="display: block; color: red;" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                     </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase"  style="background-color: #42d0d0"><?php echo e(trans('trans.Login')); ?></button>
                    
                        <a style="color:#33509e !important" href="#" id="forget-password" class="forget-password"><?php echo e(trans('trans.Forgot Password?')); ?></a>


                    
                </div>
 
                
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase"><?php echo e(trans('trans.Create an account')); ?></a>
                    </p>
                </div>
            </form>



               
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="<?php echo e(route('password.email')); ?>" method="post"> 

                  <?php echo csrf_field(); ?>
                <h3 class="font-green" style="color:#33509e !important"><?php echo e(trans('trans.Forget Password ?')); ?></h3>
                <p><?php echo e(trans('trans.Enter your e-mail address below to reset your password.')); ?>  </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php echo e(trans('trans.email')); ?>" name="email" />
  <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                     </div>
                <div class="form-actions">
                    <button  type="button" id="back-btn" class="btn green btn-outline" style="background-color: #42d0d0;color: #fff"><?php echo e(trans('trans.Back')); ?></button>
                    <button type="submit" class="btn btn-success uppercase pull-right" style="background-color: #42d0d0"><?php echo e(trans('trans.Submit')); ?></button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="index.html" method="post">
                <h3 class="font-green"><?php echo e(trans('trans.Sign Up')); ?></h3>
                <p class="hint"><?php echo e(trans('trans.Enter your personal details below')); ?> : </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname" /> </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> </div>
                 
           
             
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
             
                <div class="form-group margin-top-20 margin-bottom-20">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
       <div class="copyright"> ©️   <?php echo e(date('Y')); ?>  <?php echo e(trans('trans.all rights are save')); ?>   </div>
        <!--[if lt IE 9]>
<script src="<?php echo e(url('/')); ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo e(url('/')); ?>/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo e(url('/')); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo e(url('/')); ?>/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


<?php /**PATH C:\xampp\htdocs\dashboard\menusws\resources\views/auth/login.blade.php ENDPATH**/ ?>