<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 58591ea (new one)
=======
>>>>>>> da964d8 (ruutu)
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{siteName()}}</title>
    <link rel="stylesheet" href="{{asset('')}}assets/css/style-f5732a00c247.css">

    <script src="{{asset('')}}assets/js/modernizr-f5732a00c247.js"></script>
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
            opacity: 1
        }

        .s1358ab99f8858f3e306.ready {
            opacity: 0;
            top: -100%;
            top: -100vh;
            transition: opacity .15s .2s linear, top 0s .7s
        }

        .s1358ab99f8858f3e306.ready .s9f6dad57bc874381e76 {
            opacity: 0;
            transition: opacity .2s linear
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
            animation: loader 1.2s infinite ease-in-out
        }

        .s9f6dad57bc874381e76 span {
            position: absolute;
            display: block;
            width: 40px;
            height: 40px;
            background-color: #f7ef9e;
            -webkit-animation: loaderBlock 1.2s infinite ease-in-out both;
            animation: loaderBlock 1.2s infinite ease-in-out both
        }

        .s9f6dad57bc874381e76 span:nth-child(1) {
            top: 0;
            left: 0
        }

        .s9f6dad57bc874381e76 span:nth-child(2) {
            top: 0;
            right: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both
        }

        .s9f6dad57bc874381e76 span:nth-child(3) {
            bottom: 0;
            left: 0;
            -webkit-animation: loaderBlockInverse 1.2s infinite ease-in-out both;
            animation: loaderBlockInverse 1.2s infinite ease-in-out both
        }

        .s9f6dad57bc874381e76 span:nth-child(4) {
            bottom: 0;
            right: 0
        }

        @keyframes loader {

            0%,
            10%,
            100% {
                width: 80px;
                height: 80px
            }

            65% {
                width: 150px;
                height: 150px
            }
        }

        @keyframes loaderBlock {

            0%,
            30% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            55% {
                background-color: #fffffc
            }

            100% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg)
            }
        }

        @keyframes loaderBlockInverse {

            0%,
            20% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            55% {
                background-color: #fffffc
            }

            100% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg)
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
        max-width: 90px; /* Set a max width to prevent it from getting too large */
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
    <link rel="icon" href="{{asset('')}}assets/img/favicon.png">
</head>

<body class="body" style="overflow-x: hidden !important;">
    <div class="s1358ab99f8858f3e306" id="preloader">
        <div class="s9f6dad57bc874381e76">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="s89ed8b319c0944ab115" id="js-outer">
        <div class="page sea142cc0eaf20a4d3d8 page-home">
            <div class="outer__body">
                <div class="s7f05ded2218950bf8f9">
                    <div class="s2eaa6c5f22e2bee70bc s0bab181553a4349a474" id="js-control-panel">
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
                                                        data-ajax="">
                                                        About
                                                    </a>
                                                    <a href="{{route('team')}}" class="s853cd858d50683c0e00 js-link"
                                                        data-ajax="">
                                                        Investors
                                                    </a>
                                                    <a href="{{route('tutorial')}}" class="s853cd858d50683c0e00 js-link"
                                                        data-ajax="">
                                                        Partners
                                                    </a>
                                                    <a href="{{route('term-candition')}}"
                                                        class="s853cd858d50683c0e00 js-link" data-ajax="">
                                                        Rules
                                                    </a>
                                                    <a href="{{route('faq')}}" class="s853cd858d50683c0e00 js-link"
                                                        data-ajax="">
                                                        FAQ
                                                    </a>
                                                    <a href="{{route('contact-us')}}"
                                                        class="s853cd858d50683c0e00 js-link" data-ajax="">
                                                        Contacts
                                                    </a>
                                                    <a href="{{route('login')}}"
                                                        class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax="">
                                                        Log in
                                                    </a>
                                                    <a href="{{route('register')}}"
                                                        class="s853cd858d50683c0e00 s3a629c67ad4fb191b43" data-ajax="">
                                                        Sign up
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="s858a46b8e313846c9a2">
                                            <div class="control-btns-group s8182028d7906313f23c">

                                                <a href="{{route('login')}}"
                                                    class="s33127ef4acbf82b3964 s74f63b5ee420d3b520f s6702e95f7365a368406"
                                                    data-ajax="">
                                                    Log in
                                                </a>
                                                <a href="{{route('register')}}"
                                                    class="s33127ef4acbf82b3964 sbeff0940880ae426f28 s6702e95f7365a368406"
                                                    data-ajax="">
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da964d8 (ruutu)
=======
<div class="header-top">
					<div class="container">
						<div class="row d-flex align-items-center">
							<div class="col-lg-3 col-md-5 col-7"><a class="header-logo" href=""><img src="{{asset('')}}assets/img//logo-white.png" height="38" alt="logo"></a></div>
							<div class="col-lg-9 col-md-7 col-5">
								<div class="header-nav">
									<div class="header-menu d-none d-lg-flex flex-column flex-lg-row">
										<a class="header-menu__item border-0" href="{{route('Index')}}">
											<span>
												<i style="font-style: normal;">Home
												</i>
											</span>main
											<div class="header-menu__icon">
												<svg>
													<use xlink:href="{{asset('')}}assets/img//sprite.svg#arrow"></use>
												</svg>
											</div>
										</a>
										<a class="header-menu__item" href="{{route('faq')}}">
											<span>
												<i style="font-style: normal;">FAQ
												</i>
											</span>answers
											<div class="header-menu__icon">
												<svg>
													<use xlink:href="{{asset('')}}assets/img//sprite.svg#arrow"></use>
												</svg>
											</div>
										</a>
										
										<a class="header-menu__item" href="{{route('term-candition')}}">
											<span>
												<i style="font-style: normal;">Terms
												</i>
											</span>rules
											<div class="header-menu__icon">
												<svg>
													<use xlink:href="{{asset('')}}assets/img//sprite.svg#arrow"></use>
												</svg>
											</div>
										</a>
										<a class="header-menu__item mr-4" href="{{route('contact-us')}}">
											<span>
												<i style="font-style: normal;">Contacts
												</i>
											</span>Support
											<div class="header-menu__icon">
												<svg>
													<use xlink:href="{{asset('')}}assets/img//sprite.svg#arrow"></use>
												</svg>
											</div>
										</a>
									</div>
									<div class="header-btns">
										<a class="main-btn main-btn_line" href="{{route('login')}}">
											<img src="{{asset('')}}assets/img//btn-login.svg" width="18" alt="btn-login">login
										</a>
										<a class="main-btn main-btn_sign main-btn_orange" href="{{route('register')}}">
											<img src="{{asset('')}}assets/img//btn-sign.svg" alt="btn-sign">register
										</a>
									</div>
									<div class="header-burger"> <span></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
<<<<<<< HEAD
>>>>>>> 1abec5b (ruutu)
=======
>>>>>>> 58591ea (new one)
=======
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
