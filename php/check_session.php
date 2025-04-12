<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function redirectIfNotLoggedIn() {
    if (!isLoggedIn()) {
        header('Location: index.html');
        exit();
    }
}
?>