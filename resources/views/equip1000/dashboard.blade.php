<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="/img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/eqip/welcome.css">
    <link rel="stylesheet" href="/css/eqip/mobile-bottom-nav.css">
    <link rel="stylesheet" href="/css/eqip/reserve/register.css">
    <link rel="stylesheet" href="/css/eqip/reserve/dash-header.css">
    <link rel="stylesheet" href="/css/eqip/refer.css">

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
                  <a href="javascript:void(0)"><p onclick="toggleDropdown()">2023/Q4/7223</p></a>
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
    
    <div class="register-container">
        <!-- left side -->
        <div class="left-side dash-left-side" style="padding-top: 100px">
            <p>Welcome to your <span>Dashboard</span></p>
            <p class="sub-text">You can find your purchased devices and payment status here</p>
            <div class="refer">
                <img src="../img/refer-icon.png" alt="">
                <p class="refer-text">Refer your friends</p>
                <p class="refer-subtext">Refer your friends and families who are educators to be part of this empowerement train and get some incentives</p>
                <a class="refer-btn" id="referBnt" href="javascript:void(0)">Refer Now</a>
            </div>
        </div>

        <!-- Pop up for refer a friend -->
        <div id="referModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="refer-title">Refer a Friend</h1>
                <div id="referForm">
                    <label for="referrerEmail">Your Email:</label>
                    <input type="email" id="referrerEmail" required><br>
                    <label for="referredEmail">Friend's Email:</label>
                    <input type="email" id="referredEmail" required><br>
                    <div class="refer-btn-wrapper">
                        <button onclick="referFriend()">Refer</button>
                    </div>
                </div>
                <div id="result"></div>
                <div id="error"></div>
                <div id="warning"></div>
            </div>
        </div>
        <!-- End of pop up for refer a friend -->

        <!-- Right side -->
        <div class="dash-right-side">
            <div class="dashboard-mobile-top-section">
                <div class="title">Welcome to your Dashboard, Prince</div>
                <div class="sub-title">You can find your purchased devices and payment status here</div>
            </div>
            <div class="dashborad-title">
                <a class="title-text" href="welcome.html">Purchase a Device &#x2B62;</a>
            </div>
            <div class="dashboard-info">
                <div class="dashboard-products">
                    <p class="title">Your Devices - 3</p>
                    <div class="purchased-products">
                        <div class="items">
                            <img src="../img/dell-xps-laptop.png" alt="">
                            <div class="item-description">
                                <p class="model">Dell XPS Laptop</p>
                                <p class="amount">N300,000</p>
                            </div>
                        </div>
                        <div class="items">
                            <img src="../img/hp-pavilion-laptop.png" alt="">
                            <div class="item-description">
                                <p class="model">HP Pavilion Laptop</p>
                                <p class="amount">N500,000</p>
                            </div>
                        </div>
                        <div class="items">
                            <img src="../img/svg/mi-fi-transparent.svg" alt="">
                            <div class="item-description">
                                <p class="model">MTN Mi-fi</p>
                                <p class="amount">N20,000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-container">
                    <div class="payment-box">
                        <div class="payment-status">
                            <p class="status">Payment Status</p>
                        </div>
                        <div class="color-code">
                            <div class="code-box">
                                <div class="green"></div>
                                <p>Payment Complete</p>
                            </div>
                        </div>
                        <div class="color-code" style="margin-left: -20px;">
                            <div class="code-box">
                                <div class="orange"></div>
                                <p class="orange-text">Payment In Progress</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-breakdown">
                    <div class="breakdown-box">
                        <div class="accordion-item payment-item">
                            <div class="accordion-header dash-header" onclick="toggleAccordion(this)">
                                <div class="green-color-box"></div>
                                <p>Dell XPS Laptop</p>
                                <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                            </div>
                            <div class="accordion-content dash-content">
                                <div class="payment-content">
                                    <div class="row">
                                        <p class="word">Total amount payable</p>
                                        <p class="figure">N300,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word" >Installment agreement</p>
                                        <p class="figure">6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installment Paid</p>
                                        <p class="figure">1/6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount paid</p>
                                        <p class="figure" style="color: #20a612;">N84,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installments remaining</p>
                                        <p class="figure">5/6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount remaining</p>
                                        <p class="figure" style="color: #ff2727;">N416,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breakdown-box">
                        <div class="accordion-item payment-item">
                            <div class="accordion-header dash-header" onclick="toggleAccordion(this)">
                                <div class="green-color-box"></div>
                                <p>MTN Mi-Fi</p>
                                <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                            </div>
                            <div class="accordion-content dash-content">
                                <div class="payment-content">
                                    <div class="row">
                                        <p class="word">Total amount payable</p>
                                        <p class="figure">N20,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installment agreement</p>
                                        <p class="figure">4</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installment Paid</p>
                                        <p class="figure">1/4</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount paid</p>
                                        <p class="figure" style="color: #20a612;">N5,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installments remaining</p>
                                        <p class="figure">3/4</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount remaining</p>
                                        <p class="figure" style="color: #ff2727;">N15,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breakdown-box">
                        <div class="accordion-item payment-item">
                            <div class="accordion-header dash-header" onclick="toggleAccordion(this)">
                                <div class="orange-color-box"></div>
                                <p>Dell XPS Laptop</p>
                                <span class="arrow"><i class="fa fa-chevron-down"></i></span>
                            </div>
                            <div class="accordion-content dash-content">
                                <div class="payment-content">
                                    <div class="row">
                                        <p class="word">Total amount payable</p>
                                        <p class="figure">N500,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installment agreement</p>
                                        <p class="figure">6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installment Paid</p>
                                        <p class="figure">1/6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount paid</p>
                                        <p class="figure" style="color: #20a612;">N84,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Installments remaining</p>
                                        <p class="figure">5/6</p>
                                    </div>
                                    <div class="row">
                                        <p class="word">Total amount remaining</p>
                                        <p class="figure" style="color: #ff2727;">N416,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        <!-- For small screen devices -->
        <div class="mobile-side dash-mobile-side">
            <p>Welcome to your <span>Dashboard</span></p>
            <p class="sub-text">You can find your purchased devices and payment status here</p>
            <div class="mobile-refer">
                <img src="../img/refer-icon.png" alt="">
                <p class="refer-text">Refer your friends</p>
                <p class="refer-subtext">Refer your friends and families who are educators to be part of this empowerement train and get some incentives</p>
                <a class="refer-btn" href="">Refer Now</a> 
            </div>
        </div> 
    </div>
   </div>
</div>

<!-- Section for the mobile bottom nav -->
<div class="mobile-bottom-nav-bar">
    <a href="confirm.html" class="bar-box">
      <img src="../img/svg/arrow_back.svg" alt="">
      <div class="nav-text">Back</div>
    </a>
    <a href="welcome.html" class="bar-box">
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
    <script src="../js/accordion.js"></script>
    <script src="../js/menu-drop-down.js"></script>
    <script src="../js/logout.js"></script>
    <script src="../js/refer.js"></script>
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
