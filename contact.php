<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Event Builder</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $isLoggedIn ? 'logged-in' : ''; ?>">
    <?php include 'includes/nav.php'; ?>

    <section class="contact-hero">
        <div class="hero-content">
            <h1>Get in Touch</h1>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            <div class="hero-buttons">
                <a href="tel:(555)123-4567" class="hero-btn"><i class="fas fa-phone-alt"></i> Call Now</a>
                <a href="#contact-form" class="hero-btn primary"><i class="fas fa-envelope"></i> Send Message</a>
            </div>
        </div>
    </section>

    <section class="contact-container">
        <div class="contact-info">
            <div class="info-card">
                <div class="icon-wrapper">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Our Location</h3>
                <p>123 Event Street, City</p>
                <a href="#map-section" class="info-link">View on Map <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="info-card">
                <div class="icon-wrapper">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Phone Number</h3>
                <p>(555) 123-4567</p>
                <a href="tel:(555)123-4567" class="info-link">Call Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="info-card">
                <div class="icon-wrapper">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email Address</h3>
                <p>info@eventbuilder.com</p>
                <a href="mailto:info@eventbuilder.com" class="info-link">Send Email <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="info-card">
                <div class="icon-wrapper">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Working Hours</h3>
                <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                <p class="status-badge open">Currently Open</p>
            </div>
        </div>

        <div class="contact-form-container" id="contact-form">
            <div class="form-header">
                <h2>Send us a Message</h2>
                <p>Fill out the form below and we'll get back to you shortly</p>
            </div>
            <form id="contactForm" class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">&nbsp; </i> Your Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email"></i> Email Address</label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" required>
                    <label for="subject"></i> Subject</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" required></textarea>
                    <label for="message"></i> Your Message</label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="submit-btn">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="map-section" id="map-section">
        <div class="map-container">
            <div class="map-header">
                <h2>Find Us Here</h2>
                <p>Visit our office at 123 Event Street, City</p>
            </div>
            <div class="map-wrapper">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30596834!2d-74.25987368715491!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647043099265!5m2!1sen!2s" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <div class="map-overlay">
                <a href="https://goo.gl/maps/your-location" target="_blank" class="directions-btn">
                    <i class="fas fa-directions"></i> Get Directions
                </a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>