<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Builder</title>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $isLoggedIn ? 'logged-in' : ''; ?>">
    <?php include 'includes/nav.php'; ?>

    <header class="hero">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/event1.jpg" alt="Event Planning">
                    <div class="carousel-caption">
                        <h1>Plan Your Perfect Event</h1>
                        <p>Create unforgettable moments with us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/event2.jpg" alt="Wedding Events">
                    <div class="carousel-caption">
                        <h1>Dream Weddings</h1>
                        <p>Your special day, our expertise</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/event3.jpg" alt="Corporate Events">
                    <div class="carousel-caption">
                        <h1>Corporate Events</h1>
                        <p>Professional events for your business</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/event4.jpg" alt="Birthday Celebrations">
                    <div class="carousel-caption">
                        <h1>Birthday Celebrations</h1>
                        <p>Make your birthday extraordinary</p>
                    </div>
                </div>
            </div>
            <button class="carousel-prev">&#10094;</button>
            <button class="carousel-next">&#10095;</button>
        </div>
    </header>

    <section class="event-cards">
        <div class="section-header">
            <h2>Our Services</h2>
            <p>Discover our comprehensive range of event planning services</p>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="https://plus.unsplash.com/premium_photo-1663839412026-51a44cfadfb8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmlydGhkYXl8ZW58MHx8MHx8fDA%3D" alt="Birthday Planning">
                    <div class="card-overlay">
                        <a href="birthday.php" class="btn-details">Learn More</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Birthday Planner</h3>
                    <p>Make your birthday celebration unforgettable with our custom themes and entertainment packages.</p>
                    <div class="service-features">
                        <span><i class="fas fa-cake-candles"></i> Custom Themes</span>
                        <span><i class="fas fa-music"></i> Entertainment</span>
                        <span><i class="fas fa-gift"></i> Gift Services</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://www.indiafilings.com/learn/wp-content/uploads/2024/10/Difference-between-Court-marriage-and-Registry-Marriage.jpg" alt="Wedding Planning">
                    <div class="card-overlay">
                        <a href="services.php#wedding" class="btn-details">Learn More</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Marriage Planner</h3>
                    <p>Create your dream wedding with our comprehensive planning and coordination services.</p>
                    <div class="service-features">
                        <span><i class="fas fa-rings-wedding"></i> Full Planning</span>
                        <span><i class="fas fa-camera"></i> Photography</span>
                        <span><i class="fas fa-utensils"></i> Catering</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1653821355692-03666613499f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fFBhcnR5JTIwUGxhbm5lcnxlbnwwfHwwfHx8MA%3D%3D" alt="Party Planning">
                    <div class="card-overlay">
                        <a href="services.php#party" class="btn-details">Learn More</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Party Planner</h3>
                    <p>Host amazing parties with our expert planning, decoration, and entertainment services.</p>
                    <div class="service-features">
                        <span><i class="fas fa-cocktail"></i> Bar Service</span>
                        <span><i class="fas fa-star"></i> Decoration</span>
                        <span><i class="fas fa-music"></i> DJ/Music</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1561489396-888724a1543d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Q29ycG9yYXRlJTIwRXZlbnRzfGVufDB8fDB8fHww" alt="Corporate Events">
                    <div class="card-overlay">
                        <a href="services.php#corporate" class="btn-details">Learn More</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Corporate Events</h3>
                    <p>Professional corporate event management for conferences, seminars, and team building.</p>
                    <div class="service-features">
                        <span><i class="fas fa-presentation"></i> AV Setup</span>
                        <span><i class="fas fa-coffee"></i> Catering</span>
                        <span><i class="fas fa-users"></i> Team Events</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="section-header">
            <h2>What We Provide</h2>
            <p>Comprehensive event planning services tailored to your needs</p>
        </div>
        <div class="service-grid">
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>Event Planning</h3>
                <p>Complete event planning and coordination with attention to every detail</p>
                <ul class="service-features-list">
                    <li><i class="fas fa-check"></i> Custom Event Design</li>
                    <li><i class="fas fa-check"></i> Timeline Management</li>
                    <li><i class="fas fa-check"></i> Vendor Coordination</li>
                </ul>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Catering</h3>
                <p>Exquisite food and beverage services for all occasions</p>
                <ul class="service-features-list">
                    <li><i class="fas fa-check"></i> Custom Menus</li>
                    <li><i class="fas fa-check"></i> Professional Service</li>
                    <li><i class="fas fa-check"></i> Dietary Options</li>
                </ul>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Photography</h3>
                <p>Professional photo and video coverage to capture every moment</p>
                <ul class="service-features-list">
                    <li><i class="fas fa-check"></i> Professional Equipment</li>
                    <li><i class="fas fa-check"></i> Photo Editing</li>
                    <li><i class="fas fa-check"></i> Same-Day Previews</li>
                </ul>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-music"></i>
                </div>
                <h3>Entertainment</h3>
                <p>Diverse entertainment options to keep your guests engaged</p>
                <ul class="service-features-list">
                    <li><i class="fas fa-check"></i> Live Music</li>
                    <li><i class="fas fa-check"></i> Professional DJs</li>
                    <li><i class="fas fa-check"></i> Custom Playlists</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="section-header">
            <h2>What Our Clients Say</h2>
            <p>Testimonials from our satisfied customers</p>
        </div>
        <div class="review-container">
            <div class="review">
                <div class="review-header">
                    <img src="https://images.icon-icons.com/2643/PNG/512/female_woman_user_people_avatar_white_tone_icon_159354.png" alt="Sarah Johnson">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="review-content">
                    <p>"Amazing service! The team went above and beyond to make my wedding day absolutely perfect. Every detail was handled with care and professionalism."</p>
                    <div class="reviewer-info">
                        <h4>Sarah Johnson</h4>
                        <span>Wedding Event</span>
                    </div>
                </div>
            </div>
            <div class="review">
                <div class="review-header">
                    <img src="https://www.svgrepo.com/show/382103/male-avatar-boy-face-man-user-2.svg" alt="Mike Smith">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="review-content">
                    <p>"Best birthday party ever! The decorations, entertainment, and coordination were fantastic. My guests couldn't stop talking about how great everything was!"</p>
                    <div class="reviewer-info">
                        <h4>Mike Smith</h4>
                        <span>Birthday Celebration</span>
                    </div>
                </div>
            </div>
            <div class="review">
                <div class="review-header">
                    <img src="https://images.icon-icons.com/2643/PNG/512/female_woman_user_people_avatar_white_tone_icon_159354.png" alt="Emily Brown">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="review-content">
                    <p>"Professional team and excellent execution! Our corporate event was a huge success thanks to their attention to detail and seamless coordination."</p>
                    <div class="reviewer-info">
                        <h4>Emily Brown</h4>
                        <span>Corporate Event</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
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

    <script src="js/script.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/modal.js"></script> 
    <script src="js/navbar.js"></script>
</body>
</html>