<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glaize Anne Torres | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ==================== NAVBAR ==================== -->
<nav id="navbar">
    <div class="nav-container">
        <a href="#home" class="nav-logo">
            <span class="pixel-bracket">[</span>GAT<span class="pixel-bracket">]</span>
        </a>
        <div class="nav-links" id="navLinks">
            <a href="#about" class="nav-link" data-target="about">ABOUT</a>
            <a href="#projects" class="nav-link" data-target="projects">PROJECTS</a>
            <a href="#skills" class="nav-link" data-target="skills">SKILLS</a>
            <a href="#education" class="nav-link" data-target="education">EDUCATION</a>
            <a href="#contact" class="nav-link" data-target="contact">CONTACT</a>
        </div>
        <div class="nav-toggle" id="navToggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<!-- ==================== HOME SECTION ==================== -->
<section id="home" class="home-section fade">
    <div class="pixel-grid"></div>
    <div class="home-content">
        <div class="home-subtitle">> SYSTEM BOOTING_</div>
        <h1 class="home-title">
            <span class="glitch-text" data-text="GLAIZE ANNE">GLAIZE ANNE</span>
            <span class="glitch-text" data-text="TORRES">TORRES</span>
        </h1>
        <div class="home-typed-container">
            <span class="typed-prefix">$</span>
            <span class="typed-text" id="typedText"></span>
            <span class="typed-cursor">_</span>
        </div>
        <div class="home-cta">
            <a href="#about" class="pixel-btn">
                <span>ENTER PORTFOLIO</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>SCROLL DOWN</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ==================== ABOUT SECTION ==================== -->
<section id="about" class="about-section fade">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">WHO AM I?</h2>
            <div class="pixel-divider"></div>
        </div>

        <div class="about-grid">
            <!-- Left: Image -->
            <div class="about-image-wrapper">
                <div class="pixel-frame">
                    <img src="portfolio-images/aize.jpg" alt="Glaize Anne Torres" class="about-image">
                </div>
                <div class="image-caption">
                    <span class="caption-text">GLAIZE ANNE TORRES</span>
                    <span class="caption-title">BS COMPUTER ENGINEERING</span>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="about-content">
                <div class="greeting">
                    <span class="greeting-line"></span>
                    <span class="greeting-text">HELLO! I AM</span>
                    <span class="greeting-line"></span>
                </div>
                
                <h3 class="about-name">GLAIZE ANNE <span class="name-highlight">TORRES</span></h3>
                
                <p class="about-description">
                    A Computer Engineering student with a passion for building smart hardware solutions and interactive experiences. I combine technical skills in embedded systems with creative design to develop innovative technology.
                </p>

                <div class="info-panel">
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-calendar-alt"></i></div>
                        <div class="info-detail">
                            <span class="info-label">AGE</span>
                            <span class="info-value">21 YEARS</span>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-birthday-cake"></i></div>
                        <div class="info-detail">
                            <span class="info-label">BIRTHDAY</span>
                            <span class="info-value">AUGUST 23, 2004</span>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-detail">
                            <span class="info-label">LOCATION</span>
                            <span class="info-value">NAVOTAS CITY</span>
                        </div>
                    </div>
                </div>

                <div class="tech-stack">
                    <span class="tech-badge">Arduino</span>
                    <span class="tech-badge">Raspberry Pi</span>
                    <span class="tech-badge">ESP32</span>
                    <span class="tech-badge">NodeMCU</span>
                    <span class="tech-badge">C++</span>
                    <span class="tech-badge">IoT</span>
                </div>

                <a href="#" class="download-resume-btn" id="downloadResume">
                    <span>DOWNLOAD RESUME</span>
                    <i class="fas fa-download"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROJECTS SECTION ==================== -->
