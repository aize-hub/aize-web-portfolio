// ==================== FADE ON SCROLL ====================
const faders = document.querySelectorAll('.fade');

const appearOptions = {
    threshold: 0.2,
    rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('show');
    });
}, appearOptions);

faders.forEach(fader => appearOnScroll.observe(fader));

// ==================== NAVBAR SCROLL EFFECT ====================
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ==================== MOBILE NAVIGATION TOGGLE ====================
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// ==================== SMOOTH SCROLLING & ACTIVE LINK ====================
const navLinksList = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

function setActiveLink() {
    let scrollY = window.scrollY;

    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 150;
        const sectionId = section.getAttribute('id');

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinksList.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-target') === sectionId) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', setActiveLink);

navLinksList.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');
        const targetSection = document.getElementById(targetId);
        
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
            navLinks.classList.remove('active'); // close mobile menu
        }
    });
});

// ==================== TYPING EFFECT (HOME SECTION) ====================
const typedText = document.getElementById('typedText');
if (typedText) {
    const phrases = [
        'BS Computer Engineering Student',
        'IoT Enthusiast',
        'Hardware Developer',
        'Creative Technologist'
    ];
    
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        const currentPhrase = phrases[phraseIndex];
        
        if (isDeleting) {
            typedText.textContent = currentPhrase.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typedText.textContent = currentPhrase.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentPhrase.length) {
            isDeleting = true;
            setTimeout(type, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            setTimeout(type, 500);
        } else {
            setTimeout(type, isDeleting ? 50 : 100);
        }
    }

    setTimeout(type, 1000);
}

// ==================== WARP STARFIELD ====================
const warpSection = document.getElementById('warp');
const canvas = document.getElementById('warp-canvas');

if (warpSection && canvas) {
    const ctx = canvas.getContext('2d');
    let width, height;
    let stars = [];
    const STAR_COUNT = 300;
    let warpSpeed = 5;

    function initStars() {
        stars = [];
        for (let i = 0; i < STAR_COUNT; i++) {
            stars.push({
                x: Math.random() * width - width / 2,
                y: Math.random() * height - height / 2,
                z: Math.random() * width,
                prevZ: 0
            });
        }
    }

    function setCanvasDimensions() {
        width = warpSection.offsetWidth;
        height = warpSection.offsetHeight;
        canvas.width = width;
        canvas.height = height;
        initStars();
    }

    function drawStars() {
        ctx.clearRect(0, 0, width, height);
        
        const centerX = width / 2;
        const centerY = height / 2;

        for (let i = 0; i < stars.length; i++) {
            let s = stars[i];
            s.prevZ = s.z;
            s.z -= warpSpeed;

            if (s.z <= 0) {
                s.z = width;
                s.x = Math.random() * width - width / 2;
                s.y = Math.random() * height - height / 2;
                s.prevZ = s.z;
            }

            let factor = 200 / s.z;
            let prevFactor = 200 / s.prevZ;

            let x2d = centerX + s.x * factor;
            let y2d = centerY + s.y * factor;
            let prevX2d = centerX + s.x * prevFactor;
            let prevY2d = centerY + s.y * prevFactor;

            let size = Math.max(0.5, 3 * (1 - s.z / width));
            let opacity = Math.min(1, 2 * (1 - s.z / width));

            ctx.beginPath();
            ctx.strokeStyle = `rgba(255, 75, 210, ${opacity})`;
            ctx.lineWidth = size;
            ctx.moveTo(prevX2d, prevY2d);
            ctx.lineTo(x2d, y2d);
            ctx.stroke();
        }

        requestAnimationFrame(drawStars);
    }

    function updateWarpSpeed() {
        const rect = warpSection.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        const visibleTop = Math.max(0, rect.top);
        const visibleBottom = Math.min(viewportHeight, rect.bottom);
        const visibleAmount = Math.max(0, visibleBottom - visibleTop);
        const visibleRatio = visibleAmount / viewportHeight;
        warpSpeed = 3 + visibleRatio * 20;
    }

    window.addEventListener('scroll', updateWarpSpeed);
    window.addEventListener('load', () => {
        setCanvasDimensions();
        updateWarpSpeed();
        drawStars();
    });
    window.addEventListener('resize', setCanvasDimensions);
}

