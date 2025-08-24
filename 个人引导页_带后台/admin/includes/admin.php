            <div class="admin-content">
            <!-- 缓存提示 -->
            <div class="cache-notice" id="cacheNotice">
                <strong>注意：</strong>修改完内容后，网站首页内容无变化是因为浏览器有缓存。<br>
                解决方法一：清理浏览器缓存，本地缓存清理后重载网页<br>
                解决方法二：在首页快捷键 Ctrl+F5 强制刷新页面
            </div>
            
        <!-- 网站配置 -->
            <div id="site-settings" class="tab-content active">
                <h2 class="section-title">网站配置</h2>
                
                <form id="siteForm">
                    <div class="form-group">
                        <label for="site_title">网站标题</label>
                        <input type="text" id="site_title" name="site_title" value="<?php echo htmlspecialchars($config['site_title'] ?? ''); ?>">
                        <div class="input-description">浏览器标签页显示的核心标识</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="site_keywords">网站关键词</label>
                        <input type="text" id="site_keywords" name="site_keywords" value="<?php echo htmlspecialchars($config['site_keywords'] ?? ''); ?>">
                        <div class="input-description">Keywords，告诉搜索引擎本页内容是围绕哪些词展开，词语间要用英文","隔开</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="site_description">网站描述</label>
                        <input type="text" id="site_description" name="site_description" value="<?php echo htmlspecialchars($config['site_description'] ?? ''); ?>">
                        <div class="input-description">Description，简要描述网站的主要内容</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="footer_content">页脚内容</label>
                        <input type="text" id="footer_content" name="footer_content" value="<?php echo htmlspecialchars($config['footer_content'] ?? ''); ?>">
                        <div class="input-description">显示在网站底部的版权信息等内容</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="icp_number">备案号</label>
                        <input type="text" id="icp_number" name="icp_number" value="<?php echo htmlspecialchars($config['icp_number'] ?? ''); ?>">
                        <div class="input-description">ICP备案号，如：粤ICP备XXXXXXXX号（该内容为空时首页不显示）</div>
                    </div>
                    
                    <div class="save-btn-container">
                        <button type="button" class="save-btn" onclick="saveTabContent('site-settings')">保存网站配置</button>
                    </div>
                </form>
            </div>
            
              <!-- 内容参数 -->
            <div id="content-settings" class="tab-content">
                <h2 class="section-title">内容参数</h2>
                
                <form id="contentForm">
                    <div class="form-group">
                        <label for="page_title">我的名称</label>
                        <input type="text" id="page_title" name="page_title" value="<?php echo htmlspecialchars($config['page_title'] ?? ''); ?>">
                        <div class="input-description">网站首页显示的个人名称</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="QQ_text">QQ号</label>
                        <input type="text" id="QQ_text" name="QQ_text" value="<?php echo htmlspecialchars($config['QQ_text'] ?? ''); ?>">
                        <div class="input-description">首页显示的头像图片使用</div>
                    </div>
                    
                     <div class="form-group">
                        <label for="about_me">介绍</label>
                        <input type="text" id="about_me" name="about_me" value="<?php echo htmlspecialchars($config['about_me'] ?? ''); ?>">
                        <div class="input-description">首页显示的头像下面的文字</div>
                    </div>
                    
                     <div class="form-group">
                        <label for="img_url">背景图片</label>
                        <input type="text" id="img_url" name="img_url" value="<?php echo htmlspecialchars($config['img_url'] ?? ''); ?>">
                        <div class="input-description">首页背景图片链接，可以在<a href="http://blog.52bin.cn/13.html" target="_blank" rel="noopener noreferrer">http://blog.52bin.cn/13.html</a>挑选图片直接复制链接</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="music_url">背景音乐</label>
                        <input type="text" id="music_url" name="music_url" value="<?php echo htmlspecialchars($config['music_url'] ?? ''); ?>">
                        <div class="input-description">首页背景音乐链接（该内容为空时首页不显示）</div>
                    </div>
                    
                   <div class="form-group">
                        <div class="link-group">
                        <label for="link1_name">链接一名称</label>
                        <input type="text" id="link1_name" name="link1_name" value="<?php echo htmlspecialchars($config['link1_name'] ?? '联系方式'); ?>">
                         <div class="input-description"></div>
                        <input type="text" id="link1_url" name="link1_url" 
                               placeholder="请输入链接网址（如：https://example.com）"
                               value="<?php echo htmlspecialchars($config['link1_url'] ?? '#'); ?>">
                        <div class="input-description">首页按钮名称与网址（该内容为空时首页不显示）</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="link-group">
                        <label for="link2_name">链接二名称</label>
                        <input type="text" id="link2_name" name="link2_name" value="<?php echo htmlspecialchars($config['link2_name'] ?? '联系方式'); ?>">
                         <div class="input-description"></div>
                        <input type="text" id="link2_url" name="link2_url" 
                               placeholder="请输入链接网址（如：https://example.com）"
                               value="<?php echo htmlspecialchars($config['link2_url'] ?? '#'); ?>">
                        <div class="input-description">首页按钮名称与网址（该内容为空时首页不显示）</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="link-group">
                        <label for="link3_name">链接三名称</label>
                        <input type="text" id="link3_name" name="link3_name" value="<?php echo htmlspecialchars($config['link3_name'] ?? '联系方式'); ?>">
                         <div class="input-description"></div>
                        <input type="text" id="link3_url" name="link3_url" 
                               placeholder="请输入链接网址（如：https://example.com）"
                               value="<?php echo htmlspecialchars($config['link3_url'] ?? '#'); ?>">
                        <div class="input-description">首页按钮名称与网址（该内容为空时首页不显示）</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="link-group">
                        <label for="link4_name">链接四名称</label>
                        <input type="text" id="link4_name" name="link4_name" value="<?php echo htmlspecialchars($config['link4_name'] ?? '联系方式'); ?>">
                         <div class="input-description"></div>
                        <input type="text" id="link4_url" name="link4_url" 
                               placeholder="请输入链接网址（如：https://example.com）"
                               value="<?php echo htmlspecialchars($config['link4_url'] ?? '#'); ?>">
                        <div class="input-description">首页按钮名称与网址（该内容为空时首页不显示）</div>
                        </div>
                    </div>
                    
                    <div class="save-btn-container">
                        <button type="button" class="save-btn" onclick="saveTabContent('content-settings')">保存内容参数</button>
                    </div>
                </form>
            </div>
            
            <!-- 其它设置 -->
            <div id="other-settings" class="tab-content">
                <h2 class="section-title">其它设置</h2>
                
                <form id="otherForm">
                    
