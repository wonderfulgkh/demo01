<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <link rel="stylesheet" href="./static/css/index.css">
    <style>.error-message {
        color: index.phpff6b6b;
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
        padding: 10px;
        background: rgba(231, 76, 60, 0.2);
        border-radius: 5px;
        border: 1px solid rgba(231, 76, 60, 0.3);
        display: <?php echo isset($_SESSION['login_error']) ? 'block' : 'none'; ?>;
    }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-title">后台登录</div>
                <div class="login-subtitle">管理员登录</div>
            </div>
            
            <div class="error-message" id="errorMessage">
                <?php 
                if (isset($_SESSION['login_error'])) {
                    echo htmlspecialchars($_SESSION['login_error']);
                    unset($_SESSION['login_error']);
                }
                ?>
            </div>
            
            <form method="post" id="loginForm">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['login_username'] ?? ''); ?>" required>
                    <?php unset($_SESSION['login_username']); ?>
                </div>
                
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" name="login" class="btn">登录</button>
            </form>
        </div>