// ==================== PROJECT MODALS ====================
const projectCards = document.querySelectorAll('.project-card');
const modals = document.querySelectorAll('.modal');
const closeButtons = document.querySelectorAll('.close-modal');

projectCards.forEach(card => {
    card.addEventListener('click', function() {
        const projectId = this.getAttribute('data-project');
        const modal = document.getElementById(projectId + '-modal');
        
        if (modal) {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
    });
});

closeButtons.forEach(btn => {
    btn.addEventListener('click', function() {
        const modalId = this.getAttribute('data-modal');
        const modal = document.getElementById(modalId + '-modal');
        
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

window.addEventListener('click', function(event) {
    modals.forEach(modal => {
        if (event.target == modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        modals.forEach(modal => {
            if (modal.style.display === 'flex') {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    }
});

// ==================== DOWNLOAD RESUME (PDF) ====================
const downloadBtn = document.getElementById('downloadResume');
if (downloadBtn) {
    downloadBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        const pdfPath = 'Torres, Glaize Anne_Resume.pdf';
        
        fetch(encodeURI(pdfPath))
            .then(response => {
                if (!response.ok) throw new Error('PDF file not found (404)');
                return response.blob();
            })
            .then(blob => {
                const url = window.URL.createObjectURL(new Blob([blob], { type: 'application/pdf' }));
                const a = document.createElement('a');
                a.href = url;
                a.download = 'Glaize_Anne_Torres_Resume.pdf';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
                
                alert('✅ Resume download started!');
            })
            .catch(error => {
                alert('❌ Error downloading resume: ' + error.message);
            });
    });
}

// ==================== PARALLAX EFFECT (HOME GRID) ====================
window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const homeSection = document.querySelector('.home-section');
    
    if (homeSection) {
        const grid = document.querySelector('.pixel-grid');
        if (grid) {
            grid.style.transform = `translateY(${scrollY * 0.5}px)`;
        }
    }
});

// ==================== CONTACT FORM SUBMISSION ====================
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const button = form.querySelector("button[type='submit']");
    const span = button.querySelector("span");

    button.disabled = true;
    span.textContent = "SENDING...";

    fetch("contacts.php", {
        method: "POST",
        body: formData
    })
    .then(async (res) => {
        const raw = await res.text();
        let data;

        try {
            data = JSON.parse(raw);
        } catch (error) {
            throw new Error(raw || "Unexpected server response");
        }

        if (!res.ok) {
            throw new Error(data.message || "Request failed");
        }

        return data;
    })
    .then(data => {
        if (data.status === "success") {
            alert("✅ Message sent successfully!");
            form.reset();
        } else {
            alert("❌ " + data.message);
        }
    })
    .catch((err) => {
        alert("❌ Something went wrong: " + err);
    })
    .finally(() => {
        button.disabled = false;
        span.textContent = "SEND MESSAGE";
    });
});

// ==================== CERTIFICATE MODAL (ZOOM) ====================
const certCards = document.querySelectorAll('.certificate-card');
const certModal = document.getElementById('certModal');
const certFullImage = document.getElementById('certFullImage');
const closeCertModal = document.getElementById('closeCertModal');

certCards.forEach(card => {
    card.addEventListener('click', function() {
        const imgSrc = this.querySelector('img').src;
        certFullImage.src = imgSrc;
        certModal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });
});

closeCertModal.addEventListener('click', function() {
    certModal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

// ==================== PROJECT IMAGE MODAL (IntelliPark) ====================
const projectImages = document.querySelectorAll('.clickable-project-img');
const projectImgModal = document.getElementById('projectImgModal');
const projectFullImage = document.getElementById('projectFullImage');
const closeProjectImgModal = document.getElementById('closeProjectImgModal');

projectImages.forEach(img => {
    img.addEventListener('click', function(e) {
        e.stopPropagation(); // prevent triggering the project card click
        projectFullImage.src = this.src;
        projectImgModal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });
});

closeProjectImgModal.addEventListener('click', function() {
    projectImgModal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

// ==================== CLOSE MODALS BY CLICKING OUTSIDE ====================
window.addEventListener('click', function(event) {
    if (event.target == certModal) {
        certModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    if (event.target == projectImgModal) {
        projectImgModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});