<section id="projects" class="projects-section fade">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">TECHNICAL EXPERIENCES</h2>
            <div class="pixel-divider"></div>
        </div>

        <div class="projects-grid">
            <!-- IntelliPark Card -->
            <div class="project-card" data-project="intellipark">
                <div class="project-card-inner">
                    <div class="project-icon"><i class="fas fa-parking"></i></div>
                    <h3 class="project-title">INTELLIPARK</h3>
                    <p class="project-subtitle">Parking Management System</p>
                    <div class="project-year">2025</div>
                    <div class="project-tags">
                        <span>Arduino</span>
                        <span>Firebase</span>
                        <span>IoT</span>
                    </div>
                    <div class="project-hover">
                        <span>VIEW DETAILS</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <!-- Hospital System Card -->
            <div class="project-card" data-project="hospital">
                <div class="project-card-inner">
                    <div class="project-icon"><i class="fas fa-hospital"></i></div>
                    <h3 class="project-title">HOSPITAL INFORMATION SYSTEM</h3>
                    <p class="project-subtitle">Research Project</p>
                    <div class="project-year">2024</div>
                    <div class="project-tags">
                        <span>Java</span>
                        <span>Research</span>
                    </div>
                    <div class="project-hover">
                        <span>VIEW DETAILS</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IntelliPark Modal (hidden by default) -->
<div id="intellipark-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>INTELLIPARK</h2>
            <span class="close-modal" data-modal="intellipark">&times;</span>
        </div>
        <div class="modal-body">
            <div class="modal-icon"><i class="fas fa-parking"></i></div>
            <p class="modal-subtitle">Parking Management Kiosk & Website (2025)</p>
            
            <a href="https://intellipark2025-327e9.web.app/intelli.html" target="_blank" class="live-site-btn">
                VISIT LIVE WEBSITE <i class="fas fa-external-link-alt"></i>
            </a>
            
            <div class="project-image-grid">
                <img src="portfolio-images/intellipark1.jpg" alt="IntelliPark system 1" class="clickable-project-img">
                <img src="portfolio-images/intellipark2.jpg" alt="IntelliPark system 2" class="clickable-project-img">
            </div>
            
            <div class="modal-section">
                <h3>Overview</h3>
                <p>A smart parking system designed to streamline parking operations with real-time monitoring and automated payments.</p>
            </div>
            <div class="modal-section">
                <h3>Key Features</h3>
                <ul>
                    <li><i class="fas fa-qrcode"></i> QR code generation for entry/exit</li>
                    <li><i class="fas fa-satellite-dish"></i> Real-time slot tracking with IoT sensors</li>
                    <li><i class="fas fa-credit-card"></i> Integrated payment system</li>
                    <li><i class="fas fa-chart-line"></i> Admin dashboard for monitoring</li>
                </ul>
            </div>
            <div class="modal-section">
                <h3>Technologies Used</h3>
                <div class="tech-list">
                    <span>Arduino</span>
                    <span>Raspberry Pi</span>
                    <span>Firebase</span>
                    <span>HTML/CSS</span>
                    <span>JavaScript</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hospital System Modal (updated) -->
<div id="hospital-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>HOSPITAL INFORMATION SYSTEM</h2>
            <span class="close-modal" data-modal="hospital">&times;</span>
        </div>
        <div class="modal-body">
            <div class="modal-icon"><i class="fas fa-hospital"></i></div>
            <p class="modal-subtitle">Research Project (Candidate for Best Thesis)</p>
            
            <div class="modal-section">
                <h3>Overview</h3>
                <p>A comprehensive system for digitizing hospital workflows, from patient records to inventory management.</p>
            </div>
            <div class="modal-section">
                <h3>Key Features</h3>
                <ul>
                    <li><i class="fas fa-file-medical"></i> Patient records management</li>
                    <li><i class="fas fa-calendar-check"></i> Appointment scheduling</li>
                </ul>
            </div>
            <div class="modal-section">
                <h3>Technologies Used</h3>
                <div class="tech-list">
                    <span>Java</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== SKILLS SECTION (chip-only) ==================== -->
