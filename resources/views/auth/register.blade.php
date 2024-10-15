
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<title>StakeOn</title>
		<base href="https://stakeon.pro/" src="https://stakeon.pro/" />
		<link rel="icon" type="image/png" sizes="32x32"
			href="{{asset('')}}assets/img/favicon-32x32.png">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<link rel="stylesheet" href="{{asset('')}}assets/css/vendor.css">
		<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<header class="header header_page">
            @include('layouts.mainsite.header')

				<div class="container">
					<div class="row">
						<div class="col-lg-2 d-lg-none">
							<div class="header-side">
								<div class="nicescroll-box">
									<div class="wrap">
										<div class="header-menu">
											<a class="header-menu__item" href="?a=home">
												<span>
													<i style="font-style: normal;">Home
													</i>
												</span>main
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											<a class="header-menu__item" href="?a=faq">
												<span>
													<i style="font-style: normal;">FAQ
													</i>
												</span>answers
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											
											<a class="header-menu__item" href="?a=rules">
												<span>
													<i style="font-style: normal;">Terms
													</i>
												</span>rules
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
											<a class="header-menu__item" href="?a=support">
												<span>
													<i style="font-style: normal;">Contacts
													</i>
												</span>Support
												<div class="header-menu__icon">
													<svg>
														<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
													</svg>
												</div>
											</a>
										</div>
										<div class="header-btns mt-4">
											<a class="main-btn main-btn_line" href="?a=login">
												<img src="{{asset('')}}assets/img/btn-login.svg" alt="btn-login" />login
											</a>
											<a class="main-btn main-btn_orange main-btn_sign" href="?a=signup">
												<img src="{{asset('')}}assets/img/btn-sign.svg" alt="btn-sign" />register
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>





 

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
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
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
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
 </script>
 






<section class="sign">
<div class="container">
            <div class="row">
               <div class="col-lg-5 offset-lg-3">
               @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
                  <form method=post  action="{{route('registers')}}" >
@csrf
                     <div class="sign-box">
                        <div class="sign-title">
                           Sign UP
                           <p>Create an account</p>
                        </div>
						
						 

						
                        <div class="contacts-form__inputs">
                        <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=sponsor value="" placeholder="Username">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=name value='' placeholder="Full Name">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
						  
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=email value="" placeholder="Your Email">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=phone value="" placeholder="Your Phone No">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
						
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password value="" placeholder="Your Password">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password_confirmation value="" placeholder="Confirm Password">
                              <svg>
                                 <use xlink:href="{{asset('')}}assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
                        </div>
						<div class="sign-sponsor">Invited by: <span>N/A</span></div>
						<label class="sign-check mt-4"><input type="checkbox" name=agree value=1  checked><span>I agree with <a href="?a=rules" target="_blank" style="color:#d0ff96">Terms and Conditions</a></span></label>
                        <button type="submit" class="main-btn main-btn_orange main-btn_m"  style="width:100%">Sign UP</button>
                        <div class="sign-bot">Already have an account?<a href="?a=login"> Sign In</a></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

</section>



