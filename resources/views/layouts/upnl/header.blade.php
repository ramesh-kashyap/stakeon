

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <title>{{siteName()}}</title>
=======
    <title>StakeOn</title>
>>>>>>> 1abec5b (ruutu)
=======
    <title>{{siteName()}}</title>
>>>>>>> 58591ea (new one)
=======
    <title>{{siteName()}}</title>
=======
    <title>StakeOn</title>
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
	
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}massets/css/framework.css">
    <link rel="stylesheet" href="{{asset('')}}massets/css/dashboard.css">
	<link rel="stylesheet" href="{{asset('')}}massets/css/custom.css">
    <script src="{{asset('')}}massets/js/uikit.min.js"></script>
    <script src="{{asset('')}}massets/js/jquery.min.js"></script>
</head>
<nav id="asMenu" class="uk-visible@s">
     <!-- User info (Image and Username) -->
     <div class="profile-container">
        <img src="{{asset('')}}massets\img\another\team-4.jpg" width="50" height="50" class="uk-border-circle" alt="User Image">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 58591ea (new one)
=======
>>>>>>> da964d8 (ruutu)
        <div style=" margin-top:3px;"class="username">{{ Auth::user()->username }}</div>
        <div style=" margin-top:3px;" class="username">{{ Auth::user()->name }}</div>

        
       </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
        <div class="username">{{ Auth::user()->username }}</div>
    </div>
>>>>>>> 1abec5b (ruutu)
=======
>>>>>>> 58591ea (new one)
=======
=======
        <div class="username">{{ Auth::user()->username }}</div>
    </div>
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
    <ul class="uk-iconnav uk-iconnav-vertical uk-animation-fade uk-animation-fast">
        
        <li class="">
            <a href="{{ route('user.dashboard') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/dashboard.svg" width="31" height="30" loading="lazy" alt="" uk-svg>
                </span>
                Dashboard
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.invest') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                New Deposit
            </a>
        </li>
       
        <li class="">
            <a href="{{ route('user.Withdraw') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
                </span>
                Withdrawals
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.AddFund') }}">
                <span class="uk-background-icon">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
=======
                    <img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
>>>>>>> 1abec5b (ruutu)
=======
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
>>>>>>> 58591ea (new one)
=======
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
=======
                    <img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
                </span>
                Add Fund
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.Withdraw-History') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                 History
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.referral-team') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                 Refreal Team
            </a>
        </li>
        
     
        <li class="">
            <a href="{{ route('user.profile') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/account-menu-support.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                Settings
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.ChangePass') }}">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/account-menu-history.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                Security
            </a>
        </li>
    </ul>
</nav>
    <header id="asNavbar" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <nav class="uk-navbar-container" uk-navbar="offset: 10">

            <div class="uk-navbar-left uk-width-expand">

                <a href="/" class="uk-navbar-item uk-logo">
                    <img src="{{asset('')}}massets/img/logo/logo-white.png" width="233" height="41" loading="lazy" alt="logo">
                </a>

                <aside id="asNavbar-user" class="uk-navbar-item uk-visible@l">
                    <span class="uk-text-muted uk-margin-small-right">/</span>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="uk-text-lead">Welcome, {{Auth::user()->name}}!</span>
=======
                    <span class="uk-text-lead">Welcome, Rameshk!</span>
>>>>>>> 1abec5b (ruutu)
=======
                    <span class="uk-text-lead">Welcome, {{Auth::user()->name}}!</span>
>>>>>>> 58591ea (new one)
=======
                    <span class="uk-text-lead">Welcome, {{Auth::user()->name}}!</span>
=======
                    <span class="uk-text-lead">Welcome, Rameshk!</span>
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
                </aside>

            </div>

            <div class="uk-navbar-right uk-width-auto">

                <ul id="asNavbar-nav-right" class="uk-navbar-nav uk-visible@l">
                    <li id="asNavbar-time" class="uk-visible@xl">
                        <div class="uk-text-emphasis uk-text-nowrap">
                            <img class="uk-margin-less-right" src="{{asset('')}}massets/img/icon/account/time.svg" width="27" height="29" loading="lazy" alt="">
                            08-10-2024 06:07
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">
                            Log out
                            <img src="{{asset('')}}massets/img/icon/sign-in.svg" width="21" height="21" alt="icon" uk-svg>
                        </a>
                    </li>
                </ul>

                <a href="#asOffcanvasRight"
                   class="uk-navbar-toggle uk-preserve uk-hidden@xl" uk-navbar-toggle-icon uk-toggle></a>

            </div>
        </nav>
    </div>
</header>
<style>
        .profile-container {
            text-align: center; /* Centers the image and text */
            margin-bottom: 20px; /* Adds space below the profile section */
        }
        .profile-container img {
            border-radius: 50%; /* Makes the image circular */
            width: 100px; /* Sets default image size */
            height: 100px; /* Sets default image size */
            object-fit: cover; /* Ensures image stays within the circle */
        }
        .profile-container .username {
            margin-top: 20px; /* Adds some space between the image and username */
            font-size: 1.2em;
            font-weight: bold;
        }
        
        /* Responsive Design: Adjust image and text size on smaller screens */
        @media screen and (max-width: 768px) {
            .profile-container img {
                width: 80px;  /* Smaller image on tablets and small screens */
                height: 80px;
            }
            .profile-container .username {
                font-size: 1em;  /* Smaller font for username */
            }
        }

        @media screen and (max-width: 480px) {
            .profile-container img {
                width: 60px;  /* Even smaller image on mobile devices */
                height: 60px;
            }
            .profile-container .username {
                font-size: 0.9em;  /* Smaller font for mobile screens */
            }
        }
    </style>
