<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - EQUIP1000</title>
    <link rel="icon" href="/img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/lms/lms-courses.css">
    <link rel="stylesheet" href="/css/lms/courses-for-educators.css">
    <link rel="stylesheet" href="/css/lms/search.css">
    <link rel="stylesheet" href="/css/lms/settings.css">
    <link rel="stylesheet" href="/css/lms/dashboard-header.css">
    <link rel="stylesheet" href="/css/lms/dash-side-bar.css">
    <link rel="stylesheet" href="/css/lms/dash-content.css">
    <link rel="stylesheet" href="/css/eqip/mobile-bottom-nav.css">
    <link rel="stylesheet" href="/css/lms/notification.css">
</head>
<body>
    <!-- start of the header section -->
    <div class="sticky">
      <div class="small-screen-navbar">
          <a class="logo" href="../lms.html"><img src="../img/logo/Equip1000 logo.svg" /></a>
          <div class="top-right">
              <div class="notification">
                  <i class="fa-regular fa-bell" id="notificationBtn"></i>
                  <div class="line"></div>
              </div>
              <div class="profile">
                  <a href="../lms-dashboard.html"><img src="../img/image-icon.png" alt=""></a>
              </div>
              <div class="name">
                  <a href="../lms-dashboard.html"><p>PRINCE</p></a>
              </div>
              <div class="id">
                <a href="javascript:void(0)"><p>2023/Q4/7223</p></a>
            </div>
              <div class="dropdown" onclick="toggleDropdown()">
                  <a href="javascript:void(0)"><i class="fa-solid fa-caret-down"></i></a>
                  <div class="dropdown-content" id="myDropdown">
                      <a href="../lms-dashboard.html"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                      <a href="../settings/settings.html"><i class="fa-solid fa-circle-user"></i> Profile</a>
                      <a href="../settings/settings.html"><i class="fa-solid fa-lock"></i> Security</a>
                      <a href="../settings/settings.html"><i class="fa-solid fa-list-check"></i> Preferences</a>
                      <a href="#" onclick="confirmLogout()"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                  </div>
              </div>            
          </div>
          <div class="second-top-right">
            <a href="" class="read-container">
              <p>Read Screen</p>
            </a> 
            <div class="language-selection">
              <select name="" id="">
                <option value="English">English</option>
                <option value="French">French</option>
                <option value="Spanish">Spanish</option>
              </select>
            </div>
          </div>
      </div>
  </div>
    <!-- End of the header section -->

    <!-- Pop up for notification -->
  <div id="notificationModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>You have no unread notifications</p>
    </div>
  </div>
  <!-- End of notification pop up -->

    <!-- Start of the Left side bar -->
    <!-- Mobile menu toggle button -->
    <div id="mobile-menu-toggle">&#9776;</div>
    <div class="sidebar-active">
        <a class="side-link" href="../lms-dashboard.html">
            <img src="../img/svg/Dashboard Icon.svg" alt="Dashboard Icon">
            <p>Dashboard</p>
        </a>
        <a class="side-link" href="../lms-courses.html">
          <img src="../img/svg/Courses Icon.svg" alt="Couse Icon">
          <p>Courses</p>
        </a>
        <a class="side-link" href="../assessment/assessment-instructions.html">
          <img src="../img/svg/Assessment Icon.svg" alt="Assessment Icon">
          <p>Assessment</p>
        </a>
        <a class="side-link" href="../certificates/certificates.html">
          <img src="../img/svg/certificate.svg" alt="Certificate Icon">
          <p>Certificates</p>
        </a>
        <a class="side-link" href="../messaging/mesaging.html">
          <img src="../img/svg/Messaging Icon.svg" alt="Message Icon">
          <p>Messaging</p>
        </a>
        <a class="side-link" href="../instructors/instructors.html">
          <img src="../img/svg/Instructors Icon.svg" alt="Instructors Icon">
          <p>Instructors</p>
        </a>
        <a class="side-link community" href="" style="pointer-events: none;">
          <img src="../img/svg/community-icon.svg" alt="Community Icon">
          <p>Community</p>
        </a>
        <a class="side-link active" href="../settings/settings.html">
          <img src="../img/svg/Settings Icon.svg" alt="Settings Icon">
          <p>Settings</p>
        </a>
        <a class="side-link logout" href="#" onclick="confirmLogout()">
          <img src="../img/svg/Logout Icon.svg" alt="Logout Icon">
          <p>Logout</p>
        </a>
    </div>
    <!-- end of the Left side bar -->

    <!-- Start of main content -->
    <div class="settings-main-content">
        <div class="settings-container">
          <div class="tabs">
            <div class="tab" onclick="openTab('personal')">Personal Information and Preferences</div>
            <div class="tab" onclick="openTab('course-management')">Course Management</div>
            <div class="tab" onclick="openTab('learning-preference')">Learning Preferences</div>
            <div class="tab" onclick="openTab('comunication')">Communication and Collaboration</div>
            <div class="tab" onclick="openTab('notification')">Notifications</div>
            <div class="tab" onclick="openTab('security')">Security and Privacy</div>
          </div>

          <div class="settings-content">
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
                
                <p>Course management settings content goes here</p>
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



    <script src="../js/menu-drop-down.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/lms-mobile-menu.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/notofication.js"></script>
    <!-- Script for logout -->
    <script>
      function confirmLogout() {
    // Display a confirmation prompt
    var confirmLogout = window.confirm("Are you sure you want to logout?");

    // Check the user's choice
    if (confirmLogout) {
        // If the user clicked OK, perform the logout action
        alert("Logout successful!");
        
        // Redirect to the index page
        window.location.href = "../lms.html"; // Replace "index.html" with your actual index page

    } else {
        // If the user clicked Cancel, do nothing or handle accordingly
        alert("Logout canceled.");
    }
}
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