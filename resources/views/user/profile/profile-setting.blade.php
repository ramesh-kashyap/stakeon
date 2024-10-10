

<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">



        <script language="javascript">
            function IsNumeric(sText) {
                var ValidChars = "0123456789.";
                var IsNumber = true;
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

            function checkform() {
                if (document.editform.fullname.value == '') {
                    alert("Please type your full name!");
                    document.editform.fullname.focus();
                    return false;
                }


                if (document.editform.password.value != document.editform.password2.value) {
                    alert("Please check your password!");
                    document.editform.fullname.focus();
                    return false;
                }





                for (i in document.editform.elements) {
                    f = document.editform.elements[i];
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
                            alert('Invalid account format. Expected ' + notice);
                            f.focus();
                            return false;
                        }
                    }
                }

                return true;
            }
        </script>








        <form action="" method="post" onsubmit="return checkform()" name="editform"><input type="hidden" name="form_id" value="17283246054070"><input type="hidden" name="form_token" value="f6dc633b8314629a5f9324db92432ce9">
            <input type="hidden" name="a" value="edit_account">
            <input type="hidden" name="action" value="edit_account">
            <input type="hidden" name="say" value="">
            <div class="uk-grid uk-grid-stack" uk-grid="">
                <section class="uk-width-1-2@xl uk-first-column">

                    <div class="uk-child-width-1-2@l uk-child-width-1-1@xl uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-first-column">

                            <div id="as-settings-personal" class="uk-cube-bottom-left uk-cube-figure">
                                <div class="uk-card uk-card-default uk-card-body">
                                    <header class="uk-heading uk-text-center">
                                        <h3 class="uk-margin-small-bottom">Personal Information</h3>
                                    </header>

                                    <div class="uk-margin-small-top uk-margin-bottom">
                                        <label class="uk-form-label" for="as-form-user">Your Login</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/user.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="text" id="as-form-user" value="Rameshk" disabled="">
                                        </div>
                                    </div>
                                    <div class="uk-margin-small-top uk-margin-bottom">
                                        <label class="uk-form-label" for="as-form-user">Fullname</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/user.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="text" name="fullname" value="Ramesh">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="as-form-email">Your Email address</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/email.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="email" name="email" value="rameshkashyap8801@gmail.com">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="as-form-Date">Date of registration</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/date.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input class="uk-input uk-text-emphasis" type="text" id="as-form-Date" value="Oct-7-2024 07:31:10 AM" disabled="">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="as-form-password-New">New Password</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/password.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input type="password" name="password" value="" class="uk-input form-control">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="as-form-password-Define">Define Password</label>
                                        <div class="uk-form-controls">
                                            <figure class="uk-form-controls-figure">
                                                <img src="{{asset('')}}massets/img/icon/form/password.svg" width="60" height="60" loading="lazy" alt="icon">
                                            </figure>
                                            <input type="password" name="password2" value="" class="uk-input form-control">
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="uk-width-1-2@xl uk-first-column uk-grid-margin">
                    <div class="uk-card uk-card-default uk-card-body uk-margin uk-form-controls-label-figure" id="as-settings-wallets">
                        <header class="uk-heading uk-text-center">
                            <h1 class="uk-heading-line">Your wallets</h1>
                        </header>

                        <ul class="uk-child-width-1-2@l uk-flex-bottom uk-grid-medium uk-grid" uk-grid="">
                            <li class="uk-first-column">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    ePayCore wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/51.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[51]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Bitcoin wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/48.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[48]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-first-column uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Litecoin wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/68.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[68]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Dogecoin wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/79.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[79]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-first-column uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Ethereum wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/69.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[69]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Bitcoin Cash wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/77.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[77]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-first-column uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Dash wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/71.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[71]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Tron wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/85.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[85]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-first-column uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    BNB wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/94.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[94]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Tether TRC20 wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/92.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[92]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-first-column uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Tether BEP20 wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/102.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[102]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>
                            <li class="uk-grid-margin">
                                <label class="uk-form-label" for="as-form-wallet-rpcbtc">
                                    Ethereum Classic wallet
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/coin/70.svg" width="50" height="50" loading="lazy" alt="icon">
                                    </figure>
                                    <input type="text" name="pay_account[70]" value="" class="uk-input uk-text-emphasis form-control">
                                </div>
                            </li>

                        </ul>
                        <br>
                        <button class="uk-button uk-button-primary uk-button-large" type="submit">
                            Save Changes
                            <img class="uk-visible@s" src="{{asset('')}}massets/img/icon/form/save-changes.svg" width="36" height="36" loading="lazy" alt="icon">
                        </button>
                    </div>

                </section>
            </div>
        </form>

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