<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-12">
							<div class="footer-wallets py-4 py-lg-5">
								<div class="swiper-button-prev">
									<svg>
										<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
									</svg>
								</div>
								<div class="swiper-button-next">
									<svg>
										<use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
									</svg>
								</div>
								<div class="swiper">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/btc-white.svg" alt="btc-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/eth-white.svg" alt="eth-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/bch-white.svg" alt="xrp-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/ltc-white.svg" alt="ltc-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/sol-white.svg" alt="dash-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/doge-white.svg" alt="doge-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/trx-white.svg" alt="trx-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/usdt-white.svg" alt="usdt-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/bnb-white.svg" alt="bnb-white" />
											</div>
										</div>
										<div class="swiper-slide">
											<div class="footer-wallets__item"> <img
													src="{{asset('')}}assets/img/xlm-white.svg" alt="epc-white" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<div class="footer-bg"> <a class="footer-logo" href="/"><img src="{{asset('')}}assets/img/logo-white.png" alt="logo-white" /></a>
								<div class="footer-text">
									<p><strong class="footer-text__warning">Risk Warning:</strong> The performance of most cryptoassets can be highly volatile, with their value dropping as quickly as it can rise. You should be prepared to lose all the money you invest in cryptoassets. The cryptoasset market is largely unregulated.</p>
								</div>
								<div class="footer-copy">Copyright © 2024 StakeOn. All rights reserved</div>
							</div>
						</div>
						<div class="col-lg-9 order-1 oreder-lg-2">
							<div class="footer-bot">
								<div class="row">
									<div class="col-lg-4">
										<div class="footer-title mt-0 mb-4">information</div>
										<div class="footer-menu"> 
											<a href="?a=faq">FAQs</a>
											<a href="?a=rules">Terms</a>
											<a href="?a=support">Support</a>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mt-4 mt-lg-0">
										<div class="footer-text">
											<h3> <img src="{{asset('')}}assets/img/f_ddos.svg" width="42" alt="ddos" />DDOS Protection
											</h3>
											<p>Our website is protected by the most effective and modern
												technologies in the field of countering DDoS attacks of any
												etymology.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6">
										<div class="footer-text">
											<h3> <img src="{{asset('')}}assets/img/f_ssl.svg" width="42" alt="ssl" />SSL Protection
											</h3>
											<p>Reliable SSL encryption to preserve a privacy of personal data and
												the process of information exchange on our website.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="row">
											<div class="col-sm-7">
												<div class="footer-contacts mb-4 mb-lg-0"> <a
														href="javascript:void(0)"> <img
															src="{{asset('')}}assets/img/footer-contacts-1.svg" alt="footer-contacts-1" />167-169
														 Great Portland St, London W1W 5PF, United Kingdom</a><a
														href="javascript:void(0)"> <img
															src="{{asset('')}}assets/img/footer-contacts-2.svg" alt="footer-contacts-2" />support@stakeon.pro</a></div>
											</div>
											<div class="col-sm-5">
												<div class="footer-links"> 
													<div class="header-soc__links">
			
														<a href="https://t.me/stakeonews" target="_blank">
															<svg>
																<use xlink:href="{{asset('')}}assets/img/sprite.svg#tg"></use>
															</svg>CHANNEL
														</a>
														<a href="https://t.me/stakeonpro" target="_blank">
															<svg>
																<use xlink:href="{{asset('')}}assets/img/sprite.svg#tg"></use>
															</svg>GROUP
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="{{asset('')}}assets/js/vendor.js"></script>
		<script src="{{asset('')}}assets/js/main.js"></script>
		<script src="{{asset('')}}assets/js/nicescroll.min.js"></script>
		<script>
$(document).ready(function() {
    // Define the minimum and maximum investment amounts
    var minAmount = 25;
    var maxAmount = 500000;

    // Listen for changes in the plan or amount fields
    $('#cal_plan, #cal_amount').on('change keyup', function() {
        calculateProfits();
    });

    function calculateProfits() {
        // Get the selected plan and amount
        var plan = $('#cal_plan').val();
        var amount = parseFloat($('#cal_amount').val());

        // Validate the amount
        if (isNaN(amount) || amount < minAmount || amount > maxAmount) {
            $('#daily_res').text('$0');
            $('#total_res').text('$0');
            return;
        }

        // Define the daily profit percentages for each plan
        var dailyRates = {
            1: 0.005, // 0.5% daily for 30 days
            2: 0.006, // 0.6% daily for 90 days
            3: 0.007, // 0.7% daily for 180 days
            4: 0.01   // 1% daily for 360 days
        };

        // Define the duration of each plan
        var planDurations = {
            1: 30,
            2: 90,
            3: 180,
            4: 360
        };

        // Calculate the daily and total profits
        var dailyProfit = amount * dailyRates[plan];
        var totalProfit = dailyProfit * planDurations[plan];

        // Update the result fields
        $('#daily_res').text('$' + dailyProfit.toFixed(2));
        $('#total_res').text('$' + totalProfit.toFixed(2));
    }
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6666ac609a809f19fb3bf20a/1i00h2mjc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

	</body>
</html>
