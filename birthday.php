<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Packages - Event Builder</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/birthday.css">
    <link rel="stylesheet" href="styles/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $isLoggedIn ? 'logged-in' : ''; ?>">
    <?php 
    include 'includes/nav.php';
    include 'includes/modals.php'; 
    ?>
    <!-- Update the hero section -->
    <section class="birthday-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Create Magical Birthday Moments</h1>
            <p>From intimate gatherings to grand celebrations, we make every birthday unforgettable</p>
            <div class="hero-buttons">
                <a href="#packages" class="primary-btn">View Packages</a>
                <a href="contact.php" class="secondary-btn">Get Custom Quote</a>
            </div>
        </div>
    </section>

    <!-- Update the packages list section -->
    <section class="packages-list">
        <div class="container">
            <div class="packages-nav-wrapper">
                <ul class="package-nav">
                    <li>
                        <a href="#basic" class="package-link">
                            <div class="package-icon">
                                <i class="fas fa-star"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="package-info">
                                <h3>Kids Birthday Package</h3>
                                <p>Starting at ₹15,000</p>
                                <div class="package-meta">
                                    <span><i class="fas fa-clock"></i> 4 Hours</span>
                                    <span><i class="fas fa-users"></i> 50 Guests</span>
                                </div>
                                <span class="view-details">Explore Package <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#premium" class="package-link">
                            <div class="package-icon">
                                <i class="fas fa-gem"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="package-info">
                                <h3>Premium Package</h3>
                                <p>Starting at ₹25,000</p>
                                <div class="package-meta">
                                    <span><i class="fas fa-clock"></i> 6 Hours</span>
                                    <span><i class="fas fa-users"></i> 100 Guests</span>
                                </div>
                                <span class="view-details">Explore Package <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#luxury" class="package-link">
                            <div class="package-icon">
                                <i class="fas fa-crown"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="package-info">
                                <h3>Luxury Package</h3>
                                <p>Starting at ₹40,000</p>
                                <div class="package-meta">
                                    <span><i class="fas fa-clock"></i> 8 Hours</span>
                                    <span><i class="fas fa-users"></i> 200 Guests</span>
                                </div>
                                <span class="view-details">Explore Package <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="packages-container">
        <div class="packages-row">
            <!-- First Row: Basic and Premium -->
            <div class="package-details" id="basic">
                <div class="section-header">
                    <h2>Kids Birthday Package</h2>
                    <p>Perfect for small gatherings and children's parties</p>
                </div>
                <div class="details-price">
                    <span class="amount">₹15,000</span>
                    <span class="duration">4 Hours Event</span>
                </div>
                <div class="details-sections-container">
                    <!-- Kids Birthday Package -->
                    <div class="details-section">
                        <h3><i class="fas fa-birthday-cake"></i> Cake & Desserts</h3>
                        <ul>
                            <li>1kg Custom Birthday Cake</li>
                            <li>Choice of Flavor</li>
                            <li>Basic Dessert Table Setup</li>
                            <li>24 Cupcakes</li>
                            <li>Candy Corner</li>
                        </ul>
                    </div>
                    
                    <!-- Premium Package -->
                    <section class="package-details" id="premium">
                        <div class="details-content">
                            <div class="details-price">
                                <span class="amount">₹25,000</span>
                                <span class="duration">6 Hours Event</span>
                            </div>
                            <div class="details-sections-container">
                                <div class="details-section">
                                    <h3><i class="fas fa-birthday-cake"></i> Premium Catering</h3>
                                    <ul>
                                        <li>2kg Designer Theme Cake</li>
                                        <li>Cupcake Tower (24 pieces)</li>
                                        <li>Premium Dessert Corner</li>
                                        <li>Chocolate Fountain</li>
                                    </ul>
                                </div>
                                <div class="details-section">
                                    <h3><i class="fas fa-music"></i> Entertainment</h3>
                                    <ul>
                                        <li>Professional DJ Setup</li>
                                        <li>Sound System</li>
                                        <li>MC for Events</li>
                                        <li>Interactive Games</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Luxury Package -->
                    <section class="package-details" id="luxury">
                        <div class="details-content">
                            <div class="details-price">
                                <span class="amount">₹40,000</span>
                                <span class="duration">8 Hours Event</span>
                            </div>
                            <div class="details-sections-container">
                                <div class="details-section">
                                    <h3><i class="fas fa-crown"></i> Luxury Services</h3>
                                    <ul>
                                        <li>3kg Multi-tier Designer Cake</li>
                                        <li>Gourmet Dessert Station</li>
                                        <li>Premium Snacks Selection</li>
                                        <li>Signature Mocktails</li>
                                    </ul>
                                </div>
                                <div class="details-section">
                                    <h3><i class="fas fa-star"></i> Premium Entertainment</h3>
                                    <ul>
                                        <li>Live Band Performance</li>
                                        <li>Professional Dance Show</li>
                                        <li>Magic Show</li>
                                        <li>Photo Booth with Props</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Custom Package -->
                    <section class="package-details" id="custom">
                        <div class="details-content">
                            <div class="details-price">
                                <span class="amount">Custom Price</span>
                                <span class="duration">Flexible Duration</span>
                            </div>
                            <div class="details-sections-container">
                                <div class="details-section">
                                    <h3><i class="fas fa-magic"></i> Customizable Options</h3>
                                    <ul>
                                        <li>Choose Your Theme</li>
                                        <li>Select Entertainment</li>
                                        <li>Custom Menu Planning</li>
                                        <li>Flexible Timing</li>
                                    </ul>
                                </div>
                                <div class="details-section">
                                    <h3><i class="fas fa-plus-circle"></i> Additional Services</h3>
                                    <ul>
                                        <li>Special Performances</li>
                                        <li>Custom Decorations</li>
                                        <li>Themed Photography</li>
                                        <li>VIP Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <a href="booking.php?package=kids" class="book-package-btn">
                    Book This Package <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Repeat similar structure for Premium and Luxury packages -->
            <section class="package-details" id="premium">
                <div class="section-header">
                    <h2>Premium Birthday Package</h2>
                    <p>Enhanced celebration with professional entertainment</p>
                </div>
                <div class="details-container">
                    <!-- Premium package content -->
                </div>
            </section>
        </div>
    
        <div class="packages-row">
            <!-- Second Row: Luxury and Custom -->
            <section class="package-details" id="luxury">
                <div class="section-header">
                    <h2>Luxury Birthday Package</h2>
                    <p>The ultimate celebration experience</p>
                </div>
                <div class="details-container">
                    <!-- Luxury package content -->
                </div>
            </section>
    
            <section class="package-details" id="custom">
                <div class="section-header">
                    <h2>Custom Birthday Package</h2>
                    <p>Tailored to your specific needs</p>
                </div>
                <div class="details-container">
                    <!-- Custom package content -->
                </div>
            </section>
        </div>
    </div>
</section>

    <?php include 'includes/footer.php'; ?>
    
    <!-- Add these scripts before closing body tag -->
    <script src="js/modal.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>