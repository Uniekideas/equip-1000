<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="/img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/eqip/lms-landing.css">
    <link rel="stylesheet" href="/css/eqip/reserve/home-login.css">
    <link rel="stylesheet" href="/css/eqip/mobile-bottom-nav.css">
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
                <li class="mobile-cta"><a href="register.html">Sign Up</a></li>
                <li class="mobile-cta"><a href="home-login.html">Log In</a></li>
            </ul>
            <div class="header-cta-container">
                <a class="r-sign-up2" href="register.html">Sign up</a>
                <!-- <a class="log-in" href="home-login.html">Log in</a> -->
          </div>
        </div>
    </div>

    <div class="register-container">
        <!-- left side -->
        <div class="left-side login-side">
            <p>Join the empowerment train, by equipped by <span>EQUIP1000</span> Project</p>
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
                    <input type="email" id="referrerEmail" autocomplete="email" required><br>
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
        <div class="right-side">
            <div class="form-title">
                <p class="title">Log in</p>
                <p class="sub-title">Log in to your account using your email and password</p>
            </div>
            <div class="reg-form-container">
                <form style="width: 100%;" action="dashboard.html">
                    <div class="col-1" style="width: 95%;">
                        <label for="uname">Username</label>
                        <input type="email" id="uname" name="uname" placeholder="Email or User ID" style="width: 100%;" autocomplete="email" required>
                        
                        <label for="pwd">Password</label>
                        <div class="password-container">
                            <input type="password" id="pwd" name="pwd" placeholder="********" style="width: 100%;" autocomplete="current-password" required>
                            <span class="password-toggle" onclick="togglePasswordVisibility('pwd')"><img src="../img/svg/visible-eye.svg" alt=""></span>
                        </div>
                        
                    </div>
                    <div class="finish-next-btn">
                        <button type="submit">Log In</button>
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
    <script src="../js/passwordvisibility.js"></script>
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

  <script>
    function togglePasswordVisibility(inputId) {
        var inputField = document.getElementById(inputId);
        var icon = document.querySelector(`#${inputId} + .password-toggle img`);

        if (inputField.type === "password") {
            inputField.type = "text";
            icon.src = '../img/svg/remove_red_eye.svg';
        } else {
            inputField.type = "password";
            icon.src = '../img/svg/visible-eye.svg';
        }
    }
</script>
</body>
</html>
