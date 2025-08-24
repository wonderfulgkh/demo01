<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网站后台管理教程</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.3;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
        }
        .alert-box {
            padding: 12px;
            margin: 12px 0;
            border-radius: 4px;
            border-left: 4px solid;
        }
        .alert-warning {
            background-color: #fff3e0;
            border-color: #ff9800;
        }
        .alert-info {
            background-color: #e3f2fd;
            border-color: #2196f3;
        }
        .alert-success {
            background-color: #e8f5e9;
            border-color: #4caf50;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin: 8px 4px;
            background: #2196f3;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .btn-home {
            background: #607d8b;
        }
    </style>
</head>
<body>
    <h1>网站后台管理教程</h1>
    
    <div class="alert-box alert-warning">
        <p>在您网站的网址后面添加 <strong>/admin</strong> 即可进入后台管理系统</p>
        <p>例如：https://www.您的网站.com/admin</p>
    </div>
    
    <div class="alert-box alert-success">
        <p><strong>默认账户：</strong> 52bin.cn</p>
        <p><strong>默认密码：</strong> 52bin.cn</p>
    </div>
    
    <div class="alert-box alert-warning">
        <p><strong>关闭首页新手弹窗提示：</strong></p>
        <p>请登录后台 → <strong>其它设置</strong> → <strong>首页新手教程</strong>，选择关闭并保存即可！</p>
    </div>
    
    <div class="alert-box alert-info">
        <p>安全提示：admin 是默认后台管理地址，建议将后台的admin文件夹更换成另一个不易猜测的名称以增强安全性。</p>
    </div>
    
    <div style="text-align: center; margin-top: 20px;">
        <a href="/" class="btn btn-home">返回首页</a>
        <a href="/admin" class="btn">进入后台</a>
    </div>
</body>
</html>