<section id="skills" class="skills-section fade">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">TECHNICAL ABILITIES</h2>
            <div class="pixel-divider"></div>
        </div>

        <div class="skills-showcase">
            <!-- Programming -->
            <div class="skill-category">
                <div class="category-header">
                    <i class="fas fa-code"></i>
                    <h3>PROGRAMMING</h3>
                </div>
                <div class="skill-grid">
                    <span class="skill-chip">Java</span>
                    <span class="skill-chip">Python</span>
                    <span class="skill-chip">HTML/CSS</span>
                    <span class="skill-chip">C++ (Arduino)</span>
                </div>
            </div>

            <!-- Hardware & IoT -->
            <div class="skill-category">
                <div class="category-header">
                    <i class="fas fa-microchip"></i>
                    <h3>HARDWARE & IOT</h3>
                </div>
                <div class="skill-grid">
                    <span class="skill-chip">Arduino</span>
                    <span class="skill-chip">Raspberry Pi</span>
                    <span class="skill-chip">ESP32</span>
                    <span class="skill-chip">NodeMCU</span>
                    <span class="skill-chip">Sensors</span>
                    <span class="skill-chip">IoT Integration</span>
                </div>
            </div>

            <!-- Creative -->
            <div class="skill-category">
                <div class="category-header">
                    <i class="fas fa-paint-brush"></i>
                    <h3>CREATIVE</h3>
                </div>
                <div class="skill-grid">
                    <span class="skill-chip">Animation</span>
                    <span class="skill-chip">Graphic Design</span>
                    <span class="skill-chip">Video Editing</span>
                    <span class="skill-chip">Photo Editing</span>
                    <span class="skill-chip">Canva</span>
                </div>
            </div>

            <!-- Soft Skills -->
            <div class="skill-category">
                <div class="category-header">
                    <i class="fas fa-tools"></i>
                    <h3>SOFT SKILLS</h3>
                </div>
                <div class="skill-grid">
                    <span class="skill-chip">Problem Solving</span>
                    <span class="skill-chip">Team Collaboration</span>
                    <span class="skill-chip">Organization</span>
                    <span class="skill-chip">Active Listening</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== EDUCATION SECTION ==================== -->
<section id="education" class="education-section fade">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">ACADEMIC JOURNEY</h2>
            <div class="pixel-divider"></div>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2022 - PRESENT</div>
                    <h3>BS Computer Engineering</h3>
                    <p class="timeline-school">STI College - Caloocan</p>
                    <p class="timeline-desc">Candidate for Best Thesis (Symposium)</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2020 - 2022</div>
                    <h3>TVL ICT - Animation</h3>
                    <p class="timeline-school">AMA Computer College - Caloocan</p>
                    <p class="timeline-desc">Senior High School</p>
                </div>
            </div>
        </div>

        <div class="certificates-preview">
            <h3 class="preview-title">TRAININGS & CERTIFICATES</h3>
            <div class="certificates-grid">
                <div class="certificate-card" data-cert="cert1">
                    <img src="portfolio-images/ize_cert_1.png" alt="Bridging the Gap: Rebuilding Trust Between Employers and Employees in the Modern Filipino Workplace">
                    <div class="certificate-title">Bridging the Gap: Rebuilding Trust Between Employers and Employees in the Modern Filipino Workplace</div>
                </div>
                <div class="certificate-card" data-cert="cert2">
                    <img src="portfolio-images/ize_cert2.png" alt="Internet of Things Conference 2025">
                    <div class="certificate-title">Internet of Things Conference 2025</div>
                </div>
                <div class="certificate-card" data-cert="cert3">
                    <img src="portfolio-images/ize_cert3.png" alt="Network Configuration and Troubleshooting Essentials">
                    <div class="certificate-title">Network Configuration and Troubleshooting Essentials</div>
                </div>
                <div class="certificate-card" data-cert="cert4">
                    <img src="portfolio-images/ize_cert4.png" alt="Chaos to Clarity: Using PM Tools to Strengthen Leadership and Team Collaboration">
                    <div class="certificate-title">Chaos to Clarity: Using PM Tools to Strengthen Leadership and Team Collaboration</div>
                </div>
                <div class="certificate-card" data-cert="cert5">
                    <img src="portfolio-images/ize_cert5.png" alt="Basics of Audio/Video Processing">
                    <div class="certificate-title">Basics of Audio/Video Processing</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CONTACT SECTION ==================== -->
