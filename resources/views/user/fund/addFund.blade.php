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


                    </div>
                    @include('partials.notify')

                </div>
            </section>

            <!-- Right Form -->
           
        </div>
    </div>
</main>
