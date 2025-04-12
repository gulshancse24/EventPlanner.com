// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Navbar scroll effect
// Remove or comment out this section if it exists
/*
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    } else {
        navbar.style.background = '#fff';
        navbar.style.boxShadow = '0 2px 5px rgba(0,0,0,0.1)';
    }
});
*/

// Login and Signup Modal
// Modal functionality
// Modal elements
document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.querySelector('.login-btn');
    const signupBtn = document.querySelector('.signup-btn');
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');
    const closeBtns = document.querySelectorAll('.close');
    const switchToSignup = document.querySelector('.switch-to-signup');
    const switchToLogin = document.querySelector('.switch-to-login');

    // Open modals
    loginBtn.addEventListener('click', () => {
        loginModal.classList.add('active');
    });

    signupBtn.addEventListener('click', () => {
        signupModal.classList.add('active');
    });

    // Close modals
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            loginModal.classList.remove('active');
            signupModal.classList.remove('active');
        });
    });

    // Switch between modals
    switchToSignup.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.classList.remove('active');
        signupModal.classList.add('active');
    });

    switchToLogin.addEventListener('click', (e) => {
        e.preventDefault();
        signupModal.classList.remove('active');
        loginModal.classList.add('active');
    });

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === loginModal) {
            loginModal.classList.remove('active');
        }
        if (e.target === signupModal) {
            signupModal.classList.remove('active');
        }
    });
});

// Form submissions
// Add this at the beginning of your script.js
// Message popup function - place this at the top of your script
// Update the showMessage function
// Update the error message handling
function showMessage(message, isError = false) {
    const existingPopup = document.querySelector('.message-popup');
    if (existingPopup) {    
        existingPopup.remove();
    }

    const popup = document.createElement('div');
    popup.className = `message-popup ${isError ? 'error' : 'success'}`;
    popup.innerHTML = `
        <i class="${isError ? 'fas fa-exclamation-circle' : 'fas fa-check-circle'}"></i>
        <span>${message}</span>
    `;
    document.body.appendChild(popup);

    // Remove any existing blur effects
    document.querySelectorAll('*').forEach(element => {
        element.style.filter = 'none';
    });

    // Show popup
    setTimeout(() => popup.classList.add('active'), 100);

    // Remove popup after delay
    setTimeout(() => {
        popup.classList.remove('active');
        setTimeout(() => popup.remove(), 300);
    }, 3000);
}

// Update the signup form handler
document.getElementById('signupForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    
    try {
        const formData = new FormData(form);
        // Rename username field to fullName to match database column
        const fullName = formData.get('username');
        formData.delete('username');
        formData.append('fullName', fullName);
        
        const response = await fetch('php/signup.php', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            showMessage('Registration successful! Please login.');
            document.getElementById('signupModal').classList.remove('active');
            document.getElementById('loginModal').classList.add('active');
            form.reset();
        } else {
            showMessage(data.message, true);
        }
    } catch (error) {
        showMessage('An error occurred. Please try again.', true);
    }
});

// Update the login form handler
// Single login form handler
// Modal functionality
// Remove duplicate modal functionality and keep only this version
document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.querySelector('.login-btn');
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');
    const closeBtns = document.querySelectorAll('.close');

    // Open login modal
    loginBtn.addEventListener('click', () => {
        loginModal.classList.add('active');
        loginModal.style.display = 'block';  // Add both for compatibility
    });

    // Close modals
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            loginModal.classList.remove('active');
            signupModal.classList.remove('active');
            loginModal.style.display = 'none';
            signupModal.style.display = 'none';
        });
    });

    // Login form handler
    // Remove the second DOMContentLoaded event listener and keep only the login form handler
    document.getElementById('loginForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const form = e.target;
        
        try {
            const formData = new FormData(form);
            const response = await fetch('php/login.php', {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            });
            
            const data = await response.json();
            console.log('Server response:', data);
            
            if (data.success) {
                window.location.replace('profile.php');
            } else {
                showMessage(data.message || 'Login failed', true);
            }
        } catch (error) {
            console.error('Login error:', error);
            showMessage('Connection error. Please try again.', true);
        }
    });
    
    // Single DOMContentLoaded event listener for all modal and form handling
    document.addEventListener('DOMContentLoaded', function() {
        const loginBtn = document.querySelector('.login-btn');
        const signupBtn = document.querySelector('.signup-btn');
        const loginModal = document.getElementById('loginModal');
        const signupModal = document.getElementById('signupModal');
        const closeBtns = document.querySelectorAll('.close');
        const switchToSignup = document.querySelector('.switch-to-signup');
        const switchToLogin = document.querySelector('.switch-to-login');
    
        // Modal functionality
        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'block';
            loginModal.classList.add('active');
        });
    
        signupBtn.addEventListener('click', () => {
            signupModal.style.display = 'block';
            signupModal.classList.add('active');
        });
    
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                loginModal.style.display = 'none';
                signupModal.style.display = 'none';
                loginModal.classList.remove('active');
                signupModal.classList.remove('active');
            });
        });
    
        // Switch between modals
        switchToSignup.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.style.display = 'none';
            signupModal.style.display = 'block';
            loginModal.classList.remove('active');
            signupModal.classList.add('active');
        });
    
        switchToLogin.addEventListener('click', (e) => {
            e.preventDefault();
            signupModal.style.display = 'none';
            loginModal.style.display = 'block';
            signupModal.classList.remove('active');
            loginModal.classList.add('active');
        });
    
        // Login form handler
        // Login form handler
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = e.target;
            
            try {
                const formData = new FormData(form);
                const response = await fetch('php/login.php', {
                    method: 'POST',
                    body: formData,
                    credentials: 'include' // Changed from 'same-origin' to 'include'
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Force a page reload to update session state
                    window.location.href = 'profile.php';
                } else {
                    showMessage(data.message || 'Login failed', true);
                }
            } catch (error) {
                console.error('Login error:', error);
                showMessage('Connection error. Please try again.', true);
            }
        });
    });
    
    // Remove these duplicate event listeners
    // loginBtn.addEventListener('click', () => { ... });
    // closeButtons.forEach(button => { ... });
    // window.addEventListener('click', (e) => { ... });
});

function showErrorPopup(message) {
    const existingPopups = document.querySelectorAll('.error-popup');
    existingPopups.forEach(popup => popup.remove());
    
    const errorPopup = document.createElement('div');
    errorPopup.className = 'error-popup';
    errorPopup.innerHTML = `
        <i class="fas fa-exclamation-circle"></i>
        ${message}
    `;
    document.body.appendChild(errorPopup);
    
    setTimeout(() => {
        errorPopup.classList.add('fade-out');
        setTimeout(() => errorPopup.remove(), 300);
    }, 3000);
}

// Switch between signup and login
document.querySelector('.switch-to-login').addEventListener('click', (e) => {
    e.preventDefault();
    signupModal.style.display = 'none';
    loginModal.style.display = 'block';
});
// Card hover effect
const cards = document.querySelectorAll('.card');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px)';
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
    });
});

