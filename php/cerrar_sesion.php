<?php
session_start();

// Uncomment to destroy the session immediately
// session_destroy();

// Print session and cookie data for debugging (remove in production)


// Delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session data
session_destroy();

// Clear output buffer to ensure header works correctly
ob_clean();

// Redirect to index.php
header('Location: ../index.php');
exit;
