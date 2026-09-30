<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandan Kumar | Full Stack Developer</title>
    
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Scroll Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- Animated Background Elements -->
    <div class="bg-shape shape-1"></div>
    <div class="bg-shape shape-2"></div>

    <!-- Header / Navbar -->
    <header class="header" data-aos="fade-down" data-aos-duration="1000">
        <a href="#" class="logo">{ Chandan.dev }</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#achievements">Achievements</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="home" id="home">
        <div class="home-content glass-effect" data-aos="fade-right" data-aos-duration="1200">
            <!-- Dynamic Geolocation Greeting -->
            <h3 id="geo-greeting">Hello, It's Me</h3>
            <h1>Chandan Kumar</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>I specialize in building scalable web apps, dynamic portals, and workflow automation systems using PHP, MySQL, and modern JavaScript.</p>
            
            <div class="social-media">
                <a href="https://api.whatsapp.com/send?phone=917070858881" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/techboychandan55/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="mailto:chandan15042004gupta@gmail.com"><i class="fa-regular fa-envelope"></i></a>
            </div>
            
           <div class="action-buttons">
                <a href="#contact" class="btn">Let's Connect</a>
                <!-- Resume Modal Trigger -->
                <div onclick="openModal('resume-modal')" class="btn btn-secondary" style="cursor: pointer;">View Resume <i class="fa-solid fa-file-lines"></i></div>
            </div>
        </div>

        <!-- 3D Rotating Carousel -->
        <div class="home-img" data-aos="fade-left" data-aos-duration="1200">
            <div class="scene">
                <div class="carousel">
                    <!-- 5 Images for 3D Rotation -->
                    <div class="carousel-item"><img src="images/profile1.jpeg" alt="Profile"></div>
                    <div class="carousel-item"><img src="images/vbyld1.jpg" alt="VBYLD"></div>
                    <div class="carousel-item"><img src="images/district_exchange.jpeg" alt="Exchange"></div>
                    <div class="carousel-item"><img src="images/nic_camp.jpg" alt="NIC Camp"></div>
                    <div class="carousel-item"><img src="images/SAI.jpeg" alt="SAI"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="heading">About <span>Me</span></h2>
        <div class="about-content glass-effect">
            <h3>Who Am <span style="color: #00abf0;">I?</span></h3>
<p>A passionate Full-Stack Developer blending technical expertise with social responsibility.</p>

<!-- Modern About List -->
<ul style="text-align: left; margin: 25px auto 0; max-width: 600px; list-style: none; padding: 0; font-size: 15px; color: #b3b3b3;">
    <li style="margin-bottom: 12px;"><i class="fa-solid fa-graduation-cap" style="color: #00abf0; margin-right: 15px; font-size: 18px;"></i> <strong>Education:</strong> B.Tech in IT from UCET, VBU Hazaribag.</li>
    <li style="margin-bottom: 12px;"><i class="fa-solid fa-briefcase" style="color: #00abf0; margin-right: 15px; font-size: 18px;"></i> <strong>Experience:</strong> 1-Year PM Internship (IT & HR) at NTPC Mining Limited.</li>
    <li style="margin-bottom: 12px;"><i class="fa-solid fa-hands-holding-circle" style="color: #00abf0; margin-right: 15px; font-size: 18px;"></i> <strong>Community:</strong> Active NSS Volunteer driving social impact.</li>
    <li style="margin-bottom: 12px;"><i class="fa-solid fa-code" style="color: #00abf0; margin-right: 15px; font-size: 18px;"></i> <strong>Mission:</strong> Building scalable web apps to solve real-world problems.</li>
</ul>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h2 class="heading" data-aos="fade-down">Latest <span>Projects</span></h2>
        
        <div class="project-container">
            <!-- Project 0: KDCMP "प्रगति पथ"-->
            <div class="project-card glass-effect" data-aos="fade-up" data-aos-delay="200">
                <div class="card-content">
                    <i class="fa-solid fa-envelope-circle-check project-icon"></i>
                   <h3>KDCMP "प्रगति पथ" Portal</h3>
<ul style="text-align: left; margin: 10px 0 20px; padding-left: 20px; font-size: 14px; color: #b3b3b3;">
    <li style="margin-bottom: 6px;">Engineered a centralized HR portal for task assignment and tracking.</li>
    <li style="margin-bottom: 6px;">Developed dynamic reporting modules for operational transparency.</li>
    <li>Implemented Brevo API to automate workflow email notifications.</li>
