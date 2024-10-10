<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<title>StakeOn</title>
		<!--<base href="https://stakeon.pro/" src="https://stakeon.pro/" />-->
		<link rel="icon" type="image/png" sizes="32x32"
			href="assets/img/favicon-32x32.png">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<link rel="stylesheet" href="{{asset('')}}assets/css/vendor.css">
		<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
        @include('layouts.mainsite.header')


<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>

<section class="sign">
<div class="container">
            <div class="row">
               <div class="col-lg-5 offset-lg-3">
                  <form method=post name=mainform action="{{route('login')}}">
					@csrf
                     <div class="sign-box">
                        <div class="sign-title">
                           Sign IN
                           <p>Welcome to StakeOn</p>
                        </div>
						                        <div class="contacts-form__inputs">
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=username value='' placeholder="Your Login">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password value='' placeholder="Your Password">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
                        </div>
                        <a class="sign-link" href="{{route('forgot-password')}}">Forgot your password?</a><button name="login_frm_btn" type="submit" class="main-btn main-btn_orange main-btn_m"  style="width:100%">Sign IN</button>
                        <div class="sign-bot">Don't you have an account yet?<a href="{{route('register')}}"> Sign Up</a></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

</section>

@include('layouts.mainsite.footer')

		</div>
		<script src="https://stakeon.pro/assets/js/vendor.js"></script>
		<script src="https://stakeon.pro/assets/js/main.js"></script>
		<script src="https://stakeon.pro/assets/js/nicescroll.min.js"></script>
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
