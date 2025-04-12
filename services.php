<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Event Builder</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/services.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $isLoggedIn ? 'logged-in' : ''; ?>">
    <?php include 'includes/nav.php'; ?>
    <!-- Services Header -->
    <header class="services-header">
        <h1>Our Services</h1>
        <p>Comprehensive event planning solutions for every occasion</p>
    </header>

    <!-- Detailed Services Section -->
    <section class="detailed-services">
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
            <h2>Birthday Events</h2>
            <p>Make your birthday celebration memorable with our complete party planning services.</p>
            <ul class="service-features">
                <li>Custom theme design</li>
                <li>Catering services</li>
                <li>Entertainment booking</li>
                <li>Venue decoration</li>
            </ul>
            <button class="book-now">Book Now</button>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-ring"></i>
            </div>
            <h2>Wedding Planning</h2>
            <p>Turn your dream wedding into reality with our professional wedding planning services.</p>
            <ul class="service-features">
                <li>Venue selection</li>
                <li>Wedding decoration</li>
                <li>Catering & Menu planning</li>
                <li>Photography & Videography</li>
            </ul>
            <button class="book-now">Book Now</button>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <h2>Corporate Events</h2>
            <p>Professional corporate event management for successful business gatherings.</p>
            <ul class="service-features">
                <li>Conference planning</li>
                <li>Team building events</li>
                <li>Product launches</li>
                <li>Award ceremonies</li>
            </ul>
            <button class="book-now">Book Now</button>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-glass-cheers"></i>
            </div>
            <h2>Private Parties</h2>
            <p>Create unforgettable private events with our expert party planning services.</p>
            <ul class="service-features">
                <li>Theme development</li>
                <li>Entertainment booking</li>
                <li>Decor & Setup</li>
                <li>Full-service catering</li>
            </ul>
            <button class="book-now">Book Now</button>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <h2>Choose Your Perfect Package</h2>
        <div class="pricing-cards">
            <div class="pricing-card">
                <h3>Basic Package</h3>
                <span class="features-label">Essential Features</span>
                <div class="price">999</div>
                <ul>
                    <li>Basic venue decoration</li>
                    <li>Standard catering (50 guests)</li>
                    <li>Basic photography package</li>
                    <li>4-hour event duration</li>
                    <li>Basic sound system</li>
                    <li>Event coordinator</li>
                </ul>
                <button class="select-package">Get Started</button>
            </div>

            <div class="pricing-card featured">
                <h3>Premium Package</h3>
                <span class="features-label">Most Popular Choice</span>
                <div class="price">2499</div>
                <ul>
                    <li>Premium decoration & lighting</li>
                    <li>Gourmet catering (100 guests)</li>
                    <li>Professional photo & video</li>
                    <li>8-hour event duration</li>
                    <li>DJ & Entertainment</li>
                    <li>Dedicated event planner</li>
                    <li>Custom event website</li>
                    <li>Social media coverage</li>
                </ul>
                <button class="select-package">Select Premium</button>
            </div>

            <div class="pricing-card">
                <h3>Luxury Package</h3>
                <span class="features-label">VIP Experience</span>
                <div class="price">4999</div>
                <ul>
                    <li>Luxury decoration & themes</li>
                    <li>Premium catering (200 guests)</li>
                    <li>Complete photo & video coverage</li>
                    <li>Full-day event coverage</li>
                    <li>Live band & DJ</li>
                    <li>VIP event planning team</li>
                    <li>Custom mobile app</li>
                    <li>VIP guest management</li>
                    <li>Luxury transportation</li>
                    <li>Emergency backup services</li>
                </ul>
                <button class="select-package">Choose Luxury</button>
            </div>
        </div>
    </section>

    <!-- After pricing section, add these new sections -->
    
    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <h2>Why Choose Event Builder?</h2>
        <div class="features-grid">
            <div class="feature-item">
                <i class="fas fa-clock"></i>
                <h3>10+ Years Experience</h3>
                <p>Decade of expertise in creating memorable events</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-users"></i>
                <h3>Professional Team</h3>
                <p>Dedicated experts for every aspect of your event</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-star"></i>
                <h3>5-Star Service</h3>
                <p>Consistently rated 5 stars by our clients</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-alt"></i>
                <h3>100% Satisfaction</h3>
                <p>Your satisfaction is our top priority</p>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="our-process">
        <h2>Our Planning Process</h2>
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Initial Consultation</h3>
                <p>We discuss your vision, requirements, and budget</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Proposal & Planning</h3>
                <p>Detailed event proposal and timeline creation</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Vendor Coordination</h3>
                <p>Selection and management of trusted vendors</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Event Execution</h3>
                <p>Flawless execution of your perfect event</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <img src="https://images.icon-icons.com/2643/PNG/512/female_woman_user_people_avatar_white_tone_icon_159354.png" alt="Sarah Johnson">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"They made our wedding absolutely perfect! Every detail was handled with care and professionalism."</p>
                <h4>Sarah Johnson</h4>
                <span>Wedding Client</span>
            </div>

            <div class="testimonial-card">
                <img src="https://www.svgrepo.com/show/382103/male-avatar-boy-face-man-user-2.svg" alt="Michael Brown">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"The corporate event was a huge success. Very professional team and excellent execution!"</p>
                <h4>Michael Brown</h4>
                <span>Corporate Client</span>
            </div>

            <div class="testimonial-card">
                <img src="https://images.icon-icons.com/2643/PNG/512/female_woman_user_people_avatar_white_tone_icon_159354.png" alt="Emily Davis">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>"Best birthday party ever! They exceeded all expectations and created amazing memories."</p>
                <h4>Emily Davis</h4>
                <span>Birthday Event</span>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Plan Your Perfect Event?</h2>
            <p>Let's create something amazing together</p>
            <button class="cta-button">Schedule a Consultation</button>
        </div>
    </section>

    <!-- Footer continues here... -->
    <footer>
        <!-- Same footer content as index.php -->
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@eventbuilder.com</p>
                <p>Phone: (555) 123-4567</p>
                <p>Address: 123 Event Street, City</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Event Builder. All rights reserved.</p>
        </div>
    </footer>

    <!-- Include the same modals as index.php -->
    <?php include 'includes/modals.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>