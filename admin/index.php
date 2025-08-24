
<?php

    require_once __DIR__ . '/includes/auth.php';
    
if ($logged_in) {
    
    require_once __DIR__ . '/includes/header.php';
    require_once __DIR__ . '/includes/admin.php';
    require_once __DIR__ . '/includes/footer.php';
    
} else {
    
    require_once __DIR__ . '/includes/login.php';
    require_once __DIR__ . '/includes/footer.php';
    
}
?>