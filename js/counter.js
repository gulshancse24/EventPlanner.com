document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const animationDuration = 2000; // Duration in milliseconds
    let hasAnimated = false;

    function animateCounter(counter) {
        const target = parseInt(counter.dataset.target);
        const startTime = Date.now();
        
        function updateCounter() {
            const currentTime = Date.now();
            const progress = Math.min((currentTime - startTime) / animationDuration, 1);
            
            // Easing function for smooth animation
            const easeOutQuad = progress * (2 - progress);
            const currentValue = Math.floor(easeOutQuad * target);
            
            counter.textContent = currentValue;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }

        updateCounter();
    }

    function checkScroll() {
        if (hasAnimated) return;

        const achievementsSection = document.querySelector('.achievements');
        const sectionTop = achievementsSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight * 0.75) {
            counters.forEach(animateCounter);
            hasAnimated = true;
            window.removeEventListener('scroll', checkScroll);
        }
    }

    // Initial check and scroll listener
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Check on page load
});