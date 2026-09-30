/* =========================================
   1. SMART GEOLOCATION GREETING 
   ========================================= */
const greetingElement = document.getElementById("geo-greeting");

if (greetingElement) {
    // 1. Default greeting (Agar location fetch hone me time lage ya fail ho jaye)
    greetingElement.innerHTML = `Welcome to my <span style="color: #00abf0;">Portfolio</span>!`;

    // 2. Fetch API for Location
    fetch('https://get.geojs.io/v1/ip/geo.json')
        .then(response => response.json())
        .then(data => {
            if (data.city) {
                // Short & Attractive Word: "Ping from [City]!"
                greetingElement.innerHTML = `Ping from <span style="color: #00abf0;">${data.city}</span>!`;
            }
        })
        .catch(error => console.warn("Location blocked by browser. Using default text."));
}

document.addEventListener("DOMContentLoaded", function() {
    
    /* =========================================
       2. DYNAMIC TYPEWRITER EFFECT
       ========================================= */
    try {
        if(document.querySelector('.multiple-text')) {
            const typed = new Typed('.multiple-text', {
                strings: [
                    'Full Stack Developer', 
                    'PM Intern at NTPC', 
                    'Tech Enthusiast', 
                    'NSS Volunteer'
                ],
                typeSpeed: 70,       
                backSpeed: 50,       
                backDelay: 1500,     
                loop: true           
            });
        }
    } catch(err) {
        console.warn("Typed.js failed to load. Check internet connection for CDN.");
        // Fallback text if typing fails
        document.querySelector('.multiple-text').innerText = "Full Stack Developer";
    }

    /* =========================================
       3. INITIALIZE AOS (SCROLL ANIMATION)
       ========================================= */
    try {
        AOS.init({
            once: false, 
            offset: 100, 
            duration: 1000 // एनिमेशन की स्पीड
        });
    } catch(err) {
        console.warn("AOS Animation failed to load. Force showing all elements.");
        // 🔥 ब्रह्मास्त्र: अगर AOS फेल हो जाए, तो छुपे हुए कंटेंट को जबरदस्ती दिखा दो
        document.querySelectorAll('[data-aos]').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
    }
});

/* =========================================
   4. MODAL POPUP FUNCTIONS
   ========================================= */
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; 
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto'; 
    }
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal-overlay')) {
        event.target.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}
