<main id="as-main-deposit" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <header class="uk-heading uk-text-center uk-margin-small-bottom">
            <h1 class="uk-heading-line">Create a new Deposit</h1>
        </header>


<<<<<<< HEAD
<<<<<<< HEAD
        <form method=post action="{{ route('user.fundActivation') }}" name="spendform"
            class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card"
            uk-grid="uk-grid">
            @csrf

            <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                        <div style="margin-left:70px;" class="uk-legend">
                            <span class="uk-text-background">Make Deposit</span>
                        </div>
                      
                    

                        <div class="new-deposit-amount-row uk-margin-medium-top">


                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Wallet Type </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=walletType readonly
                                        value="Activation Wallet( {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }})"
                                        class="uk-input form-control" />
                                </div>

                            </div>

                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Select Amount
                                    </span>
                                </label>
                                <div class="uk-form-controls" style="display: flex; align-items: center;">
                                    <figure class="uk-form-controls-figure" style="margin-right:10px;" >
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg"  width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <select name="amount" class="uk-select form-control uniform-input" style="padding: 10px; 
                                        border-radius: 6px; 
                                         font-size: 1rem; 
                                        cursor: pointer; 
                                        width: 100%;
                                        "
                                        >
                                        <option style="width: 40%;" value="100">100 USD</option>
                                        <option style="width: 40%;" value="200">200 USD</option>
                                        <option style="width: 40%;" value="400">400 USD</option>
                                        <option style="width: 40%;" value="800">800 USD</option>
                                        <option style="width: 40%;" value="1600">1600 USD</option>
                                        <option style="width: 40%;" value="3200">3200 USD</option>
                                        <option style="width: 40%;" value="6400">6400 USD</option>
                                        <option style="width: 40%;" value="128000">128000 USD</option>
                                        <option style="width: 40%;" value="256000">256000 USD</option>
                                        <option style="width: 40%;" value="512000">512000 USD</option>
                                        <option style="width: 40%;" value="1024000">1024000 USD</option>
                                        <option style="width: 40%;" value="2048000">2048000 USD</option>
                                        <option style="width: 40%;" value="4056000">4056000 USD</option>

                                    </select>
                                </div>
                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Member Id
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=user_id required class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Transaction Password
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="password" name="transaction_password" required
                                        class="uk-input form-control" />
                                </div>

                            </div>





                            <div class="new-deposit-amount-row__btn-cell">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large">
                                    Create Deposit
                                    <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37"
                                        loading="lazy" alt="icon">
                                </button>
                            </div>
=======









        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
        <form method=post action="{{ route('user.fundActivation') }}" name="spendform" class="uk-form-stacked uk-child-width-1-2@l"
            uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid">
            @csrf

            <fieldset id="as-new-deposit-select" class="uk-fieldset">
                <div class="uk-cube-top-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                        <div class="uk-legend">
                            <mark>1</mark>
                            <span class="uk-text-background">Select a payment system</span>
                        </div>
                        <label class="uk-form-label" for="as-form-amount">
                            Select payment Topup
                        </label>
                        <ul class="uk-grid-small uk-child-width-1-2@xl" uk-grid>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_51" data-fiat="USD"
                                        id="deposit_51">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/51.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">ePayCore</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_48" data-fiat="BTC"
                                        id="deposit_48">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/48.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Bitcoin</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_68" data-fiat="LTC"
                                        id="deposit_68">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/68.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Litecoin</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_69" data-fiat="ETH"
                                        id="deposit_69">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/69.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Ethereum</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_71" data-fiat="DASH"
                                        id="deposit_71">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/71.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Dash</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_79" data-fiat="DOGE"
                                        id="deposit_79">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/79.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Dogecoin</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_85" data-fiat="TRX"
                                        id="deposit_85">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/85.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Tron</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_92"
                                        data-fiat="USDT.TRC20" id="deposit_92">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/92.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Tether TRC20</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_94" data-fiat="BNB"
                                        id="deposit_94">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/94.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">BNB</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_102"
                                        data-fiat="USDT.BEP20" id="deposit_102">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Tether BEP20</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_70" data-fiat="ETC"
                                        id="deposit_70">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/70.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Ethereum Classic</div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-form-closest">
                                <div class="uk-card uk-card-default uk-card-form">
                                    <input class="uk-radio" type="radio" name=type value="process_77" data-fiat="BCH"
                                        id="deposit_77">
                                    <label class="uk-icon uk-icon-button" style="background: none;">
                                        <img src="{{asset('')}}massets/img/coin/77.svg" width="48" height="48">
                                    </label>
                                    <div>
                                        <div class="as-payment-name">Bitcoin Cash</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <div class="uk-margin-medium-top">
                            <label class="uk-form-label" for="as-form-amount">
                                Select payment Balance
                            </label>
                            <ul class="uk-grid-small uk-child-width-1-2@xl" uk-grid>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_51"
                                            id="account_51" data-fiat="USD" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/51.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">ePayCore</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_48"
                                            id="account_48" data-fiat="BTC" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/48.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Bitcoin</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_68"
                                            id="account_68" data-fiat="LTC" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/68.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Litecoin</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_69"
                                            id="account_69" data-fiat="ETH" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/69.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Ethereum</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_71"
                                            id="account_71" data-fiat="DASH" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/71.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Dash</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_79"
                                            id="account_79" data-fiat="DOGE" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/79.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Dogecoin</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_85"
                                            id="account_85" data-fiat="TRX" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/85.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Tron</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_92"
                                            id="account_92" data-fiat="USDT.TRC20" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/92.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Tether TRC20</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_94"
                                            id="account_94" data-fiat="BNB" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/94.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">BNB</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_102"
                                            id="account_102" data-fiat="USDT.BEP20" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Tether BEP20</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_70"
                                            id="account_70" data-fiat="ETC" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/70.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Ethereum Classic</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-form-closest">
                                    <div class="uk-card uk-card-default uk-card-form">
                                        <input class="uk-radio" type="radio" name=type value="account_77"
                                            id="account_77" data-fiat="BCH" disabled>
                                        <label class="uk-icon uk-icon-button" style="background: none;">
                                            <img src="{{asset('')}}massets/img/coin/77.svg" width="48" height="48">
                                        </label>
                                        <div>
                                            <div class="as-payment-name">Bitcoin Cash</div>
                                            <ins>
                                                $0.00
                                            </ins>
                                        </div>
                                    </div>
                                </li>

                            </ul>
