<!DOCTYPE html>
    <html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>后台管理系统</title>
       <link rel="stylesheet" href="./static/css/admin.css">
       
    </head>
    <body>
        <div class="toast-container" id="toastContainer"></div>
        
        <div class="admin-container">
            <div class="glass-panel">
                <div class="panel-header">
                    <div class="panel-title">网站后台控制面板</div>
                    <div class="panel-subtitle">PHP管理系统</div>
                </div>
                
              <div class="panel-menu-container">
            <div class="panel-menu">
                <div class="menu-item active" onclick="switchTab('site-settings')">网站配置</div>
                <div class="menu-item" onclick="switchTab('content-settings')">内容参数</div>
                <div class="menu-item" onclick="switchTab('other-settings')">其它设置</div>
                <div class="menu-item" onclick="switchTab('account-settings')">账户管理</div>
            </div>