<section id="contact" class="contact-section fade">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">CONTACT ME FOR INQUIRY</h2>
            <div class="pixel-divider"></div>
        </div>

        <div class="contact-showcase">
            <!-- Top Row - Contact Cards -->
            <div class="contact-cards">
                <div class="contact-card">
                    <div class="card-pixel-corner"></div>
                    <div class="contact-card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-card-content">
                        <span class="card-label">EMAIL</span>
                        <a href="mailto:torresglaizeanne@gmail.com" class="card-value">torresglaizeanne@gmail.com</a>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-pixel-corner"></div>
                    <div class="contact-card-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-card-content">
                        <span class="card-label">PHONE</span>
                        <a href="tel:09617153112" class="card-value">0961 715 3112</a>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-pixel-corner"></div>
                    <div class="contact-card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="contact-card-content">
                        <span class="card-label">NAME</span>
                        <span class="card-value name-dual">
                            <span>GLAIZE ANNE TORRES</span>
                            <span class="name-separator">/</span>
                            <span class="name-alt">AIZE TORRES</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Bottom Row - Two Column Layout -->
            <div class="contact-bottom">
                <!-- Left Column - Social Panel with working links -->
                <div class="contact-left-panel">
                    <div class="social-panel">
                        <h3 class="panel-subtitle">
                            <span class="subtitle-bracket">[</span> CONNECT <span class="subtitle-bracket">]</span>
                        </h3>
                        <div class="social-links-container">
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/in/glaize-anne-torres-16900b3b3/" class="social-link" target="_blank">
                                <div class="social-icon-wrapper"><i class="fab fa-linkedin-in"></i></div>
                                <span class="social-name">LINKEDIN</span>
                                <span class="social-arrow">→</span>
                            </a>
                            <!-- GitHub -->
                            <a href="https://github.com/aize-hub" class="social-link" target="_blank">
                                <div class="social-icon-wrapper"><i class="fab fa-github"></i></div>
                                <span class="social-name">GITHUB</span>
                                <span class="social-arrow">→</span>
                            </a>
                            <!-- Instagram (formerly Twitter) -->
                            <a href="https://www.instagram.com/abzeesim_efg/" class="social-link" target="_blank">
                                <div class="social-icon-wrapper"><i class="fab fa-instagram"></i></div>
                                <span class="social-name">INSTAGRAM</span>
                                <span class="social-arrow">→</span>
                            </a>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/share/1KZD4vUwvr/" class="social-link" target="_blank">
                                <div class="social-icon-wrapper"><i class="fab fa-facebook-f"></i></div>
                                <span class="social-name">FACEBOOK</span>
                                <span class="social-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="contact-right-panel">
                    <h3 class="panel-subtitle">
                        <span class="subtitle-bracket">[</span> SEND MESSAGE <span class="subtitle-bracket">]</span>
                    </h3>
                    <form id="contactForm" class="modern-contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="modern-input" placeholder=" " required>
                                <label for="name" class="form-label">YOUR NAME</label>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="modern-input" placeholder=" " required>
                                <label for="email" class="form-label">EMAIL ADDRESS</label>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" class="modern-input" placeholder=" " required>
                                <label for="subject" class="form-label">SUBJECT</label>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <textarea id="message" name="message" class="modern-input textarea" placeholder=" " rows="4" required></textarea>
                                <label for="message" class="form-label">YOUR MESSAGE</label>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="pixel-btn-submit">
                                <span>SEND MESSAGE</span>
                                <i class="fas fa-paper-plane"></i>
                                <div class="btn-overlay"></div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Modal (for enlarging certificates) -->
<div id="certModal" class="modal">
    <div class="modal-content certificate-modal-content">
        <span class="close-modal-btn" id="closeCertModal">&times;</span>
        <img class="certificate-full" id="certFullImage" src="" alt="Certificate">
    </div>
</div>

<!-- Project Image Modal (for enlarging IntelliPark images) -->
<div id="projectImgModal" class="modal">
    <div class="modal-content project-img-modal-content">
        <span class="close-modal-btn" id="closeProjectImgModal">&times;</span>
        <img class="project-img-full" id="projectFullImage" src="" alt="Project image">
    </div>
</div>

<!-- Main JavaScript -->
<script src="script.js"></script>
</body>
</html>