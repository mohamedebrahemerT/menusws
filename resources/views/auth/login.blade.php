<!DOCTYPE html>
 
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{trans('trans.title')}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{url('/')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{url('/')}}/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{url('/')}}/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{url('/')}}/assets/pages/css/login-rtl.min.css" rel="stylesheet" type="text/css" />
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

                <img src="{{ config('global.site_logo') }}" alt=""  style="height: 79px;" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="border: 1px solid gainsboro;">
              @if (session('status'))
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            <!-- BEGIN LOGIN FORM -->
          

                 <form class="login-form" action="{{ route('login') }}" method="post">
                            @csrf
            @csrf
             @if(session('success'))
   <div class="alert alert-success ">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger ">
   {{session('danger')}}

     </div>
   @endif
                <h3 class="form-title font-green" style="color:#40bdbd !important" >{{trans('trans.Sign In')}}</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> {{trans('trans.Enter any username and password.')}} </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{trans('trans.email')}}..</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans('trans.email')}}" name="email" /> 
@if ($errors->has('email'))
                                    <span style="color:red;" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans('trans.Password')}}</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="{{trans('trans.Password')}}" name="password" />

  @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block; color: red;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                     </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase"  style="background-color: #42d0d0">{{trans('trans.Login')}}</button>
                    
                        <a style="color:#33509e !important" href="#" id="forget-password" class="forget-password">{{trans('trans.Forgot Password?')}}</a>


                    
                </div>
 
                
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">{{trans('trans.Create an account')}}</a>
                    </p>
                </div>
            </form>



               
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            
            <form class="forget-form" action="{{ route('password.email') }}" method="post"> 

                  @csrf
                <h3 class="font-green" style="color:#33509e !important">{{trans('trans.Forget Password ?')}}</h3>
                <p>{{trans('trans.Enter your e-mail address below to reset your password.')}}  </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans('trans.email')}}" name="email" />
  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                     </div>
                <div class="form-actions">
                    <button  type="button" id="back-btn" class="btn green btn-outline" style="background-color: #42d0d0;color: #fff">{{trans('trans.Back')}}</button>
                    <button type="submit" class="btn btn-success uppercase pull-right" style="background-color: #42d0d0">{{trans('trans.Submit')}}</button>
                </div>
            </form>
            
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form  id="registerform" class="register-form" action="{{ route('newrestaurant.store') }}"  method="post" autocomplete="off">
           
                            @csrf
<h3 class="col-12 mb-0">{{ __('Register your restaurant') }}</h3>
                            <h6 class="heading-small text-muted mb-4">{{ __('Restaurant information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Restaurant Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Restaurant Name here') }} ..." value="{{ isset($_GET["name"])?$_GET['name']:""}}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">{{ __('Owner information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name_owner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name_owner">{{ __('Owner Name') }}</label>
                                    <input type="text" name="name_owner" id="name_owner" class="form-control form-control-alternative{{ $errors->has('name_owner') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner Name here') }} ..." value="{{ isset($_GET["name"])?$_GET['name']:""}}" required autofocus>

                                    @if ($errors->has('name_owner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_owner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email_owner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email_owner">{{ __('Owner Email') }}</label>
                                    <input type="email" name="email_owner" id="email_owner" class="form-control form-control-alternative{{ $errors->has('email_owner') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner Email here') }} ..." value="{{ isset($_GET["email"])?$_GET['email']:""}}" required autofocus>

                                    @if ($errors->has('email_owner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email_owner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone_owner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="phone_owner">{{ __('Owner Phone') }}</label>
                                    <input type="text" name="phone_owner" id="phone_owner" class="form-control form-control-alternative{{ $errors->has('phone_owner') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner Phone here') }} ..." value="{{ isset($_GET["phone"])?$_GET['phone']:""}}" required autofocus>

                                    @if ($errors->has('phone_owner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_owner') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    @if (strlen(config('settings.recaptcha_site_key'))>2)
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif

                                        {!! htmlFormButton(__('Save'), ['id'=>'thesubmitbtn','class' => 'btn btn-success mt-4']) !!}
                                    @else
                                     <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
                                     
                                        <button type="submit" id="thesubmitbtn" class="btn btn-success mt-4">{{__('Save')}}</button>
                                    @endif
 

                                </div>
                            </div>

                        </form>
            <!-- END REGISTRATION FORM -->
        </div>
       <div class="copyright"> ©️   {{date('Y')}}  {{trans('trans.all rights are save')}}   </div>
        <!--[if lt IE 9]>
<script src="{{url('/')}}/assets/global/plugins/respond.min.js"></script>
<script src="{{url('/')}}/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('/')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="{{url('/')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{url('/')}}/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