</ul>
                </div>
                <div class="card-overlay">
                    <a href="https://hrweeklyplanner.freedev.app/login.php" target="_blank" class="overlay-btn live-btn">
                        <i class="fa-solid fa-rocket"></i> Live Demo
                    </a>
                    <button onclick="openModal('modal-2')" class="overlay-btn detail-btn">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </button>
                </div>
            </div>    

            <!-- Project 1: SecureVoice -->
            <div class="project-card glass-effect" data-aos="fade-up" data-aos-delay="100">
                <div class="card-content">
                    <i class="fa-solid fa-shield-halved project-icon"></i>
                    <h3>SecureVoice</h3>
<ul style="text-align: left; margin: 10px 0 20px; padding-left: 20px; font-size: 14px; color: #b3b3b3;">
    <li style="margin-bottom: 5px;">Anonymous student grievance portal.</li>
    <li style="margin-bottom: 5px;">End-to-end encrypted submissions.</li>
    <li>Real-time report status tracking.</li>
</ul>
                </div>
                <div class="card-overlay">
                    <a href="https://www.linkedin.com/posts/techboychandan55_secure-voice-activity-7439847557469683712-X-o0" target="_blank" class="overlay-btn live-btn">
                        <i class="fa-solid fa-rocket"></i> Live Demo
                    </a>
                    <button onclick="openModal('modal-1')" class="overlay-btn detail-btn">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </button>
                </div>
            </div>

            <!-- Project 2: KDCMP Suggestion Portal -->
            <div class="project-card glass-effect" data-aos="fade-up" data-aos-delay="200">
                <div class="card-content">
                    <i class="fa-solid fa-envelope-circle-check project-icon"></i>
                    <h3>KDCMP Suggestion Portal</h3>
<ul style="text-align: left; margin: 10px 0 20px; padding-left: 20px; font-size: 14px; color: #b3b3b3;">
    <li style="margin-bottom: 6px;"><strong>Interactive UI:</strong> Modern design featuring modal popup forms and a live statistics dashboard.</li>
    <li style="margin-bottom: 6px;"><strong>Data Management:</strong> Includes seamless CSV data export for quick administrative analysis.</li>
    <li><strong>Smart Alerts:</strong> Fully integrated with Brevo API for automated email notifications.</li>
</ul>
                </div>
                <div class="card-overlay">
                    <a href="https://oneline-suggestion.hatchable.site/" target="_blank" class="overlay-btn live-btn">
                        <i class="fa-solid fa-rocket"></i> Live Demo
                    </a>
                    <button onclick="openModal('modal-2')" class="overlay-btn detail-btn">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </button>
                </div>
            </div>

            <!-- Project 3: Kharcha Pani -->
            <div class="project-card glass-effect" data-aos="fade-up" data-aos-delay="300">
                <div class="card-content">
                    <i class="fa-solid fa-wallet project-icon"></i>
                    <h3>Kharcha Pani</h3>
<ul style="text-align: left; margin: 10px 0 20px; padding-left: 20px; font-size: 14px; color: #b3b3b3;">
    <li style="margin-bottom: 6px;"><strong>Financial Tracking:</strong> Intuitive dashboard for logging and managing daily personal expenses.</li>
    <li style="margin-bottom: 6px;"><strong>Secure Backend:</strong> Engineered with PHP and MySQL for reliable data storage and quick retrieval.</li>
    <li><strong>User-Centric UI:</strong> Designed a clean, responsive interface for seamless financial monitoring.</li>
</ul>
                </div>
                <div class="card-overlay">
                    <a href="https://www.linkedin.com/posts/techboychandan55_kharchapani-activity-7439846895793090560-P6FH" target="_blank" class="overlay-btn live-btn">
                        <i class="fa-solid fa-rocket"></i> Live Demo
                    </a>
                    <button onclick="openModal('modal-3')" class="overlay-btn detail-btn">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </button>
                </div>
            </div>

            <!-- Project 4: Shram samart punch Portal -->
            <div class="project-card glass-effect" data-aos="fade-up" data-aos-delay="200">
                <div class="card-content">
                    <i class="fa-solid fa-envelope-circle-check project-icon"></i>
                    <h3>Shram Samart Punch Portal</h3>
<ul style="text-align: left; margin: 10px 0 20px; padding-left: 20px; font-size: 14px; color: #b3b3b3;">
    <li style="margin-bottom: 6px;"><strong>Location Verification:</strong> Integrated GPS Geolocation API to ensure site-specific attendance punching.</li>
    <li style="margin-bottom: 6px;"><strong>Photo Authentication:</strong> Engineered a circular camera capture logic to authenticate contract workers.</li>
    <li><strong>Smart Logic:</strong> Custom backend validation to prevent duplicate entries and track daily IN/OUT status.</li>