<div class="form-group">
    <label for="tutorial_enabled">首页新手教程</label>
    <select id="tutorial_enabled" name="tutorial_enabled" class="styled-select">
        <option value="1" <?= ($config['tutorial_enabled'] ?? true) ? 'selected' : '' ?>>开启</option>
        <option value="0" <?= !($config['tutorial_enabled'] ?? true) ? 'selected' : '' ?>>关闭</option>
    </select>
    <div class="input-description">首页显示新手引导教程，老手将此功能关闭！</div>
</div>
                    
                    <div class="form-group">
                        <label for="custom_js">自定义JS</label>
                        <textarea id="custom_js" name="custom_js"><?php echo htmlspecialchars($config['custom_js'] ?? ''); ?></textarea>
                        <div class="input-description">自定义JavaScript代码，会插入到页面底部</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="custom_head">自定义head内容</label>
                        <textarea id="custom_head" name="custom_head"><?php echo htmlspecialchars($config['custom_head'] ?? ''); ?></textarea>
                        <div class="input-description">自定义head标签内的内容，可以填写引入第三方css、js等等</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="custom_body">自定义body内容</label>
                        <textarea id="custom_body" name="custom_body"><?php echo htmlspecialchars($config['custom_body'] ?? ''); ?></textarea>
                        <div class="input-description">此在<body>标签末尾位置的内容，填写引入第三方js脚本、网站统计等等</div>
                    </div>
                    
                    <div class="save-btn-container">
                        <button type="button" class="save-btn" onclick="saveTabContent('other-settings')">保存其它设置</button>
                    </div>
                </form>
            </div>
            
            <!-- 账户管理 -->
            <div id="account-settings" class="tab-content">
                <h2 class="section-title">账户管理</h2>
                <form method="post" id="accountForm" onsubmit="return validateAccountForm()">
                    <div class="form-group">
                        <label for="new_username">新用户名</label>
                        <input type="text" id="new_username" name="new_username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="new_password">新密码</label>
                        <input type="password" id="new_password" name="new_password" required minlength="3" oninput="checkPasswordStrength()">
                        <div class="password-strength" id="passwordStrength"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm_password">确认密码</label>
                        <input type="password" id="confirm_password" name="confirm_password" required minlength="3" oninput="checkPasswordMatch()">
                        <div class="password-mismatch" id="passwordMismatch">两次输入的密码不一致</div>
                    </div>
                    
                    <div class="save-btn-container">
                        <button type="submit" name="update_config" class="save-btn">更新账户信息</button>
                    </div>
                </form>
                
                <div class="security-tips">
                    <h3>安全提示</h3>
                    <ul>
                        <li>建议将admin文件重命名为不易猜测的名称</li>
                        <li>定期更改管理员密码</li>
                        <li>不要使用简单密码</li>
                        <li>确保config文件权限设置为仅Web服务器可读写</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


