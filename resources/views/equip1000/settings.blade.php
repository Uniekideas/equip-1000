<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="icon" href="/img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/eqip/register.css">
    <link rel="stylesheet" href="/css/eqip/welcome.css">
    <!-- <link rel="stylesheet" href="../css/eqip/lms-landing.css"> -->
    <link rel="stylesheet" href="/css/eqip/product-checkout.css">
    <link rel="stylesheet" href="/css/lms/settings.css">
    <link rel="stylesheet" href="/css/eqip/reserve/dash-header.css">
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
                <li><a href="../index.html">Home</a></li>
                <li><a href="../lms.html">LMS</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
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
    
    <div class="register-container">
        <!-- left side -->
        <div class="left-side dash-left-side" style="padding-top: 100px">
            <p>Welcome to your <span>Dashboard</span></p>
            <!-- <p class="welcome-sub-text">You can find your purchased devices and payment status here</p> -->
            <p class="sub-text">You can find your purchased devices and payment status here</p>
            <div class="refer">
                <img src="../img/refer-icon.png" alt="">
                <p class="refer-text">Refer your friends</p>
                <p class="refer-subtext">Refer your friends and families who are educators to be part of this empowerement train and get some incentives</p>
                <a class="refer-btn" href="">Refer Now</a>
                
            </div>
        </div>

        <!-- Right side -->
        <div class="settings-right-side">
            <div class="settings-container">
                <div class="tabs">
                  <div class="tab" onclick="openTab('personal')">Personal Information and Preferences</div>
                  <div class="tab" onclick="openTab('course-management')">Course Management</div>
                  <div class="tab" onclick="openTab('learning-preference')">Learning Preferences</div>
                  <div class="tab" onclick="openTab('comunication')">Communication and Collaboration</div>
                  <div class="tab" onclick="openTab('notification')">Notifications</div>
                  <div class="tab" onclick="openTab('security')">Security and Privacy</div>
                </div>
      
                <div class="content">
                  <div id="personal" class="tab-content">
                      <p>Personal Information and Preferences</p>
                      <form id="settingsForm">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName">
                        <br>
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName">
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                        <br>
                        <label for="password">Current Password:</label>
                        <input type="password" id="password" name="password">
                        <br>
                        <label for="password">New Password:</label>
                        <input type="password" id="password" name="password">
                        <br>
                        <label for="role">Role:</label>
                        <select id="role" name="role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <br>
                        <label for="profileImage">Profile Image:</label>
                        <input type="file" id="profileImage" name="profileImage" accept="image/*">
                        <br>
                        <br>
                        <button type="button" onclick="saveSettings()">Save Settings</button>
                    </form>
                  </div>
      
                  <div id="course-management" class="tab-content">
                      <p>Course management settings content goes here...</p>
                  </div>
                  <div id="learning-preference" class="tab-content">
                      <!-- Notifications settings content goes here -->
                      <p>Learning Preferences settings content goes here...</p>
                  </div>
                  <div id="comunication" class="tab-content">
                    <!-- Notifications settings content goes here -->
                    <p>Communications settings content goes here...</p>
                </div>
                <div id="notification" class="tab-content">
                  <!-- Notifications settings content goes here -->
                  <p>Notifications settings content goes here...</p>
              </div>
              <div id="security" class="tab-content">
                <!-- Notifications settings content goes here -->
                <p>Securities settings content goes here...</p>
            </div>
                 
              </div>
              </div>
        </div>
        <!-- For small screen devices -->
        <div class="mobile-side settings-mobile-side">
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

    <script src="../js/header.js"></script>
    <script src="../js/accordion.js"></script>
    <script src="../js/menu-drop-down.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/logout.js"></script>
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
