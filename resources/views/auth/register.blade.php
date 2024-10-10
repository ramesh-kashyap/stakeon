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
		<link rel="stylesheet" href="assets/css/vendor.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
        @include('layouts.mainsite.header')

 

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
                  <form method=post onsubmit="return checkform()" name="regform"><input type="hidden" name="form_id" value="17282798569842"><input type="hidden" name="form_token" value="74de2cf27ae6f0944343ac9c1d966615">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
                     <div class="sign-box">
                        <div class="sign-title">
                           Sign UP
                           <p>Create an account</p>
                        </div>
						
						 

						
                        <div class="contacts-form__inputs">
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=fullname value='' placeholder="Full Name">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=username value="" placeholder="Username">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#user"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=email value="" placeholder="Your Email">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="text" name=email1 value="" placeholder="Confirm Email">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#mail"></use>
                              </svg>
                           </label>
                           <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password value="" placeholder="Your Password">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
						   <label class="contacts-form__input contacts-form__input_icon">
                              <input type="password" name=password2 value="" placeholder="Confirm Password">
                              <svg>
                                 <use xlink:href="assets/img/sprite.svg#pass"></use>
                              </svg>
                           </label>
                        </div>
						<div class="sign-sponsor">Invited by: <span>N/A</span></div>
						<label class="sign-check mt-4"><input type="checkbox" name=agree value=1  checked><span>I agree with <a href="index%EF%B9%96a=rules.html" target="_blank" style="color:#d0ff96">Terms and Conditions</a></span></label>
                        <button type="submit" class="main-btn main-btn_orange main-btn_m"  style="width:100%">Sign UP</button>
                        <div class="sign-bot">Already have an account?<a href="index%EF%B9%96a=login.html"> Sign In</a></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

</section>


@include('layouts.mainsite.footer')

		</div>
		<script src="assets/js/vendor.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/nicescroll.min.js"></script>
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
