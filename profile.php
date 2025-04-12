<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.html');
    exit();
}

$userName = $_SESSION['user_name'] ?? 'User';
$userEmail = $_SESSION['user_email'] ?? 'email@example.com';
$defaultAvatar = "https://www.svgrepo.com/show/382103/male-avatar-boy-face-man-user-2.svg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Event Builder</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Event Builder</div>
        <div class="nav-links">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="#" class="active"><i class="fas fa-user"></i> Profile</a>
            <a href="#"><i class="fas fa-calendar-alt"></i> My Events</a>
            <a href="php/logout.php" id="logoutBtn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>

    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-cover"></div>
            <div class="profile-info">
                <div class="profile-avatar">
                    <img src="<?php echo $defaultAvatar; ?>" alt="Profile Picture">
                    <button class="edit-avatar"><i class="fas fa-camera"></i></button>
                </div>
                <div class="profile-details">
                    <h1><?php echo htmlspecialchars($userName); ?></h1>
                    <p><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($userEmail); ?></p>
                    <div class="profile-stats">
                        <div class="stat">
                            <i class="fas fa-calendar-check"></i>
                            <span class="count">0</span>
                            <span>Events Created</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-users"></i>
                            <span class="count">0</span>
                            <span>Events Attended</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-star"></i>
                            <span class="count">0</span>
                            <span>Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-content">
            <div class="profile-tabs">
                <button class="tab-btn active" data-tab="upcoming"><i class="fas fa-calendar"></i> Upcoming Events</button>
                <button class="tab-btn" data-tab="past"><i class="fas fa-history"></i> Past Events</button>
                <button class="tab-btn" data-tab="settings"><i class="fas fa-cog"></i> Settings</button>
            </div>

            <div class="tab-content active" id="upcoming">
                <div class="create-event">
                    <button class="create-event-btn">
                        <i class="fas fa-plus"></i> Create New Event
                    </button>
                </div>
                <div class="events-grid">
                    <p class="no-events"><i class="fas fa-calendar-plus"></i> No upcoming events</p>
                </div>
            </div>

            <div class="tab-content" id="past">
                <div class="events-grid">
                    <p class="no-events"><i class="fas fa-history"></i> No past events</p>
                </div>
            </div>

            <div class="tab-content" id="settings">
                <form class="settings-form">
                    <div class="form-group">
                        <label><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" value="<?php echo htmlspecialchars($userName); ?>">
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" value="<?php echo htmlspecialchars($userEmail); ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-lock"></i> Change Password</label>
                        <input type="password" placeholder="Current Password">
                        <input type="password" placeholder="New Password">
                        <input type="password" placeholder="Confirm New Password">
                    </div>
                    <button type="submit" class="save-settings-btn">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/profile.js"></script>
</body>
</html>