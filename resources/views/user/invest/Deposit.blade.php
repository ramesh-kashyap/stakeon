


<main id="as-main-deposit" class="uk-section-xsmall">
	<div class="uk-container uk-container-expand">
		<header class="uk-heading uk-text-center uk-margin-small-bottom">
			<h1 class="uk-heading-line">Create a new Deposit</h1>
		</header>

		<form method="post" name="spendform" class="uk-form-stacked uk-child-width-1-2@l uk-grid" uk-height-match="target: > fieldset > div > .uk-card" uk-grid="uk-grid"><input type="hidden" name="form_id" value="17283645013574"><input type="hidden" name="form_token" value="253d04de1f924474adbbc896477198ba">
			<input type="hidden" name="a" value="deposit">
			<fieldset id="as-new-deposit-select" class="uk-fieldset uk-first-column">
				<div class="uk-cube-top-left uk-cube-figure">
					<div class="uk-card uk-card-default as-card-medium">
						<div class="uk-legend">
							<mark>1</mark>
							<span class="uk-text-background">Select a payment system</span>
						</div>
						<label class="uk-form-label" for="as-form-amount">
							Select payment Topup
						</label>
						<ul class="uk-grid-small uk-child-width-1-2@xl uk-grid uk-grid-stack" uk-grid="">
							<li class="js-form-closest uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_51" data-fiat="USD" id="deposit_51">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/51.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">ePayCore</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_48" data-fiat="BTC" id="deposit_48">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/48.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Bitcoin</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_68" data-fiat="LTC" id="deposit_68">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/68.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Litecoin</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_69" data-fiat="ETH" id="deposit_69">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/69.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Ethereum</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_71" data-fiat="DASH" id="deposit_71">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/71.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Dash</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_79" data-fiat="DOGE" id="deposit_79">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/79.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Dogecoin</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_85" data-fiat="TRX" id="deposit_85">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/85.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Tron</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_92" data-fiat="USDT.TRC20" id="deposit_92">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/92.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Tether TRC20</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_94" data-fiat="BNB" id="deposit_94">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/94.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">BNB</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_102" data-fiat="USDT.BEP20" id="deposit_102">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/102.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Tether BEP20</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_70" data-fiat="ETC" id="deposit_70">
									<label class="uk-icon uk-icon-button" style="background: none;">
										<img src="{{asset('')}}massets/img/coin/70.svg" width="48" height="48">
									</label>
									<div>
										<div class="as-payment-name">Ethereum Classic</div>
									</div>
								</div>
							</li>
							<li class="js-form-closest uk-grid-margin uk-first-column">
								<div class="uk-card uk-card-default uk-card-form">
									<input class="uk-radio" type="radio" name="type" value="process_77" data-fiat="BCH" id="deposit_77">
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
							<ul class="uk-grid-small uk-child-width-1-2@xl uk-grid uk-grid-stack" uk-grid="">
								<li class="js-form-closest uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_51" id="account_51" data-fiat="USD" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_48" id="account_48" data-fiat="BTC" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_68" id="account_68" data-fiat="LTC" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_69" id="account_69" data-fiat="ETH" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_71" id="account_71" data-fiat="DASH" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_79" id="account_79" data-fiat="DOGE" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_85" id="account_85" data-fiat="TRX" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_92" id="account_92" data-fiat="USDT.TRC20" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_94" id="account_94" data-fiat="BNB" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_102" id="account_102" data-fiat="USDT.BEP20" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_70" id="account_70" data-fiat="ETC" disabled="">
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
								<li class="js-form-closest uk-grid-margin uk-first-column">
									<div class="uk-card uk-card-default uk-card-form">
										<input class="uk-radio" type="radio" name="type" value="account_77" id="account_77" data-fiat="BCH" disabled="">
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
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset id="as-new-deposit-amount" class="uk-fieldset uk-form-controls-label-figure">
				<div class="uk-cube-bottom-left uk-cube-figure">
					<div class="uk-card uk-card-default as-card-medium" style="min-height: 2799.88px;">
						<div class="uk-legend">
							<mark>2</mark>
							<span class="uk-text-background">Choose the Staking plan</span>
						</div>
						<ul class="uk-subnav uk-subnav-pill uk-child-width-1-2@m uk-child-width-1-2@l uk-flex-center uk-margin">
							<label class="js-plan-label uk-active" for="deposit_form_plan_id_0" style="cursor: pointer;">
								<span>
									LITE
								</span>
								<input type="radio" name="h_id" value="1" id="deposit_form_plan_id_0" checked="" hidden="">
							</label>
							<label class="js-plan-label" for="deposit_form_plan_id_1" style="cursor: pointer;">
								<span>
									STANDARD
								</span>
								<input type="radio" name="h_id" value="2" id="deposit_form_plan_id_1" hidden="">
							</label>
							<label class="js-plan-label" for="deposit_form_plan_id_2" style="cursor: pointer;">
								<span>
									PREMIUM
								</span>
								<input type="radio" name="h_id" value="3" id="deposit_form_plan_id_2" hidden="">
							</label>
							<label class="js-plan-label" for="deposit_form_plan_id_3" style="cursor: pointer;">
								<span>
									DIAMOND
								</span>
								<input type="radio" name="h_id" value="4" id="deposit_form_plan_id_3" hidden="">
							</label>
						</ul>
						<div class="js-plan-tab-content">
							<div class="js-plan-tab js-plan-tab-1" style="display: block;">
								<div class="new-deposit-plan-block">
									<div class="new-deposit-plan-block__inner">
										<div class="new-deposit-plan-block__body">
											<div class="new-deposit-plan-block__earnings-row">
												<div class="new-deposit-plan-block__percent-cell">
													<div class="new-deposit-plan-block__percent">
														0.5<small>%</small>
													</div>
												</div>
												<div class="new-deposit-plan-block__period-cell">
													<div class="new-deposit-plan-block__period">
														Daily
														<br>
														Income
													</div>
												</div>
											</div>
											<div class="new-deposit-plan-block__description-row">
												<div class="new-deposit-plan-block__description-cell">
													<div class="new-deposit-plan-block__term">
														<div class="principal-return-widget new-deposit-plan-block__principal-return-widget">
															For
															30 calendar
															days
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="js-plan-tab js-plan-tab-2" style="display: none;">
								<div class="new-deposit-plan-block">
									<div class="new-deposit-plan-block__inner">
										<div class="new-deposit-plan-block__body">
											<div class="new-deposit-plan-block__earnings-row">
												<div class="new-deposit-plan-block__percent-cell">
													<div class="new-deposit-plan-block__percent">
														0.6<small>%</small>
													</div>
												</div>
												<div class="new-deposit-plan-block__period-cell">
													<div class="new-deposit-plan-block__period">
														Daily
														<br>
														Income
													</div>
												</div>
											</div>
											<div class="new-deposit-plan-block__description-row">
												<div class="new-deposit-plan-block__description-cell">
													<div class="new-deposit-plan-block__term">
														<div class="principal-return-widget new-deposit-plan-block__principal-return-widget">
															For
															90 calendar
															days
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="js-plan-tab js-plan-tab-3" style="display: none;">
								<div class="new-deposit-plan-block">
									<div class="new-deposit-plan-block__inner">
										<div class="new-deposit-plan-block__body">
											<div class="new-deposit-plan-block__earnings-row">
												<div class="new-deposit-plan-block__percent-cell">
													<div class="new-deposit-plan-block__percent">
														0.7<small>%</small>
													</div>
												</div>
												<div class="new-deposit-plan-block__period-cell">
													<div class="new-deposit-plan-block__period">
														Daily
														<br>
														Income
													</div>
												</div>
											</div>
											<div class="new-deposit-plan-block__description-row">
												<div class="new-deposit-plan-block__description-cell">
													<div class="new-deposit-plan-block__term">
														<div class="principal-return-widget new-deposit-plan-block__principal-return-widget">
															For
															180 calendar
															days
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="js-plan-tab js-plan-tab-4" style="display: none;">
								<div class="new-deposit-plan-block">
									<div class="new-deposit-plan-block__inner">
										<div class="new-deposit-plan-block__body">
											<div class="new-deposit-plan-block__earnings-row">
												<div class="new-deposit-plan-block__percent-cell">
													<div class="new-deposit-plan-block__percent">
														1<small>%</small>
													</div>
												</div>
												<div class="new-deposit-plan-block__period-cell">
													<div class="new-deposit-plan-block__period">
														Daily
														<br>
														Income
													</div>
												</div>
											</div>
											<div class="new-deposit-plan-block__description-row">
												<div class="new-deposit-plan-block__description-cell">
													<div class="new-deposit-plan-block__term">
														<div class="principal-return-widget new-deposit-plan-block__principal-return-widget">
															For
															360 calendar
															days
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="new-deposit-amount-row uk-margin-medium-top">
							<div class="new-deposit-amount-row__amount-cell">
								<label class="uk-form-label" for="as-form-amount">
									<span class="uk-flex uk-flex-between">
										Enter Amount
									</span>
								</label>
								<div class="uk-form-controls">
									<figure class="uk-form-controls-figure">
										<img src="{{asset('')}}massets/img/icon/form/amount.svg" width="60" height="60" loading="lazy" alt="icon">
									</figure>
									<small class="uk-form-icon uk-form-icon-flip js-currs-slug">
									</small>
									<input type="text" name="amount" value="25.00" required="required" class="uk-input form-control">
								</div>
							</div>
							<div class="new-deposit-amount-row__btn-cell">
								<button class="uk-button uk-button-primary uk-button-large">
									Create Deposit
									<img src="{{asset('')}}massets/img/icon/deposit.svg" width="37" height="37" loading="lazy" alt="icon">
								</button>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</main>