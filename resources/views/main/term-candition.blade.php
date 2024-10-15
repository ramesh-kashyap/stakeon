<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<title>StakeOn</title>
		<!--<base href="https://stakeon.pro/" src="https://stakeon.pro/" />-->
		<link rel="icon" type="image/png" sizes="32x32"
			href="{{asset('')}}assets/img/favicon-32x32.png">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<link rel="stylesheet" href="{{asset('')}}assets/css/vendor.css">
		<link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
        @include('layouts.mainsite.header')


<div class="container">
                <div class="main-title my-5 main-title_page main-title_center">
                    <div class="main-title__top"><span>company</span></div>
                    <div class="main-title__text">Terms of conditions
                    </div>
                </div>
                <div class="main-text">
                    <p>This program is exempted from the application of The Securities Act of 1933, The Securities Exchange Act of 1934 (SEA), and The Investment Company Act of 1940 since it is a private transaction. The same applies to all other regulations, rules, and amendments to them.</p>
    
                    <p>The Company is not a licensed bank and is not responsible for any damage, costs, or losses resulting from the investor’s non-compliance with the conditions and regulations, set out on the website.</p>
    
                    <p>By registering, you confirm that you will not use this website in any illegal way and will respect international and local laws. The company reserves the right to change the conditions: fees, program rates, and rules at any time and its discretion, without prior notification. Especially, when it comes to ensuring the safety of investors’ interests.</p>
    
                    <p>You consent that you are fully aware of the responsibilities and are familiar with the present conditions</p>
                    <h4>Investor's rights.</h4>
                    <p>You consent to follow the following rules:</p>
                    <div class="about-page-info-2">
                        <p>To indicate only actual and correct personal data.</p>
                        <p>To be over 18 years (adult) at the time of registration</p>
                        <p>To respect and be tolerant of other investors of the company</p>
                        <p>Not to use this Website to launder money</p>
                        <p>Not to use illegally earned money</p>
                        <p>To respect the commercial secret and the right not to disclose information about any private transaction.</p>
                        <p>Not to use SPAM and other malicious applications that violate the integrity and functioning of the website.</p>
                    </div>
                    <p>Any attempts to harm the reputation using the creation of negative publications and videos on social media are not welcomed by the company. StakeOn, for its part, is always ready to provide support to its investors – that is why, if any issues occur, the request is to contact the support team.</p>
                    <h4>The company is entitled to:</h4>
                    <div class="about-page-info-2">
                        <p>Add and update the actual content to the Website</p>
                        <p>Edit and delete the content of the Website</p>
                        <p>Provide an investor with advisory and informational services</p>
                        <p>Suspend or temporarily cease the transmission of any information through the Website without prior notification due to the following reasons:</p>
                       
                    </div>
                    <h4>The company also reserves the right to:</h4>
                    <div class="about-page-info-2">
                        <p>Suspend the service provision, up to account blocking, in case of violation of these Rules by the Investor</p>
                        <p>Make amendments to the already existing Rules without prior approval</p>
                        <p>Edit and change the content of the Website without prior approval</p>
                        <p>Correct and complement the already existing investment offers</p>
                        <p>Change towards an increase in partner’s remuneration, without prior approval</p>
                        <p>Send materials to all registered users of the company</p>
                        <p>Use the indicated personal data of an Investor to improve and optimize the process of investment interaction</p>
                        <p>Refuse cooperation with any participant without explanation</p>
                        <p>Provide all possible support and help to the investors within the Rules indicated on the website</p>
                    </div>
                    <p>The company bears no responsibility for issues and inconveniences caused by the temporary suspension of the work of the Website, which occurred as a result of the above reasons. It is also not responsible for losses caused and damages connected with the temporary suspension of service delivery resulting from the action of the above reasons.</p>
                </div>
            </div>
            @include('layouts.mainsite.footer')

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