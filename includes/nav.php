<head>
    <link rel="stylesheet" href="navbar.css">
</head>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar">
    <div class="logo">
        <a href="index.php" class="logo-text">Event Builder</a>
    </div>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search events...">
    </div>
    <div class="nav-links">
        <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
        <a href="services.php" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>">Services</a>
        <a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
        <a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>
        <?php if ($isLoggedIn): ?>
            <a href="profile.php" class="profile-btn <?php echo $current_page == 'profile.php' ? 'active' : ''; ?>">
                <i class="fas fa-user"></i> Profile
            </a>
        <?php else: ?>
            <button id="loginBtn" class="login-btn">Login</button>
            <button id="signupBtn" class="signup-btn">Sign Up</button>
        <?php endif; ?>
    </div>
</nav>
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Login</h2>
        <form id="loginForm" action="includes/login.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="#" id="showSignup">Sign Up</a></p>
    </div>
</div>

<!-- Signup Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Sign Up</h2>
        <form id="signupForm" action="includes/signup.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
    </div>
</div>
<script src="js/script.js"></script>