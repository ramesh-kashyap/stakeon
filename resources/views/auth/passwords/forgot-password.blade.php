<html style="--vh: 3.23px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>StakeOn</title>
   
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link rel="stylesheet" href="{{asset('')}}assets/css/vendor.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
</head>

<body>
    <div class="wrapper">
      
    @include('layouts.mainsite.header')


        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
        <script src="https://embed.tawk.to/_s/v4/app/66d916256f5/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
        <!-- <script async="" src="https://embed.tawk.to/6666ac609a809f19fb3bf20a/1i00h2mjc" charset="UTF-8" crossorigin="*"></script> -->
        <script language="javascript">
            function checkform() {
                if (document.forgotform.email.value == '') {
                    alert("Please type your username or email!");
                    document.forgotform.email.focus();
                    return false;
                }
                return true;
            }
        </script>



        <section class="sign">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-3">
                        <form method="post" name="forgotform" onsubmit="return checkform();"><input type="hidden" name="form_id" value="17283854451025"><input type="hidden" name="form_token" value="8b3b27ef4c4f3ba80df5b67cfb136ca6">
                            <input type="hidden" name="a" value="forgot_password">
                            <input type="hidden" name="action" value="forgot_password">
                            <div class="sign-box">
                                <div class="sign-title">
                                    Forgot Password
                                    <p>Recovery Your Password</p>
                                </div>


                                <div class="contacts-form__inputs">
                                    <label class="contacts-form__input contacts-form__input_icon">
                                        <input type="text" name="email" value="" placeholder="Your Email">
                                        <svg>
                                            <use xlink:href="assets/img/sprite.svg#mail"></use>
                                        </svg>
                                    </label>
                                </div>
                                <button name="login_frm_btn" type="submit" class="main-btn main-btn_orange main-btn_m" style="width:100%">Forgot</button>
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
                    4: 0.01 // 1% daily for 360 days
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
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6666ac609a809f19fb3bf20a/1i00h2mjc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->



    <script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/66d916256f5/languages/en.js"></script>
</body>

</html>