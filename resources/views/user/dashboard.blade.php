<main id="as-main-dashboard" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand uk-position-relative">
        <header class="uk-heading uk-text-center uk-margin-small-bottom uk-hidden@l">
            <h1 class="uk-heading-line">Dashboard</h1>
        </header>

        <section id="as-dashboard-top" class="uk-grid-medium uk-flex-between@l uk-grid" uk-grid="">
            <div class="uk-width-3-4@l uk-width-1-2@xl uk-first-column">
                <div class="uk-cube-top-left">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center uk-text-left@l">
                        <div class="uk-wow">
                            <ins class="uk-wow-large">
                                1%
                            </ins>
                            <div>
                                <div class="uk-wow-text">
                                    Earn
                                    <br>
                                    Up To
                                </div>
                            </div>
                        </div>

                        <div id="as-dashboard-top_return" class="uk-margin">
                            <ul class="uk-list uk-list-bullet">
                                <li>Start from $25</li>
                                <li>Principal available</li>
                                <li>Fast withdrawals</li>
                            </ul>
                        </div>
                        <div class="uk-margin">
                            <div class="as-label-secondary as-label-secondary-small uk-animation-fade uk-animation-fast">
                                Principal return at end!
                            </div>
                            <a href="?a=deposit" class="uk-button uk-button-primary uk-button-large">
                                Deposit Now
                                <img src="{{asset('')}}massets/img/icon/finger.svg" width="40" height="40" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <figure class="uk-width-auto@l uk-visible@l">
                <img id="as-dashboard-img" src="{{asset('')}}massets/img/another/dashboard.webp" width="560" height="609" loading="lazy" alt="">
            </figure>

            <div id="as-dashboard-top_right" class="uk-width-2-5@xl uk-grid-margin uk-first-column">
                <div class="dashboard-slider uk-slider uk-slider-container" uk-slider="" role="region" ariaroledescription="carousel">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@l uk-child-width-1-1@xl uk-grid" aria-live="polite" role="presentation" style="transform: translate3d(0px, 0px, 0px);">
                        <li role="tabpanel" aria-label="1 of 1" tabindex="-1" class="uk-active" aria-hidden="false" id="uk-slider-12-item-0">
                            <div class="tg-join-card">
                                <div class="tg-join-card__inner">
                                    <div class="tg-join-card__title">
                                        For update offical information about <b>our company</b>
                                    </div>
                                    <a href="https://t.me/stakeonpro" target="_blank" class="uk-button uk-button-primary uk-button-rounded tg-join-card__link">
                                        <span>Join Telegram</span>
                                        <img src="{{asset('')}}massets/img/another/small-arrow-right-dark.svg" class="uk-margin-less-left" alt="icon" width="9" height="15">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="uk-slider-nav uk-dotnav" role="tablist" hidden="">
                        <li uk-slider-item="0" role="presentation" hidden="" class="uk-active"><a href="" role="tab" aria-controls="uk-slider-12-item-0" aria-label="Slide 1" aria-selected="true"></a></li>
                    </ul>
                </div>
            </div>

        </section>

        <section id="as-dashboard-bottom" class="uk-flex-center uk-margin uk-grid" uk-grid="">

            <div id="as-dashboard-bottom_statistic" class="as-statistic-buttons uk-first-column">


                <div id="as-dashboard-statistic-panel" class="uk-position-relative">

                    <div id="as-dashboard-statistic-exit">
                        <ul class="uk-grid-small uk-child-width-1-2@m js-stats-item js-stats-all uk-grid" uk-grid="">
                            <li class="uk-first-column">
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-1.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Total Staked</div>
                                    <ins class="js-stats-accrued-amount">
                                        $0.00
                                    </ins>
                                </div>
                            </li>
                            <li class="">
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-2.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Total withdrawal</div>
                                    <ins class="js-stats-invested-amount">
                                        $0.00
                                    </ins>
                                </div>
                            </li>
                            <li class="uk-grid-margin uk-first-column">
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-3.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Total Earned</div>
                                    <ins class="js-stats-deposits-amount">
                                        $0.00
                                    </ins>
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <div class="balance-stats-block-icon">
                                    <img src="{{asset('')}}massets/img/another/balance-stats-4.svg">
                                </div>
                                <div class="uk-panel">
                                    <div class="as-exit-name">Active Stake</div>
                                    <ins class="js-stats-withdrawn-amount">
                                        $0.00
                                    </ins>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="as-dashboard-bottom_inputs" class="uk-form-controls-label-figure uk-grid-margin uk-first-column">
                <div class="week-limit-widget">
                    <div class="week-limit-widget__inner">
                        <div class="week-limit-widget__icon-cell">
                            <img src="{{asset('')}}massets/img/icon/account/amount.svg" width="103" height="101" loading="lazy" alt="icon">
                        </div>
                        <div class="week-limit-widget__body-cell">
                            <div class="week-limit-widget__title">
                                Referral
                            </div>
                            <div class="week-limit-widget__amount">
                                Program
                            </div>
                            <div class="week-limit-widget__text">
                                Refer your friend and earn extra income
                            </div>
                        </div>
                    </div>
                </div>


                <div class="uk-margin">
                    <label class="uk-form-label" for="as-form-referral">Your Referral link</label>
                    <div class="uk-form-controls">
                        <figure class="uk-form-controls-figure">
                            <img src="{{asset('')}}massets/img/icon/form/referral.svg" width="60" height="60" loading="lazy" alt="icon">
                        </figure>
                        <input class="uk-input" type="url" value="https://stakeon.pro/?ref=Rameshk" id="as-form-referral" disabled="">
                    </div>
                </div>
            </div>

            <div id="as-dashboard-bottom_token" class="uk-text-center uk-grid-margin">
                <div id="as-sec-few-token-block" class="">
                    <figure class="uk-cube-figure uk-cube-top-right">
                        <div class="uk-card uk-card-body uk-card-secondary uk-card-no-before">
                            <div class="next-plan-card">


                                <div class="next-plan-widget next-plan-card__next-plan-widget">
                                    <div class="next-plan-widget__inner">
                                        <div class="next-plan-widget__title">
                                            Balance
                                        </div>
                                        <div class="next-plan-widget__percent">
                                            $0
                                        </div>
                                        <div class="next-plan-widget__footer">
                                            <div class="plan-upgrade-title next-plan-widget__plan-upgrade-title">
                                                <div class="plan-upgrade-title__inner">
                                                    <a href="?a=withdraw" target="_blank" class="uk-button uk-button-primary uk-button-rounded tg-join-card__link">
                                                        <span>Withdraw</span>
                                                        <img src="{{asset('')}}massets/img/another/small-arrow-right-dark.svg" class="uk-margin-less-left" alt="icon" width="9" height="15">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </figure>
                </div>
            </div>

        </section>
        <br> <br>
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
                <a href="/logout">
                    <img src="{{asset('')}}massets/img/icon/sign-in.svg" width="21" height="21" loading="lazy" alt="icon" uk-svg>
                    Log out
                </a>
            </li>

        </ul>
    </div>
</aside>



</body>

</html>