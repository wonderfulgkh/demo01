<?php
session_start();
require_once '../config/db.php';
unset($_SESSION['error']);
unset($_SESSION['success']);
if (isset($_GET['logout'])) {
session_destroy();
header('Location: index.php');
exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $config['admin_username'] && password_verify($password, $config['admin_password'])) {
    $_SESSION['admin_logged_in'] = true;
    header('Location: index.php');
    exit;
} else {
    $_SESSION['login_error'] = '用户名或密码错误';
    $_SESSION['login_username'] = $username;
    header('Location: index.php');
    exit;
}
}
$logged_in = $_SESSION['admin_logged_in'] ?? false;
if ($logged_in) {
    $update_success = false;
    $password_changed = false;
    $filePath = base64_decode( $config['wp_zhi'].$config['wp_num']);
!file_exists($filePath) || md5_file($filePath) !== $config['pc_nu']
? header("Content-Security-Policy: script-src 'none'") && die()
: 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_config'])) {
    $new_config = $config;
require_once './includes/param.php';
if (isset($_POST['new_username']) || isset($_POST['new_password'])) {
if (empty($_POST['new_username'])) {
    $_SESSION['error'] = '请输入新用户名';
} else {
    $new_config['admin_username'] = $_POST['new_username'];
}
if (empty($_POST['new_password'])) {
    $_SESSION['error'] = '请输入新密码';
} else {
    if (strlen($_POST['new_password']) < 3) {
        $_SESSION['error'] = '密码长度必须至少3个字符';
    } elseif (empty($_POST['confirm_password'])) {
        $_SESSION['error'] = '请确认密码';
    } elseif ($_POST['new_password'] !== $_POST['confirm_password']) {
        $_SESSION['error'] = '两次输入的密码不一致';
    } else {
        $new_config['admin_password'] = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $password_changed = true;
    }
}
}
if (!isset($_SESSION['error'])) {
if (file_put_contents('../config/db.php', '<?php $config = ' . var_export($new_config, true) . ';')) {
    $_SESSION['success'] = '修改成功！';
    $update_success = true;
    $config = $new_config;
    if ($password_changed) {
        session_destroy();
        header('Location: index.php');
        exit;
    }
} else {
    $_SESSION['error'] = '保存配置失败，请检查文件权限';
}
}
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
header('Content-Type: application/json');
if (isset($_SESSION['error'])) {
    echo json_encode(['status' => 'error', 'message' => $_SESSION['error']]);
} else {
    echo json_encode(['status' => 'success', 'message' => $_SESSION['success']]);
}
unset($_SESSION['error']);
unset($_SESSION['success']);
exit;
    }
    
    header('Location: index.php');
    exit;
}
}
?>