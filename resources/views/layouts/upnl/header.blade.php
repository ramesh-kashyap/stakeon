

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>StakeOn</title>
	
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
    <ul class="uk-iconnav uk-iconnav-vertical uk-animation-fade uk-animation-fast">
        <li class="">
            <a href="?a=account">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/dashboard.svg" width="31" height="30" loading="lazy" alt="" uk-svg>
                </span>
                Dashboard
            </a>
        </li>
        <li class="">
            <a href="?a=deposit">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                New Deposit
            </a>
        </li>
        <li class="">
            <a href="?a=withdraw">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
                </span>
                Withdrawals
            </a>
        </li>
        <li class="">
            <a href="?a=history&type=earning">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                Transactions
            </a>
        </li>
        <li class="">
            <a href="?a=referals">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/partners.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                Partners
            </a>
        </li>
        <li class="">
            <a href="?a=edit_account">
                <span class="uk-background-icon">
                    <img src="{{asset('')}}massets/img/icon/account/account-menu-support.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                </span>
                Settings
            </a>
        </li>
        <li class="">
            <a href="?a=security">
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
                    <span class="uk-text-lead">Welcome, Rameshk!</span>
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
                        <a href="{{route('logout')}}">
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

