<?php
require_once 'config.php';

header('Content-Type: application/json');

try {
    $data = $_POST;
    
    // Validate input
    if (empty($data['username']) || empty($data['email']) || empty($data['password'])) {
        throw new Exception('All fields are required');
    }
    
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($stmt->rowCount() > 0) {
        throw new Exception('Email already registered');
    }
    
    // Hash password
    $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
    
    // Insert user with correct column names
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$data['username'], $data['email'], $hashedPassword]);
    
    echo json_encode(['success' => true, 'message' => 'Registration successful']);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>