<<<<<<< HEAD
=======

<!DOCTYPE html>
>>>>>>> 1abec5b (ruutu)
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<title>StakeOn</title>
		<base href="https://stakeon.pro/" src="https://stakeon.pro/" />
		<link rel="icon" type="image/png" sizes="32x32"
			href="{{asset('')}}assets/img/favicon-32x32.png">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<link rel="stylesheet" href="{{asset('')}}assets/css/vendor.css">
		<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<header class="header header_page">
            @include('layouts.mainsite.header')

<<<<<<< HEAD
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{siteName()}}</title>

    <script src="{{asset('')}}assets//js/modernizr-f5732a00c247.js"></script>
    <style>
        .s1358ab99f8858f3e306 {
            background: #050d1e;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1501;
            width: 100%;
            height: 100%;
            height: 100vh;
            opacity: 1;
        }
=======
				<div class="container">
					<div class="row">
						<div class="col-lg-2 d-lg-none">
							<div class="header-side">
								<div class="nicescroll-box">
									<div class="wrap">
										<div class="header-menu">
											<a class="header-menu__item" href="?a=home">
												<span>
													<i style="font-style: normal;">Home
													</i>
												</span>main
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											<a class="header-menu__item" href="?a=faq">
												<span>
													<i style="font-style: normal;">FAQ
													</i>
												</span>answers
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											
											<a class="header-menu__item" href="?a=rules">
												<span>
													<i style="font-style: normal;">Terms
													</i>
												</span>rules
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											<a class="header-menu__item" href="?a=support">
												<span>
													<i style="font-style: normal;">Contacts
													</i>
												</span>Support
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
										</div>
										<div class="header-btns mt-4">
											<a class="main-btn main-btn_line" href="?a=login">
												<img src="{{asset('')}}assets/img/btn-login.svg" alt="btn-login" />login
											</a>
											<a class="main-btn main-btn_orange main-btn_sign" href="?a=signup">
												<img src="{{asset('')}}assets/img/btn-sign.svg" alt="btn-sign" />register
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
>>>>>>> 1abec5b (ruutu)

        .s1358ab99f8858f3e306.ready {
            opacity: 0;
            top: -100%;
            top: -100vh;
            transition: opacity 0.15s 0.2s linear, top 0s 0.7s;
        }

