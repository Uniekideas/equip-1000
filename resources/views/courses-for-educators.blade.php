<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses for Educators - EQUIP1000</title>
    <link rel="icon" href="img/svg/card-web-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/lms/lms-courses.css">
    <link rel="stylesheet" href="css/lms/courses-for-educators.css">
    <link rel="stylesheet" href="css/lms/search.css">
    <link rel="stylesheet" href="css/lms/dashboard-header.css">
    <link rel="stylesheet" href="css/lms/dash-side-bar.css">
    <link rel="stylesheet" href="css/lms/dash-content.css">
    <link rel="stylesheet" href="css/eqip/mobile-bottom-nav.css">
    <link rel="stylesheet" href="css/lms/notification.css">
</head>
<body>
    <!-- start of the header section -->
    <div class="sticky">
      <div class="small-screen-navbar">
          <a class="logo" href="lms.html"><img src="img/logo/Equip1000 logo.svg" /></a>
          <div class="top-right">
              <div class="notification">
                  <i class="fa-regular fa-bell" id="notificationBtn"></i>
                  <div class="line"></div>
              </div>
              <div class="profile">
                  <a href="lms-dashboard.html"><img src="img/image-icon.png" alt=""></a>
              </div>
              <div class="name">
                  <a href="lms-dashboard.html"><p>PRINCE</p></a>
              </div>
              <div class="id">
                <a href="javascript:void(0)"><p>2023/Q4/7223</p></a>
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
        <a class="side-link" href="lms-dashboard.html">
            <img src="img/svg/Dashboard Icon.svg" alt="Dashboard Icon">
            <p>Dashboard</p>
        </a>
        <a class="side-link active" href="lms-courses.html">
          <img src="img/svg/Courses Icon.svg" alt="Couse Icon">
          <p>Courses</p>
        </a>
        <a class="side-link" href="assessment/assessment-instructions.html">
          <img src="img/svg/Assessment Icon.svg" alt="Assessment Icon">
          <p>Assessment</p>
        </a>
        <a class="side-link" href="certificates/certificates.html">
          <img src="img/svg/certificate.svg" alt="Certificate Icon">
          <p>Certificates</p>
        </a>
        <a class="side-link" href="messaging/mesaging.html">
          <img src="img/svg/Messaging Icon.svg" alt="Message Icon">
          <p>Messaging</p>
        </a>
        <a class="side-link" href="instructors/instructors.html">
          <img src="img/svg/Instructors Icon.svg" alt="Instructors Icon">
          <p>Instructors</p>
        </a>
        <a class="side-link community" href="" style="pointer-events: none;">
          <img src="img/svg/community-icon.svg" alt="Community Icon">
          <p>Community</p>
        </a>
        <a class="side-link" href="settings/settings.html">
          <img src="img/svg/Settings Icon.svg" alt="Settings Icon">
          <p>Settings</p>
        </a>
        <a class="side-link logout" href="#" onclick="confirmLogout()">
          <img src="img/svg/Logout Icon.svg" alt="Logout Icon">
          <p>Logout</p>
        </a>
    </div>
    <!-- end of the Left side bar -->

    <!-- Start of main content -->
    <div class="content">
        <div class="categories-container lms-categories-container">
            <div class="search">
                <input type="search" id="searchInput" placeholder="Search for your preferred course">
                <img src="img/svg/search-icon.svg" alt="">
                <!-- search items -->
                <ul id="itemList">
                  <li class="hidden"><a href="courses/microsoft-office-tools.html"><img src="img/ms office course.png" alt=""> Microsoft Office Suite</a></li>
                  <li class="hidden"><a href="courses/google-suite-tools.html"><img src="img/G-Suite.png" alt=""> Google Suite</a></li>
                  <li class="hidden"><a href="courses/canva-for-educators.html"><img src="img/Canva for Educators Image.png" alt=""> Canvas for Educators</a></li>
                  <li class="hidden"><a href="courses/kahoot-for-educators.html"><img src="img/Kahoot for Educators Image.png" alt=""> Kahoot for Educators</a></li>
                  <li class="hidden"><a href="courses/microsoft-innovative-programme.html"><img src="img/Microsoft Office Suite Image.png" alt=""> Microsoft Innovative Educators Programme</a></li>
                  <li class="hidden"><a href="courses/social-media-tools.html"><img src="img/social.png" alt=""> Social Media Tools for Educators</a></li>
                  <li class="hidden"><a href="courses/ai-tools.html"><img src="img/ai-tools.png" alt=""> AI Tools for Educators</a></li>
                  <li class="hidden"><a href="courses/virtual-learning-platform.html"><img src="img/virtual-learning.png" alt=""> Virtual Learning Platforms</a></li>
                </ul>
                <p id="noResultsMessage" class="hidden"><span class="fa-regular fa-face-frown"></span> No courses found</p>
            </div>
            <div class="courses-for-educators-header">
                <p>Courses for Educators</p>
            </div>
            <div class="courses-for-educators-description">
                <p>Transform your classroom and ignite a passion for learning with our transformative courses for educators.<br>
                <span>Dive deep into diverse learning pathways tailored to your specific needs and aspirations. Enhance your pedagogical skills, master effective teaching strategies, and discover innovative tools to engage and empower all students.</span>
                </p>
            </div>
            <div class="courses-for-educators-container" style="border: none;">
                <div class="container-box">
                    <p class="title">Microsoft Office Suite</p>
                    <p class="sub-title">Elevate your efficiency and productivity with our comprehensive Microsoft Suite course</p>
                    <a href="courses/microsoft-office-tools.html" class="course-image">
                        <img src="img/Microsoft Office Suite Image-c.png" alt="Office suites">
                        <p>Microsoft Office Suite</p>
                    </a>
                </div>
                <div class="container-box">
                    <p class="title">Google Suite</p>
                    <p class="sub-title">Unlock a world of collaboration and efficiency with our comprehensive Google Suite course</p>
                    <a href="courses/google-suite-tools.html" class="course-image">
                        <img src="img/Google Suit Image-c.png" alt="G suites">
                        <p>Google Suite</p>
                    </a>
                </div>
                <div class="container-box">
                    <p class="title">Canva for Educators</p>
                    <p class="sub-title">Learn to design anything, anytime, anywhere with Canva!</p>
                    <a href="courses/canva-for-educators.html" class="course-image">
                        <img src="img/Canva for Educators Image-c.png" alt="Canva">
                        <p>Canva for Educators</p>
                    </a>
                </div>
                <div class="container-box mobile-kahoot">
                    <p class="title">Kahoot for Educators</p>
                    <p class="sub-title">Learn to turn learning into an engaging and interactive adventure with Kahoot!</p>
                    <a href="courses/kahoot-for-educators.html" class="course-image">
                        <img src="img/Kahoot for Educators Image-c.png" alt="Kahoot">
                        <p>Kahoot for Educators</p>
                    </a>
                </div>
                <div class="container-box mobile-innovative">
                    <p class="title">Microsoft Innovative Educator Programme</p>
                    <p class="sub-title">Ignite your passion for education: Join the Microsoft Innovative Educator Programme and become an expert</p>
                    <a href="courses/microsoft-innovative-programme.html" class="course-image">
                        <img src="img/Microsoft Innovative Educator Programme Image-c.png" alt="Microsoft Innovative">
                        <p>Microsoft Innovative Educator Programme</p>
                    </a>
                </div>
                <div class="container-box mobile-social">
                    <p class="title">Social Media Tools for Educators</p>
                    <p class="sub-title">Engage your students and build a strong classroom community via Social Media</p>
                    <a href="courses/social-media-tools.html" class="course-image">
                        <img src="img/Social Media Tools for Educators Image-c.png" alt="Social Media Tool">
                        <p>Social Media Tools for Educators</p>
                    </a>
                </div>
                <div class="container-box mobile-ai">
                    <p class="title">AI Tools for Educators</p>
                    <p class="sub-title">Harness the power of Artificial Intelligence (AI) to transform your classroom</p>
                    <a href="courses/ai-tools.html" class="course-image">
                        <img src="img/AI Tools for Educators Image-c.png" alt="AI Tool">
                        <p>AI Tools for Educators</p>
                    </a>
                </div>
                <div class="container-box mobile-virtual">
                    <p class="title">Virtual Learning Platforms</p>
                    <p class="sub-title">Unlock and harness the power of Virtual Learning</p>
                    <a href="courses/virtual-learning-platform.html" class="course-image">
                        <img src="img/Virtual Learning Platforms Image-c.png" alt="">
                        <p>Virtual Learning Platforms</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section for the mobile bottom nav -->
   <div class="mobile-bottom-nav-bar">
    <a href="#" class="bar-box">
      <img src="img/svg/arrow_back.svg" alt="">
      <div class="nav-text">Back</div>
    </a>
    <a href="" class="bar-box">
      <img src="img/svg/arrow_forward.svg" alt="">
      <div class="nav-text">Next</div>
    </a>
    <a href="" class="bar-box">
      <img src="img/svg/speaker_phone-mobile.svg" alt="">
      <div class="nav-text">Read</div>
    </a>
    <a href="" class="bar-box">
      <img src="img/svg/g_translate-mobile.svg" alt="">
      <div class="nav-text">Translate</div>
    </a>
   </div>



    <script src="js/menu-drop-down.js"></script>
    <script src="js/header.js"></script>
    <script src="js/lms-mobile-menu.js"></script>
    <script src="js/search.js"></script>
    <script src="js/notofication.js"></script>
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
        window.location.href = "lms.html"; // Replace "index.html" with your actual index page

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