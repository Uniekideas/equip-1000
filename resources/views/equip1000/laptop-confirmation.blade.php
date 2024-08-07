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
    
    <div class="content choose-lap-content">
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
            <p class="title">Eligibility confirmation</p>
            <p class="sub-title">We need these details on your financial earnings to see if you are good fit for the laptop</p>

            <div class="product-options">
                <form id="laptopConfirmation" action="#">
                    <div class="income">
                        <p>Monthly Income</p>
                          <div class="selection">
                              <select name="monthlyIncome" id="monthlyIncome" required>
                                <option value="select">Select</option>
                                <option value="less">Below than 100,000</option>
                                <option value="more">Above than 100,000</option>
                              </select>
                          </div>
                    </div>
                    <div class="payment">
                      <p>How do you want to pay?</p>
                        <div class="selection">
                            <select name="paymentOption" id="paymentOption" required>
                              <option value="select">Select</option>
                              <option value="6-month">6 Month Installments</option>
                              <option value="1-year">1 Year Installments</option>
                            </select>
                        </div>
                    </div>
                    <div class="col button-container">
                        <button type="submit" class="product-btn waves-effect waves-light">Apply Now</button>
                    </div>
                    <div class="error-msg">
                      <p id="errorMsg"></p>
                    </div>
                </form>             
            </div>
        </div>
    </div>

    <!-- Section for the mobile bottom nav -->
   <div class="mobile-bottom-nav-bar">
    <a href="#" class="bar-box">
      <img src="../img/svg/arrow_back.svg" alt="">
      <div class="nav-text">Back</div>
    </a>
    <a href="" class="bar-box">
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
      // JS redirection code for Laptop confirmation form
    document.getElementById("laptopConfirmation").addEventListener("submit", function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Check if all required fields have been filled out
        var monthlyIncome = document.getElementById("monthlyIncome").value;
        var paymentOption = document.getElementById("paymentOption").value;

        // Check if the selected options are not the default "Select" value
        if (monthlyIncome !== "select" && paymentOption !== "select") {
            // Redirect to the next page if all required fields are filled out
            window.location.href = "laptop-checkout.html";
        } else {
            // If any required field is not filled out, display an error message or handle it as needed
            // alert("Please select monthly and payment options.");
            document.getElementById("errorMsg").innerHTML = "Please select monthly income and payment installment options.";
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
