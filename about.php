<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Event Builder</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $isLoggedIn ? 'logged-in' : ''; ?>">
    <!-- Same Navigation as other pages -->
    <?php include 'includes/nav.php'; ?>

    <header class="about-header">
        <h1>Our Story</h1>
        <p>Creating Unforgettable Moments Since 2015</p>
    </header>

    <section class="about-intro">
        <div class="about-content">
            <span class="subtitle">About Event Builder</span>
            <h2>Crafting Memorable Celebrations Since 2015</h2>
            <p class="lead-text">Welcome to Event Builder, where dreams transform into unforgettable experiences.</p>
            <p>With a passion for perfection and an eye for detail, we've established ourselves as a leading event planning company. Our dedicated team brings creativity, innovation, and expertise to every celebration we craft.</p>
            <div class="key-points">
                <div class="point">
                    <i class="fas fa-check-circle"></i>
                    <span>Professional Planning</span>
                </div>
                <div class="point">
                    <i class="fas fa-check-circle"></i>
                    <span>Creative Excellence</span>
                </div>
                <div class="point">
                    <i class="fas fa-check-circle"></i>
                    <span>Flawless Execution</span>
                </div>
            </div>
            <a href="services.php" class="learn-more-btn">Discover More</a>
        </div>
        <div class="about-image">
            <div class="image-container">
                <img src="images/about-team.jpg" alt="Our Team">
                <div class="experience-badge">
                    <span class="years">8+</span>
                    <span class="text">Years of Excellence</span>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision">
        <div class="mission">
            <i class="fas fa-bullseye"></i>
            <h3>Our Mission</h3>
            <p>To deliver exceptional event experiences that exceed expectations and create lasting memories for our clients.</p>
        </div>
        <div class="vision">
            <i class="fas fa-eye"></i>
            <h3>Our Vision</h3>
            <p>To become the most trusted and innovative event planning company, setting new standards in the industry.</p>
        </div>
    </section>

    <section class="team-section">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="images/team1.jpg" alt="Ayush Karn">
                <div class="member-info">
                    <h3>Ayush Karn</h3>
                    <span>Founder & CEO</span>
                    <p>Visionary leader with expertise in event management and business strategy</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="images/team2.jpg" alt="Swechha Gupta">
                <div class="member-info">
                    <h3>Swechha Gupta</h3>
                    <span>Creative Director</span>
                    <p>Expert in creative design and innovative event concepts</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="images/team3.jpg" alt="Gulshan Prajapati">
                <div class="member-info">
                    <h3>Gulshan Prajapati</h3>
                    <span>Operations Manager</span>
                    <p>Specialized in seamless event execution and team coordination</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="achievements">
        <div class="achievement-item">
            <i class="fas fa-calendar-check"></i>
            <h3>500+</h3>
            <p>Events Completed</p>
        </div>
        <div class="achievement-item">
            <i class="fas fa-smile"></i>
            <h3>1000+</h3>
            <p>Happy Clients</p>
        </div>
        <div class="achievement-item">
            <i class="fas fa-award"></i>
            <h3>15+</h3>
            <p>Industry Awards</p>
        </div>
        <div class="achievement-item">
            <i class="fas fa-users"></i>
            <h3>50+</h3>
            <p>Team Members</p>
        </div>
    </section>

    <!-- Include footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
    <script src="js/counter.js"></script>
</body>
</html>