</ul>
                </div>
                <div class="card-overlay">
                    <a href="https://kdwpunch.infinityfreeapp.com/index.php" target="_blank" class="overlay-btn live-btn">
                        <i class="fa-solid fa-rocket"></i> Live Demo
                    </a>
                    <button onclick="openModal('modal-2')" class="overlay-btn detail-btn">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume Modal -->
    <div class="modal-overlay" id="resume-modal">
        <div class="modal-box glass-effect" style="max-width: 800px; width: 95%; height: 80vh; display: flex; flex-direction: column;">
            <span class="close-btn" onclick="closeModal('resume-modal')" style="right: 15px; top: 10px;">&times;</span>
            <h2 style="margin-bottom: 20px;">My Resume</h2>
            <iframe src="images/Chandan_Kumar_Resume.pdf" style="width: 100%; height: 100%; border: none; border-radius: 10px; flex-grow: 1;"></iframe>
            <a href="images/Chandan_Kumar_Resume.pdf" download class="btn" style="margin-top: 15px; width: 200px; align-self: center;">Download PDF <i class="fa-solid fa-download"></i></a>
        </div>
    </div>

    <!-- Achievements Section -->
    <section class="achievements" id="achievements">
        <h2 class="heading" data-aos="fade-down">My <span>Achievements</span></h2>
        
        <div class="timeline">
            <!-- Achievement 1 -->
            <div class="timeline-box left glass-effect" data-aos="fade-right">
                <div class="timeline-content">
                    <img src="images/vbyld1.jpg" alt="VBYLD 2026" class="achievement-img">
                    <h3>Viksit Bharat Young Leaders Dialogue 2026</h3>
<p>
    National-level delegate at <strong>Bharat Mandapam, New Delhi</strong>. Showcased youth leadership and innovative thinking to secure the <strong>3rd position at the state level</strong> while representing Jharkhand.
</p>
                </div>
            </div>

            <!-- Achievement 2 -->
            <div class="timeline-box right glass-effect" data-aos="fade-left">
                <div class="timeline-content">
                    <img src="images/district_exchange.jpeg" alt="District Exchange Programme" class="achievement-img">
                    <h3>District Youth Exchange Programme</h3>
<p>
    Demonstrated a strong commitment to youth development by <strong>successfully completing</strong> the 7-day program in Sahibganj, with a core focus on <strong>teamwork and cultural integration</strong>.
</p>
                </div>
            </div>

            <!-- Achievement 3 -->
            <div class="timeline-box left glass-effect" data-aos="fade-right">
                <div class="timeline-content">
                    <img src="images/nic_camp.jpg" alt="NIC Camp" class="achievement-img">
                    <h3>National Integration Camp (NIC)</h3>
<p>Proudly represented the state at the NIC. Collaborated with diverse youth from across India to foster <strong>cultural exchange</strong>, teamwork, and <strong>national integration</strong>.</p>
                </div>
            </div>

             <!-- Achievement 4 -->
            <div class="timeline-box right glass-effect" data-aos="fade-left">
                <div class="timeline-content">
                    <img src="images/SAI.jpeg" alt="Community" class="achievement-img">
                    <h3>Community & Sports Leadership</h3>
<p>
    Drove community initiatives as an active <strong>NSS Volunteer</strong> and qualified for the <strong>MY Bharat Budget Quest 2026</strong>. Demonstrated strong organizational skills by successfully hosting the <strong>"Sikri Chess Champions"</strong> and corporate sports events at KDCMP.
</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact" data-aos="fade-up">
        <h2 class="heading">Contact <span>Me</span></h2>
        
        <div class="contact-container glass-effect">
            <div class="contact-info">
               <h3>Let's Work Together!</h3>
<p>
    While I continuously sharpen my core computer science fundamentals for elite tech exams like GATE, JPSC, and CIL MT Systems, my passion for building real-world applications never stops. I am always open to discussing innovative startup ideas, freelance web development projects, or exciting tech collaborations.
</p>
                
                <div class="contact-links">
                    <a href="https://api.whatsapp.com/send?phone=917070858881" class="btn" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp Me</a>
                </div>
            </div>

            <form action="contact_process.php" method="POST" class="contact-form">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <textarea name="message" cols="30" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" name="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="footer glass-effect" style="padding: 15px; white-space: nowrap; overflow: hidden;">
    <p style="font-size: 14px; margin: 0;">&copy; 2026 <strong>Chandan Kumar</strong> | Made with <i class="fa-solid fa-heart" style="color: #ff004f;"></i> & Code</p>
</footer>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Typed.js for Typewriter Effect -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- JS Link -->
    <script src="script.js"></script>
    
</body>
</html>