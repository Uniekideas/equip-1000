<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Checkout</title>
    <link rel="icon" href="/img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/eqip/reserve/laptop-confirmation.css">
    <link rel="stylesheet" href="/css/eqip/reserve/dash-header.css">
    <link rel="stylesheet" href="/css/eqip/reserve/laptop-checkout.css">
    <link rel="stylesheet" href="/css/eqip/mobile-bottom-nav.css">
    <link rel="stylesheet" href="/css/eqip/checkout-pop-up.css">

</head>
<body>
    <div class="sticky">
        <div class="small-screen-navbar" style="background-color: #275c6f;">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <a class="logo" href="../index.html"><img src="../img/logo/Equip1000 logo.svg" /></a>                 
            <ul class="nav-list" id="nav-list">
                <li><img src="../img/svg/mobile-menu-home.svg" alt=""><a href="../index.html">Home</a></li>
                <li><img src="../img/svg/mobile-menu-list.svg" alt=""><a href="../lms.html">LMS</a></li>
                <li class="mobile-hide"><a href="#">About Us</a></li>
                <li><img src="../img/svg/mobile-menu-contact.svg" alt=""><a href="#">Contact Us</a></li>
                <li class="read-screen"><a href="#">Read Screen</a></li>
                <li>
                <select name="" id="">
                    <option value="English">English</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                </select>
                </li>
                <li class="mobile-cta" style="display: none;"><a href="register.html">Sign Up</a></li>
                <li class="mobile-cta" style="display: none;"><a href="home-login.html">Log In</a></li>
            </ul>
            <div class="top-right">
                <div class="notification">
                    <img src="../img/svg/notifications.svg" alt="">
                    <div class="line"></div>
                </div>
                <div class="profile">
                    <a href="dashboard.html"><img src="../img/image-icon.png" alt=""></a>
                </div>
                <div class="name">
                    <a href="javascript:void(0)" onclick="toggleDropdown()"><p>PRINCE</p></a>
                </div>
                <div class="id">
                    <a href="javascript:void(0)" onclick="toggleDropdown()"><p>2023/Q4/7223</p></a>
                </div>
                <div class="dropdown" onclick="toggleDropdown()">
                    <a href="javascript:void(0)"><i class="fa-solid fa-caret-down"></i></a>
                    <div class="dropdown-content" id="myDropdown">
                      <a href="dashboard.html"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                      <a href="settings.html"><i class="fa-solid fa-circle-user"></i> Profile</a>
                      <a href="settings.html"><i class="fa-solid fa-lock"></i> Security</a>
                      <a href="settings.html"><i class="fa-solid fa-list-check"></i> Preferences</a>
                      <a href="#" onclick="confirmLogout()"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    
    <div class="content">
        <div class="product-left">
            <div class="product-image">
                <img src="../img/dell-xps-13-screen-lid1 1.png" alt="">
            </div>
            <p>Dell XPS Laptop </p>
            <div class="specification">
                <p class="title">Device Specs</p>
                <p class="sub-title">Dell XPS 13 laptop is a windows 10 laptop with a 13.30inch display that has a resolution of 3200 by 1800pixels. It is powered by a Corei5 processor and it comes with a 8gb of RAM. The Dell XPS 13 packs 128GB of SSD storage. Graphics are powered by Intel Integrated HD graphics 520.</p>
            </div>
            <p class="price-label">Price</p>
            <p class="price">₦300,000</p>
        </div>
        
        <div class="product-details">
            <form id="cardDetails" action="">
                <p class="title">Bank Card</p>
                <p class="sub-title">Please select pickup method</p>
                <div class="top-card-details">
                    <div class="logo">
                        <img src="../img/svg/card-web-logo.svg" alt="">
                    </div>
                    <div class="top-right-details">
                        <p class="amount">N 305,000</p>
                        <p class="email">nebeolisachiedozie@gmail.com</p>
                    </div>
                </div>
                <div class="bank-card-box">
                    <div class="card-info">
                        <p>Please enter your card details</p>
                    </div>
                    <div class="bank-card-details">
                        <div class="card">
                            <div class="card-number">
                                <p>CARD NUMBER</p>
                            </div>
                            <div class="row">
                                <img src="../img/svg/card.svg" alt="">
                                <input id="cardNumber" type="text" required>
                                <img src="../img/svg/lock.svg" alt="">
                            </div>
                        </div>
                    <div class="line"></div>
                    <div class="card-box-container">
                        <div class="card">
                            <div class="card-number">
                                <p>VALID TILL</p>
                            </div>
                            <div class="row">
                                <img src="../img/svg/card.svg" alt="">
                                <input id="validMonth" type="text" placeholder="MM/YY" required>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-number">
                                <p>CVV</p>
                            </div>
                            <div class="row">
                                <img src="../img/svg/card.svg" alt="">
                                <input id="cvvNumber" type="text" placeholder="123" required>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="remember">
                    <input id="remember" type="radio">
                    <p>Remember this card</p>
                </div>
                <div class="choose-payment-method">
                    <div class="component">
                        <select name="" id="">
                            <option value="Choose-payment-method">Choose payment method</option>
                            <option value="cash-payment">Cash payment on delivery</option>
                            <option value="digital-payment">Digital payment</option>
                        </select>
                    </div>
                </div>

                <div class="agreement">
                    <input id="agreement" type="radio" required>
                    <p>I agree to the <span><a href=""> terms and conditions</a></span></p>
                </div>
                <button id="login" class="confirm-btn">PAY N305,000</button>
                <!-- <a id="login"  href="card-details.html" class="confirm-btn">
                    <p class="confirm-order">PAY N305,000</p>
                </a> -->
            </form>
        </div>
    </div>

    <!-- Start of the checkout pop up -->
    <div class="login-popup card-login-popup">
        <form action="">
            <div onclick="showConfirmation()" class="order-confirmation card-confirmation">
                <div class="title">
                <p class="title-text">Transaction in progress</p>
                <div class="divider" style="width: 100%;"></div>
                <p class="confirm-text">This will only take a few seconds...</p>
                <img class="confirm" src="../img/Equip 1000 Spinner.png">
                </div>
                <div class="escrow-system-security">
                    <div class="lock">
                        <img src="../img/svg/Security-lock.svg" alt="">
                    </div>
                    <p>Secured with our escrow system</p>
                </div>
            </div>
        </form>
    </div>
    <!-- End of Checkout popup -->

    <!-- Section for the mobile bottom nav -->
   <div class="mobile-bottom-nav-bar">
    <a href="cash-on-delivery.html" class="bar-box">
      <img src="../img/svg/arrow_back.svg" alt="">
      <div class="nav-text">Back</div>
    </a>
    <a href="laptop-confirmation.html" class="bar-box">
      <img src="../img/svg/arrow_forward.svg" alt="">
      <div class="nav-text">Next</div>
    </a>
    <a href="" class="bar-box">
      <img src="../img/svg/speaker_phone-mobile.svg" alt="">
      <div class="nav-text">Read</div>
    </a>
    <a href="" class="bar-box">
      <img src="../img/svg/g_translate-mobile.svg" alt="">
      <div class="nav-text">Translate</div>
    </a>
   </div>
       

    <script src="../js/header.js"></script>
    <script src="../js/menu-drop-down.js"></script>
    <script src="../js/checkout-pop-up.js"></script>
    <script src="../js/logout.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <script>
        document.getElementById("cardDetails").addEventListener("submit", function(event) {
            // Prevent the form from submitting normally
            event.preventDefault();
    
            // Check if all input fields and dropdowns have been filled or selected
            var cardNumber = document.getElementById("cardNumber").value;
            var validMonth = document.getElementById("validMonth").value;
            var cvvNumber = document.getElementById("cvvNumber").value;
            var paymentMethod = document.querySelector(".choose-payment-method select").value;
            var agreementChecked = document.getElementById("agreement").checked;
    
            // Check if all required fields are filled or selected
            if (cardNumber && validMonth && cvvNumber && paymentMethod !== "Choose-payment-method" && agreementChecked) {
                // If all fields are filled or selected, submit the form
                this.submit();
            } else {
                // If any required field is empty or not selected, display an error message or handle it as needed
                alert("Please fill out all fields and select a payment method.");
                // You can also add specific error handling for each field if needed
            }
        });
    </script>
    
    
    <script>
        $(document).ready(function () {
    'user strict';
    
    (function () {
        var login = {
          init: function () {
            this.cacheDom();
            this.addEvents();
          },
          cacheDom: function () {
            this.$loginBtn    = $('#login');
            this.$loginPopup  = $('.login-popup');
            this.$closePopup  = $('.close-icon');
          },
          addEvents: function () {
            this.$loginBtn.on('click', this.showLogin.bind(this));
            this.$closePopup.on('click', this.hideLogin.bind(this));
          },
          showLogin: function (e) {
            e.preventDefault();
            this.$loginPopup.fadeIn('fast');
          },
          hideLogin: function () {
            this.$loginPopup.fadeOut('fast');
          }
        }
        login.init();
  
    })();
  });
    </script>
    <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65b535410ff6374032c5932c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>
</html>