<<<<<<< HEAD
        .s1358ab99f8858f3e306.ready .s9f6dad57bc874381e76 {
            opacity: 0;
            transition: opacity 0.2s linear;
        }

        .s9f6dad57bc874381e76 {
            position: absolute;
            width: 80px;
            height: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            -webkit-transform: rotate(45deg) translate3d(0, 0, 0);
            transform: rotate(45deg) translate3d(0, 0, 0);
            -webkit-animation: loader 1.2s infinite ease-in-out;
            animation: loader 1.2s infinite ease-in-out;
        }

        .s9f6dad57bc874381e76 span {
            position: absolute;
            display: block;
            width: 40px;
            height: 40px;
            background-color: #f7ef9e;
            -webkit-animation: loaderBlock 1.2s infinite ease-in-out both;
            animation: loaderBlock 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(1) {
            top: 0;
            left: 0;
        }

        .s9f6dad57bc874381e76 span:nth-child(2) {
            top: 0;
            right: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(3) {
            bottom: 0;
            left: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both;
        }

        .s9f6dad57bc874381e76 span:nth-child(4) {
            bottom: 0;
            right: 0;
        }

        @keyframes loader {

            0%,
            10%,
            100% {
                width: 80px;
                height: 80px;
            }

            65% {
                width: 150px;
                height: 150px;
            }
        }

        @keyframes loaderBlock {

            0%,
            30% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            55% {
                background-color: #fffffc;
            }

            100% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }

        @keyframes loaderBlockInverse {

            0%,
            20% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            55% {
                background-color: #fffffc;
            }

            100% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }
        }

        .responsive-logo {
    margin-top: 20px;
    width: 110px; /* Fixed width for larger screens */
    max-width: 100%; /* Ensures the logo will not exceed the width of its container */
    height: auto; /* Maintains the aspect ratio */
    display: block; /* Removes any inline spacing */
}

/* Responsive Design for mobile */
@media (max-width: 768px) {
    .responsive-logo {
        width: 70%; /* Adjust width for mobile view */
        max-width: 110px; /* Set a max width to prevent it from getting too large */
        margin-top:-15px; /* Set a max width for smaller devices */

    }
}

/* Additional for very small screens */
@media (max-width: 480px) {
    .responsive-logo {
        width: 60%; /* Further reduce the logo size */
        max-width: 70px;
        margin-top:-15px; /* Set a max width for smaller devices */
    }
}

    </style>
    <link rel="icon" href="{{asset('')}}assets//img/favicon.png" />
</head>

<body class="body" style="overflow-x: hidden !important">
    <div class="s1358ab99f8858f3e306" id="preloader">
        <div class="s9f6dad57bc874381e76">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="s89ed8b319c0944ab115" id="js-outer">
        <div class="page sf2126f09ef2880e6c49">
            <div class="outer__body">
                <div class="s2eaa6c5f22e2bee70bc" id="js-control-panel">
                    <div class="s4028cc25a74f8af38bf">
                        <div class="s8ee82f6a5e1ab59b645">
                            <div class="s810ab62c54740cd9705">
                                <div class="s26a3f56d59811ed1db0">
                                    <div class="s34b1f5c5ed748488792">
                                    <a href="{{ route('Index') }}" class=" s53d13bdb71d5e83ed29 ">
                                                <img style="margin-top:6px;" src="{{ asset('assets/fonts/G B C LOGO.png') }}" alt="Logo"
                                                    class="responsive-logo">
                                            </a>
                                    </div>
                                    <div class="sb395a6d4de39364d003">
                                        <button class="s47286ec85d779e402ab control-panel__burger js-main-burger">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="se5e25fa1fdaceeef360">
                                    <div class="sc82330a9d2e5c2fc209">
                                    <a href="{{ route('Index') }}" class=" s53d13bdb71d5e83ed29 ">
                                                <img src="{{ asset('assets/fonts/G B C LOGO.png') }}" alt="Logo"
                                                    class="responsive-logo">
                                            </a>
                                    </div>
                                    <div class="s228283ec544c464aade">
                                        <div class="s4c8118ff52454be8a1a s6669431eca75bae510d">
                                            <div class="s810fbcee983b892f2b8">
                                                <a href="{{route('about-us')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    About
                                                </a>
                                                <a href="{{route('team')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Investors
                                                </a>
                                                <a href="{{route('tutorial')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Partners
                                                </a>
                                                <a href="{{route('term-candition')}}"
                                                    class="s853cd858d50683c0e00 js-link" data-ajax>
                                                    Rules
                                                </a>
                                                <a href="{{route('faq')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    FAQ
                                                </a>
                                                <a href="{{route('contact-us')}}" class="s853cd858d50683c0e00 js-link"
                                                    data-ajax>
                                                    Contacts
                                                </a>
                                                <a href="{{route('login')}}"
                                                    class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax>
                                                    Log in
                                                </a>
                                                <a href="{{route('register')}}"
                                                    class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax>
                                                    Sign up
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s858a46b8e313846c9a2">
                                        <div class="control-btns-group s8182028d7906313f23c">
                                            
                                            <a href="{{route('login')}}"
                                                class="s33127ef4acbf82b3964 s74f63b5ee420d3b520f s6702e95f7365a368406"
                                                data-ajax>
                                                Log in
                                            </a>
                                            <a href="{{route('register')}}"
                                                class="s33127ef4acbf82b3964 sbeff0940880ae426f28 s6702e95f7365a368406"
                                                data-ajax>
                                                Sign up
                                            </a>
                                        </div>
                                    </div>
                                    <div class="s5908246332eb037a586">
                                        <button
                                            class="s86ddb74699f506d1ea0 control-btns-group__close-btn js-main-burger"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sf4f625148df40a9b356">
                    <div class="s8ee82f6a5e1ab59b645">
                        <div class="s4286b16b623e4d35d73">
                            <div class="s8dbaf18de438fbf6694"></div>
                        </div>
                        <div class="s2683b5814bb5ef8310e">
                            <form name="signup_form" method="post" action="{{route('registers')}}"
                                class="log-form sb5728db9063b5d08f0a" autocomplete="off" >
								{{ csrf_field() }}

								@php
        $sponsor = @$_GET['ref'];
    @endphp
                                <div class="log-form__inner">
                                    <div class="s80ad67c7161f67c1dff">
                                        <div class="s39fa6b98e5279296e3a">
                                            <div class="s71134aef7072f13d68c log-form__third-title">
                                                Create <b>an Account</b>
                                            </div>
                                        </div>
                                        <div class="s98fda4ac6c62c0c6fc5">
                                            <div class="sec2c04fd5b8fe7b70da">
                                                or
                                                <a href="{{route('login')}}" data-ajax>Log in</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s2528b43b7267613ead4">
                                        <div class="s8ee82f6a5e1ab59b645">
                                            <div class="s4c32c27a70b9038f904">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                        Username
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="seb0b4ac79a5f85af139"></i>
                                                        </span>
                                                        <input type="text" id="signup_form_login"
                                                            name="sponsor" placeholder="" value="{{ $sponsor ? $sponsor : '' }}" data-response="sponsor_res"required="required"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="s4c32c27a70b9038f904">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                        Name
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                        <i class="seb0b4ac79a5f85af139"></i>
                                                        </span>
                                                        <input type="text" value="" name=name value='' placeholder="Full Name"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="s0037c69eb4b84fb6277">
                                            <label for=""
                                                class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                Email address
                                            </label>
                                            <div class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                <span class="s6f66d945fe4083856ba">
                                                    <i class="s7c8d644d7253d186492"></i>
                                                </span>
                                                <input type="text" id="signup_form_email" name=email value="" placeholder="Your Email"
                                                
                                                    class="s3ed15a1c01ac7e45c1d log-form__form-control form-control" />
                                            </div>
                                        </div>
                                        <div class="s8ee82f6a5e1ab59b645">
                                            <div class="s0d1fe773830c3551060">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                         Password
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="sfec9ff44998cd39428c"></i>
                                                        </span>
                                                        <input type="password" id="signup_form_password_first"
                                                            name=password value="" placeholder="Your Password"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="s0d1fe773830c3551060">
                                                <div class="s0037c69eb4b84fb6277">
                                                    <label for=""
                                                        class="s946795edf26ee7709c9 scdf91f4cb2842256173 log-form__form-label">
                                                        Retype Password
                                                    </label>
                                                    <div
                                                        class="s64ff7ecb96725b6565e s4bdbd13174f2fcb29c4 log-form__form-group">
                                                        <span class="s6f66d945fe4083856ba">
                                                            <i class="sfec9ff44998cd39428c"></i>
                                                        </span>
                                                        <input type="password" id="signup_form_password_second"
                                                           name=password_confirmation value="" placeholder="Confirm Password"
                                                            class="s3ed15a1c01ac7e45c1d log-form__form-control form-control"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check-row se932c4dda862a483513">
                                            <input type="checkbox" id="rules" class="s7452b19a4b531f8c10f" checked
                                                required />
                                            <label for="rules" class="sefdffb247abdbdc2abb">
                                                By clicking Register, you agree to
                                                <a href="{{route('term-candition')}}" data-ajax>
                                                    Terms of Service
                                                </a>
                                            </label>
                                        </div>
                                        <div class="seb5a3f38f058e5c9564">
                                            <button type="submit" id="signup_form_submit" name="signup_form[submit]"
                                                class="s33127ef4acbf82b3964 sbeff0940880ae426f28 sb2f023228505bea984c sc99682b1cb5b0e63cbe btn">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="s1dab33613abadb0cc48 s0643251b7041f81d19b">
                                <div class="se6064b19f8f79ce6a25">
                                    <div class="s33c3761b3091ae8112d sb776cf8ce854af55dc8">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> Group </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="s33c3761b3091ae8112d s0a5597b8746d7600762">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> News </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="s33c3761b3091ae8112d socials-gutter__cell--3">
                                        <a href="#" target="_blank" class="sa9b62efbc946a658b67 s0bfcd081967e1ac882a">
                                            <span class="s06c98fe1938eb74d270">
                                                <span class="s30c7c55921a92c292cf">
                                                    <span class="s2dc3968485132430838">
                                                        <i class="saa3132e9667e1e0db2b s8678425de6e020307ae"></i>
                                                    </span>
                                                </span>
                                                <span class="s481147518fd44c61fea"> Support </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @include('partials.notify')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#js-outer" class="scroll-top-btn js-scroll-top-btn js-scroll-btn">
            <i class="sd34cbdfee3a6bf6a426 scroll-top-btn__sprite"></i>
        </a>
    </div>
    <link rel="stylesheet" href="{{asset('')}}assets//css/style-f5732a00c247.css" />
    <script src="{{asset('')}}assets//js/index-f5732a00c247.js"></script>
    <script src="{{asset('')}}assets//js/ajax-f5732a00c247.js"></script>
</body>
=======



 

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 


>>>>>>> 1abec5b (ruutu)




<section class="sign">
<div class="container">
            <div class="row">
               <div class="col-lg-5 offset-lg-3">
               @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
                  <form method=post  action="{{route('registers')}}" >
@csrf
                     <div class="sign-box">
                        <div class="sign-title">
                           Sign UP
                           <p>Create an account</p>
                        </div>
						
						 

						
                        <div class="contacts-form__inputs">
                        <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=sponsor value="" placeholder="Username">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=name value='' placeholder="Full Name">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
						  
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=email value="" placeholder="Your Email">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=phone value="" placeholder="Your Phone No">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
						
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password value="" placeholder="Your Password">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password_confirmation value="" placeholder="Confirm Password">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
                        </div>
						<div class="sign-sponsor">Invited by: <span>N/A</span></div>
						<label class="sign-check mt-4"><input type="checkbox" name=agree value=1  checked><span>I agree with <a href="?a=rules" target="_blank" style="color:#d0ff96">Terms and Conditions</a></span></label>
                        <button type="submit" class="main-btn main-btn_orange main-btn_m"  style="width:100%">Sign UP</button>
                        <div class="sign-bot">Already have an account?<a href="?a=login"> Sign In</a></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

</section>



<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-12">
							<div class="footer-wallets py-4 py-lg-5">
								<div class="swiper-button-prev">
									<svg>
										<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
									</svg>
								</div>
								<div class="swiper-button-next">
									<svg>
										<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
									</svg>
								</div>
								<div class="swiper">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/btc-white.svg" alt="btc-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/eth-white.svg" alt="eth-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/bch-white.svg" alt="xrp-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/ltc-white.svg" alt="ltc-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/sol-white.svg" alt="dash-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/doge-white.svg" alt="doge-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/trx-white.svg" alt="trx-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/usdt-white.svg" alt="usdt-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/bnb-white.svg" alt="bnb-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/xlm-white.svg" alt="epc-white" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<div class="footer-bg"> <a class="footer-logo" href="/"><img src="{{asset('')}}assets/img/logo-white.png" alt="logo-white" /></a>
								<div class="footer-text">
									<p><strong class="footer-text__warning">Risk Warning:</strong> The performance of most cryptoassets can be highly volatile, with their value dropping as quickly as it can rise. You should be prepared to lose all the money you invest in cryptoassets. The cryptoasset market is largely unregulated.</p>
								</div>
								<div class="footer-copy">Copyright © 2024 StakeOn. All rights reserved</div>
							</div>
						</div>
						<div class="col-lg-9 order-1 oreder-lg-2">
							<div class="footer-bot">
								<div class="row">
									<div class="col-lg-4">
										<div class="footer-title mt-0 mb-4">information</div>
										<div class="footer-menu"> 
											<a href="?a=faq">FAQs</a>
											<a href="?a=rules">Terms</a>
											<a href="?a=support">Support</a>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mt-4 mt-lg-0">
										<div class="footer-text">
											<h3> <img src="{{asset('')}}assets/img/f_ddos.svg" width="42" alt="ddos" />DDOS Protection
											</h3>
											<p>Our website is protected by the most effective and modern
												technologies in the field of countering DDoS attacks of any
												etymology.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="footer-text">
											<h3> <img src="{{asset('')}}assets/img/f_ssl.svg" width="42" alt="ssl" />SSL Protection
											</h3>
											<p>Reliable SSL encryption to preserve a privacy of personal data and
												the process of information exchange on our website.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="row">
											<div class="col-sm-7">
												<div class="footer-contacts mb-4 mb-lg-0"> <a
														href="javascript:void(0)"> <img
															src="{{asset('')}}assets/img/footer-contacts-1.svg" alt="footer-contacts-1" />167-169
														 Great Portland St, London W1W 5PF, United Kingdom</a><a
														href="javascript:void(0)"> <img
															src="{{asset('')}}assets/img/footer-contacts-2.svg" alt="footer-contacts-2" />support@stakeon.pro</a></div>
											</div>
											<div class="col-sm-5">
												<div class="footer-links"> 
													<div class="header-soc__links">
			
														<a href="https://t.me/stakeonews" target="_blank">
															<svg>
																<use xlink:href="{{asset('')}}assets/img/sprite.svg#tg"></use>
															</svg>CHANNEL
														</a>
														<a href="https://t.me/stakeonpro" target="_blank">
															<svg>
																<use xlink:href="{{asset('')}}assets/img/sprite.svg#tg"></use>
															</svg>GROUP
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="{{asset('')}}assets/js/vendor.js"></script>
		<script src="{{asset('')}}assets/js/main.js"></script>
		<script src="{{asset('')}}assets/js/nicescroll.min.js"></script>
		<script>
$(document).ready(function() {
    // Define the minimum and maximum investment amounts
    var minAmount = 25;
    var maxAmount = 500000;

    // Listen for changes in the plan or amount fields
    $('#cal_plan, #cal_amount').on('change keyup', function() {
        calculateProfits();
    });

    function calculateProfits() {
        // Get the selected plan and amount
        var plan = $('#cal_plan').val();
        var amount = parseFloat($('#cal_amount').val());

        // Validate the amount
        if (isNaN(amount) || amount < minAmount || amount > maxAmount) {
            $('#daily_res').text('$0');
            $('#total_res').text('$0');
            return;
        }

        // Define the daily profit percentages for each plan
        var dailyRates = {
            1: 0.005, // 0.5% daily for 30 days
            2: 0.006, // 0.6% daily for 90 days
            3: 0.007, // 0.7% daily for 180 days
            4: 0.01   // 1% daily for 360 days
        };

        // Define the duration of each plan
        var planDurations = {
            1: 30,
            2: 90,
            3: 180,
            4: 360
        };

        // Calculate the daily and total profits
        var dailyProfit = amount * dailyRates[plan];
        var totalProfit = dailyProfit * planDurations[plan];

        // Update the result fields
        $('#daily_res').text('$' + dailyProfit.toFixed(2));
        $('#total_res').text('$' + totalProfit.toFixed(2));
    }
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6666ac609a809f19fb3bf20a/1i00h2mjc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

	</body>
</html>
