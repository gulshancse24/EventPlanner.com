document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');
    const loginBtn = document.querySelector('.login-btn');
    const signupBtn = document.querySelector('.signup-btn');
    const showSignup = document.getElementById('showSignup');
    const showLogin = document.getElementById('showLogin');
    const closeBtns = document.getElementsByClassName('close');

    // Basic functions
    const showModal = (modal) => {
        if (!modal) return;
        modal.style.display = 'block';
        modal.style.opacity = '1';
    };
    
    const hideModal = (modal) => {
        if (!modal) return;
        modal.style.opacity = '0';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 200);
    };

    const switchModals = (fromModal, toModal) => {
        if (!fromModal || !toModal) return;
        fromModal.style.opacity = '0';
        setTimeout(() => {
            fromModal.style.display = 'none';
            toModal.style.display = 'block';
            setTimeout(() => {
                toModal.style.opacity = '1';
            }, 50);
        }, 200);
    };

    // Main buttons
    if (loginBtn) {
        loginBtn.onclick = () => showModal(loginModal);
    }
    
    if (signupBtn) {
        signupBtn.onclick = () => showModal(signupModal);
    }

    // Switch links
    if (showSignup) {
        showSignup.onclick = function(e) {
            e.preventDefault();
            switchModals(loginModal, signupModal);
        };
    }

    if (showLogin) {
        showLogin.onclick = function(e) {
            e.preventDefault();
            switchModals(signupModal, loginModal);
        };
    }

    // Close buttons
    Array.from(closeBtns).forEach(btn => {
        btn.onclick = () => {
            hideModal(loginModal);
            hideModal(signupModal);
        };
    });

    // Outside click
    window.onclick = (e) => {
        if (e.target.classList.contains('modal')) {
            hideModal(loginModal);
            hideModal(signupModal);
        }
    };
});