>>>>>>> 1abec5b (ruutu)
                        </div>
                    </div>
                </div>
            </fieldset>
<<<<<<< HEAD
=======
=======
        <form method=post action="{{ route('user.fundActivation') }}" name="spendform"
            class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card"
            uk-grid="uk-grid">
            @csrf

>>>>>>> 58591ea (new one)
            <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                        <div style="margin-left:70px;" class="uk-legend">
                            <span class="uk-text-background">Make Deposit</span>
                        </div>
                      
                    

                        <div class="new-deposit-amount-row uk-margin-medium-top">


                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Wallet Type </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=walletType readonly
                                        value="Activation Wallet( {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }})"
                                        class="uk-input form-control" />
                                </div>

                            </div>

                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Select Amount
                                    </span>
                                </label>
                                <div class="uk-form-controls" style="display: flex; align-items: center;">
                                    <figure class="uk-form-controls-figure" style="margin-right:10px;" >
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg"  width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <select name="amount" class="uk-select form-control uniform-input" style="padding: 10px; 
                                        border-radius: 6px; 
                                         font-size: 1rem; 
                                        cursor: pointer; 
                                        width: 100%;
                                        "
                                        >
                                        <option style="width: 40%;" value="100">100 USD</option>
                                        <option style="width: 40%;" value="200">200 USD</option>
                                        <option style="width: 40%;" value="400">400 USD</option>
                                        <option style="width: 40%;" value="800">800 USD</option>
                                        <option style="width: 40%;" value="1600">1600 USD</option>
                                        <option style="width: 40%;" value="3200">3200 USD</option>
                                        <option style="width: 40%;" value="6400">6400 USD</option>
                                        <option style="width: 40%;" value="128000">128000 USD</option>
                                        <option style="width: 40%;" value="256000">256000 USD</option>
                                        <option style="width: 40%;" value="512000">512000 USD</option>
                                        <option style="width: 40%;" value="1024000">1024000 USD</option>
                                        <option style="width: 40%;" value="2048000">2048000 USD</option>
                                        <option style="width: 40%;" value="4056000">4056000 USD</option>

                                    </select>
                                </div>
                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Member Id
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=user_id required class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Transaction Password
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="password" name="transaction_password" required
                                        class="uk-input form-control" />
                                </div>

                            </div>





                            <div class="new-deposit-amount-row__btn-cell">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large">
                                    Create Deposit
                                    <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37"
                                        loading="lazy" alt="icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
>>>>>>> 1abec5b (ruutu)
        </form>
    

    </div>
<<<<<<< HEAD
<<<<<<< HEAD
    @include('partials.notify')
=======
>>>>>>> 1abec5b (ruutu)
=======
    @include('partials.notify')
>>>>>>> 58591ea (new one)
</main>






<script language=javascript>
    for (i = 0; i < document.spendform.h_id.length; i++) {
        if (document.spendform.h_id[i].value == id) {
            document.spendform.h_id[i].checked = true;
        }
    }

</script>


<script language=javascript>
    for (i = 0; i < document.spendform.type.length; i++) {
        if ((document.spendform.type[i].value.match(/^process_/))) {
            document.spendform.type[i].checked = true;
            break;
        }
    }

</script>











<script>
    function filterFormRadio() {
        var planSelector = '[name="h_id"]';


        function filterButtons() {

            var planId = $(planSelector + ':checked').val();

            $(planSelector).closest('label').removeClass('uk-active');
            $(planSelector + ':checked').closest('label').addClass('uk-active');

            $('.js-plan-tab').hide();
            $('.js-plan-tab-' + planId).show();

        }

        filterButtons();
        $(planSelector).on('change', filterButtons);
    }

    if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', filterFormRadio);
    } else {
        document.attachEvent('onreadystatechange', filterFormRadio);
    }

</script>

