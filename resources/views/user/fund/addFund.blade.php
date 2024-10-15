<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da964d8 (ruutu)


<main id="as-main-deposit" class="uk-section-xsmall">
   <div class="uk-container uk-container-expand">
      <header class="uk-heading uk-text-center uk-margin-small-bottom">
         <h1 class="uk-heading-line">Create a new Fund</h1>
      </header>

     
      <form name="spendform" action="{{ route('user.confirmfund') }}" method="get" class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid"> 
        @csrf
    <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
        <div class="uk-cube-bottom-left uk-cube-figure">
            <div class="uk-card uk-card-default as-card-medium">
                <div class="uk-legend">
                    <mark>1</mark>
                    <span class="uk-text-background">Select a payment system</span>
                </div>
                <label class="uk-form-label" for="as-form-amount">Select payment Topup</label>
                <ul class="uk-grid-small uk-child-width-1-2@xl" uk-grid>
                    <li class="js-form-closest">
                        <div class="uk-card uk-card-default uk-card-form">
                            <input class="uk-radio" type="radio" name="payment_type" value="USDT.TRC20" data-fiat="USDT.TRC20" id="deposit_92"checked>
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
                            <input class="uk-radio" type="radio" name="payment_type" value="USDT.BEP20" data-fiat="USDT.BEP20" id="deposit_102">
                            <label class="uk-icon uk-icon-button" style="background: none;">
                                <img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
                            </label>
                            <div>
                                <div class="as-payment-name">Tether BEP20</div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="new-deposit-amount-row uk-margin-medium-top">
                    

                    <div class="new-deposit-amount-row__amount-cell">
                        <label class="uk-form-label" for="as-form-amount">
                            <span class="uk-flex uk-flex-between">Enter Amount</span>
                        </label>
                        <div class="uk-form-controls">
                            <figure class="uk-form-controls-figure">
                                <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60" loading="lazy" alt="icon">
                            </figure>
                            <small class="uk-form-icon uk-form-icon-flip js-currs-slug"></small>
                            <input type="text" placeholder="Enter Amount" name="amount" required value="" class="uk-input form-control" />
                        </div>
                    </div>

                    <div class="new-deposit-amount-row__btn-cell">
                        <button  type="submit"class="uk-button uk-button-primary uk-button-large">Confirm                            <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37" loading="lazy" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
@include('partials.notify')

   </div>
</main>




<script language=javascript>
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
</script>

    
  <script language=javascript>

  for (i = 0; i<document.spendform.type.length; i++) {
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
=======
<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-grid-stack" uk-grid="">
            <!-- Left Form -->
            <section class="uk-width-1-2@l">
                <div id="as-settings-personal" class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default uk-card-body">
                        <header class="uk-heading uk-text-center">
                            <h3 class="uk-margin-small-bottom">Add Fund</h3>
                        </header>
                        <form action="{{ route('user.SubmitBuyFund') }}" method="POST" name="editform" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <!-- Enter Amount Input -->
    <div class="uk-margin-small-top uk-margin-bottom">
        <label class="uk-form-label" for="amount">Enter Amount</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-emphasis" type="text" placeholder="Enter Amount" name="amount" value="">
        </div>
    </div>

    <!-- Payment Mode Input -->
    <div class="uk-margin">
        <label class="uk-form-label" for="transaction_hash">Trx Password</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-emphasis"  type="text" placeholder="Enter Transaction Password" name="transaction_hash" value="">
        </div>
    </div>

    <!-- Choose File Input -->
    <div class="uk-margin">
        <label class="uk-form-label" for="payment_proof">Upload Payment Proof</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-emphasis" type="file" name="icon_image">
        </div>
    </div>

    <!-- Submit Button -->
    <button class="uk-button uk-button-primary uk-button-large" type="submit">Submit</button>
</form>
<<<<<<< HEAD
=======
>>>>>>> 58591ea (new one)


<main id="as-main-deposit" class="uk-section-xsmall">
   <div class="uk-container uk-container-expand">
      <header class="uk-heading uk-text-center uk-margin-small-bottom">
         <h1 class="uk-heading-line">Create a new Fund</h1>
      </header>

     
      <form name="spendform" action="{{ route('user.confirmfund') }}" method="get" class="uk-form-stacked uk-child-width-1-2@l" uk-height-match="target: &gt; fieldset &gt; div &gt; .uk-card" uk-grid="uk-grid"> 
        @csrf
    <fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
        <div class="uk-cube-bottom-left uk-cube-figure">
            <div class="uk-card uk-card-default as-card-medium">
                <div class="uk-legend">
                    <mark>1</mark>
                    <span class="uk-text-background">Select a payment system</span>
                </div>
                <label class="uk-form-label" for="as-form-amount">Select payment Topup</label>
                <ul class="uk-grid-small uk-child-width-1-2@xl" uk-grid>
                    <li class="js-form-closest">
                        <div class="uk-card uk-card-default uk-card-form">
                            <input class="uk-radio" type="radio" name="payment_type" value="USDT.TRC20" data-fiat="USDT.TRC20" id="deposit_92"checked>
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
                            <input class="uk-radio" type="radio" name="payment_type" value="USDT.BEP20" data-fiat="USDT.BEP20" id="deposit_102">
                            <label class="uk-icon uk-icon-button" style="background: none;">
                                <img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
                            </label>
                            <div>
                                <div class="as-payment-name">Tether BEP20</div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="new-deposit-amount-row uk-margin-medium-top">
                    

                    <div class="new-deposit-amount-row__amount-cell">
                        <label class="uk-form-label" for="as-form-amount">
                            <span class="uk-flex uk-flex-between">Enter Amount</span>
                        </label>
                        <div class="uk-form-controls">
                            <figure class="uk-form-controls-figure">
                                <img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60" loading="lazy" alt="icon">
                            </figure>
                            <small class="uk-form-icon uk-form-icon-flip js-currs-slug"></small>
                            <input type="text" placeholder="Enter Amount" name="amount" required value="" class="uk-input form-control" />
                        </div>
                    </div>

                    <div class="new-deposit-amount-row__btn-cell">
                        <button  type="submit"class="uk-button uk-button-primary uk-button-large">Confirm                            <img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37" loading="lazy" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
@include('partials.notify')

   </div>
</main>
<<<<<<< HEAD
>>>>>>> 1abec5b (ruutu)
=======




<script language=javascript>
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
</script>

    
  <script language=javascript>

  for (i = 0; i<document.spendform.type.length; i++) {
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
>>>>>>> 58591ea (new one)
=======


                    </div>
                    @include('partials.notify')

                </div>
            </section>

            <!-- Right Form -->
           
        </div>
    </div>
</main>
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
