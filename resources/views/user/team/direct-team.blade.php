
<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <div class="uk-grid uk-grid-stack" uk-grid="">

            <div id="as-partners-statistic" class="uk-width-2-3@xl uk-first-column">
                <div class="uk-card uk-card-default uk-card-body">
                    <header class="uk-heading uk-text-center">
                        <h1 class="uk-heading-line">Partner Statistics</h1>
                    </header>

                    <div class="uk-grid-medium uk-margin uk-grid" uk-grid="">

                        <div class="uk-width-1-3@l uk-first-column">
                            <figure class="as-total-amount">
                                <figure>
                                    <img src="{{asset('')}}massets/img/coin/amount.svg" width="103" height="101" loading="lazy" alt="icon">
                                </figure>
                                <figcaption>
                                    <div class="js-stats-item js-stats-inserts" style="display: block;">
                                        <div class="uk-text-meta uk-margin-less-bottom">Total Referrals</div>
                                        <ins class="uk-text-background">
                                            0
                                        </ins>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="uk-width-1-3@l">
                            <figure class="as-total-amount">
                                <figure>
                                    <img src="{{asset('')}}massets/img/coin/amount.svg" width="103" height="101" loading="lazy" alt="icon">
                                </figure>
                                <figcaption>
                                    <div class="js-stats-item js-stats-inserts" style="display: block;">
                                        <div class="uk-text-meta uk-margin-less-bottom">Active Referrals</div>
                                        <ins class="uk-text-background">
                                            0
                                        </ins>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="uk-width-1-3@l">
                            <figure class="as-total-amount">
                                <figure>
                                    <img src="{{asset('')}}massets/img/coin/amount.svg" width="103" height="101" loading="lazy" alt="icon">
                                </figure>
                                <figcaption>
                                    <div class="js-stats-item js-stats-inserts" style="display: block;">
                                        <div class="uk-text-meta uk-margin-less-bottom">Total Earnings</div>
                                        <ins class="uk-text-background">
                                            $0.00
                                        </ins>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>


                </div>
            </div>

            <section id="as-partners-program" class="uk-width-1-3@xl uk-form-controls-label-figure uk-grid-margin uk-first-column">
                <div class="more-limit-banner uk-margin-medium-bottom">
                    <div class="more-limit-banner__inner">
                        <img src="{{asset('')}}massets/img/another/more-limit-banner-icon.png" class="more-limit-banner__icon" width="196" height="165">
                        <div class="more-limit-banner__content">
                            Earn up to <b>3%</b> - for 1st level <b> referral</b>
                        </div>
                    </div>
                </div>
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default uk-card-body">

                        <div class="referral-right-container">
                            <div class="referral-right-container__inner">
                                <div class="referral-right-container__first">
                                    <header class="uk-heading uk-text-center">
                                        <h2 class="uk-h3 uk-margin-small-bottom">Affiliate program</h2>
                                    </header>

                                    <p class="uk-text-center uk-margin-small-top">
                                        Start promote using your referral link and banners tool to get downline and earn passive income
                                    </p>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="as-form-referral">Website referral link</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/referral.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="url" value="https://stakeon.pro/?ref=Rameshk" id="as-form-referral" disabled="">
                                        </div>
                                    </div>

                                    <div class="uk-margin-bottom">
                                        <label class="uk-form-label" for="as-form-inviter">Your Upline</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/upline.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" value="" type="text" id="as-form-inviter" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="referral-right-container__second">
                                    <div class="banners-banner referral-right-container__banners-banner">
                                        <div class="banners-banner__inner">
                                            <img src="{{asset('')}}massets/img/another/banners-banner-icon.svg" class="banners-banner__icon" width="90" height="90">
                                            <a href="?a=referallinks" class="banners-banner__link">
                                                Show banners
                                            </a>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</main>

<aside id="asOffcanvasRight" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <div class="uk-offcanvas-header">
            Close Menu
            <button class="uk-offcanvas-close" type="button" uk-close></button>
        </div>

        <ul class="uk-nav uk-nav-default uk-hidden@s">
            <li>
                <a href="?a=account">
                    <img src="{{asset('')}}massets/img/icon/account/dashboard.svg" width="31" height="30" loading="lazy" alt="" uk-svg>
                    Dashboard
                </a>
            </li>
            <li class="">
            <a href="?a=deposit">
                <img src="{{asset('')}}massets/img/icon/account/new-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
                New Deposit
            </a>
			</li>
			<li class="">
				<a href="?a=withdraw">
					<img src="{{asset('')}}massets/img/icon/account/withdrawal.svg" width="28" height="28" loading="lazy" alt="" uk-svg>
					Withdrawals
				</a>
			</li>
			<li class="">
				<a href="?a=history&type=earning">
					<img src="{{asset('')}}massets/img/icon/account/my-deposit.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Transactions
				</a>
			</li>
			<li class="">
				<a href="?a=referals">
					<img src="{{asset('')}}massets/img/icon/account/partners.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Partners
				</a>
			</li>
			<li class="">
				<a href="?a=edit_account">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-support.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Settings
				</a>
			</li>
			<li class="">
				<a href="?a=security">
					<img src="{{asset('')}}massets/img/icon/account/account-menu-history.svg" width="36" height="31" loading="lazy" alt="" uk-svg>
					Security
				</a>
			</li>

            <li class="uk-nav-divider"></li>
        </ul>

        <ul class="uk-nav uk-nav-default">
            
                            <li>
                    <a href="https://t.me/stakeonpro" target="_blank">
                        <img src="{{asset('')}}massets/img/another/telegram-yellow-icon.svg" width="29" height="29" loading="lazy" alt="" uk-svg>
                        Telegram
                    </a>
                </li>
            
            <li class="uk-nav-divider"></li>

            <li>
                <a href="?a=logout">
                    <img src="{{asset('')}}massets/img/icon/sign-in.svg" width="21" height="21" loading="lazy" alt="icon" uk-svg>
                    Log out
                </a>
            </li>

        </ul>
    </div>
</aside>
    
    

</body>
</html>