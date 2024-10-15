<<<<<<< HEAD
<main id="as-main-deposit" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <header class="uk-heading uk-text-center uk-margin-small-bottom">
            <h1 class="uk-heading-line">Withdraw Request</h1>
        </header>


       
        <form action="{{ route('user.Withdraw-Request') }}" method="POST" name="spendform" class="uk-form-stacked uk-child-width-1-2@l"
            uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid">
            @csrf

            <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
                <div class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default as-card-medium">
                    <div style="margin-left:70px;" class="uk-legend">
                            <span class="uk-text-background">Make Withdraw</span>
                        </div>
                    
                        <div class="new-deposit-amount-row uk-margin-medium-top">

                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                    Available Balance                                      </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=walletType value="( {{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }})"    
                                        class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                        Enter Amount
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=amount  required   
                                        class="uk-input form-control" />
                                </div>

                            </div>
                            <div class="new-deposit-amount-row__amount-cell">
                                <label class="uk-form-label" for="as-form-amount">
                                    <span class="uk-flex uk-flex-between">
                                    Payment Mode
                                    </span>
                                </label>
                                <div class="uk-form-controls">
                                    <figure class="uk-form-controls-figure">
                                        <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60"
                                            loading="lazy" alt="icon">
                                    </figure>
                                    <small class="uk-form-icon uk-form-icon-flip js-currs-slug">
                                    </small>
                                    <input type="text" name=paymentMode  required value="USDT" placeholder="USDT"
                                        class="uk-input form-control" />
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
                                    <input type="password" name="transaction_password"  required    
                                        class="uk-input form-control" />
                                </div>

                            </div>
                        
                        



                            <div class="new-deposit-amount-row__btn-cell">
                                <button  type="submit"class="uk-button uk-button-primary uk-button-large">
                                    Create Withdraw
                                    <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37"
                                        loading="lazy" alt="icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    @include('partials.notify')

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
<style>




   </style>
=======


  <main id="as-main-withdrawal" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

      <header class="uk-heading uk-text-center uk-margin-small-bottom">
        <h1 class="uk-heading-line">Withdrawal</h1>
      </header>

      <form method="post" class="uk-form-stacked uk-child-width-1-2@l uk-margin-medium-top uk-grid" uk-height-match="target: > fieldset > div > .uk-card" uk-grid="uk-grid" autocomplete="off"><input type="hidden" name="form_id" value="17283182669459"><input type="hidden" name="form_token" value="78a89892adacb962e1f19bffdf2f8127">
        <input type="hidden" name="a" value="withdraw">
        <input type="hidden" name="action" value="preview">
        <input type="hidden" name="say" value="">
        <fieldset id="as-withdrawal-select" class="uk-fieldset uk-first-column">
          <div class="uk-cube-top-left uk-cube-figure">
            <div class="uk-card uk-card-default as-card-medium">

              <div class="uk-legend">
                <mark>1</mark>
                <span class="uk-text-background">Select a payment system</span>
              </div>

              <ul class="uk-grid-small uk-child-width-1-2@xl uk-grid uk-grid-stack" uk-grid="">







                <li class="js-form-closest uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="51" checked="">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/51.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>ePayCore</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="48">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/48.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Bitcoin</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="68">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/68.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Litecoin</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="69">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/69.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Ethereum</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="71">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/71.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Dash</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="79">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/79.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Dogecoin</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="85">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/85.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Tron</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="92">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/92.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Tether TRC20</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="94">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/94.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>BNB</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="102">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Tether BEP20</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="70">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/70.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Ethereum Classic</mark>
                    </div>
                  </div>
                </li>




                <li class="js-form-closest uk-grid-margin uk-first-column">
                  <div class="uk-card uk-card-default uk-card-form">
                    <input class="uk-radio" type="radio" name="ec" value="77">
                    <label class="uk-icon uk-icon-button" for="create_form_gate_slug_0" style="background:none">
                      <img src="{{asset('')}}massets/img/coin/77.svg" width="48" height="48">
                    </label>
                    <div>
                      <ins>
                        $0.00
                      </ins>
                      <mark>Bitcoin Cash</mark>
                    </div>
                  </div>
                </li>






              </ul>
            </div>
          </div>
        </fieldset>

        <fieldset id="as-withdrawal-balance" class="uk-fieldset">
          <div class="uk-cube-bottom-left uk-cube-figure">
            <div class="uk-card uk-card-default as-card-medium" style="min-height: 1411.33px;">

              <div class="uk-legend">
                <mark>2</mark>
                <span class="uk-text-background">Amount Withdraw</span>
              </div>


              <ul class="uk-switcher uk-margin">
                <li class="uk-active">



                  <div class="uk-margin uk-form-controls-label-figure">
                    <div class="uk-grid-small uk-flex-bottom uk-grid uk-grid-stack" uk-grid="">
                      <p style="color:red" class="uk-first-column">You have no funds to withdraw</p>
                    </div>
                  </div>

                </li>
              </ul>

            </div>
          </div>
        </fieldset>

      </form>
    </div>
  </main>




>>>>>>> 1abec5b (ruutu)
