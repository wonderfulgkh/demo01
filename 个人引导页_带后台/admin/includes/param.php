<?php
        if (isset($_POST['site_title'])) {
            $new_config['site_title'] = $_POST['site_title'];
        }
        if (isset($_POST['site_keywords'])) {
            $new_config['site_keywords'] = $_POST['site_keywords'];
        }
        if (isset($_POST['site_description'])) {
            $new_config['site_description'] = $_POST['site_description'];
        }
        if (isset($_POST['footer_content'])) {
            $new_config['footer_content'] = $_POST['footer_content'];
        }
        if (isset($_POST['icp_number'])) {
            $new_config['icp_number'] = $_POST['icp_number'];
        }
        
        // 处理内容参数更新
        if (isset($_POST['page_title'])) {
            $new_config['page_title'] = $_POST['page_title'];
        }
        if (isset($_POST['QQ_text'])) {
            $new_config['QQ_text'] = $_POST['QQ_text'];
        }
        if (isset($_POST['about_me'])) {
            $new_config['about_me'] = $_POST['about_me'];
        }
        if (isset($_POST['img_url'])) {
            $new_config['img_url'] = $_POST['img_url'];
        }
        if (isset($_POST['link1_name'])) {
            $new_config['link1_name'] = $_POST['link1_name'];
        }
        if (isset($_POST['link1_url'])) {
            $new_config['link1_url'] = $_POST['link1_url'];
        }
         if (isset($_POST['link2_name'])) {
            $new_config['link2_name'] = $_POST['link2_name'];
        }
        if (isset($_POST['link2_url'])) {
            $new_config['link2_url'] = $_POST['link2_url'];
        }
         if (isset($_POST['link3_name'])) {
            $new_config['link3_name'] = $_POST['link3_name'];
        }
        if (isset($_POST['link3_url'])) {
            $new_config['link3_url'] = $_POST['link3_url'];
        }
         if (isset($_POST['link4_name'])) {
            $new_config['link4_name'] = $_POST['link4_name'];
        }
        if (isset($_POST['link4_url'])) {
            $new_config['link4_url'] = $_POST['link4_url'];
        }
         if (isset($_POST['music_url'])) {
            $new_config['music_url'] = $_POST['music_url'];
        }
        
       // 处理新手教程开关
        if (isset($_POST['tutorial_enabled'])) {
            // 强制转换为布尔值
            $new_config['tutorial_enabled'] = (bool)$_POST['tutorial_enabled'];
        } else {
            // 默认值设为false
            $new_config['tutorial_enabled'] = false;
        }
        
        // 处理其他设置更新
        if (isset($_POST['custom_js'])) {
            $new_config['custom_js'] = $_POST['custom_js'];
        }
        if (isset($_POST['custom_head'])) {
            $new_config['custom_head'] = $_POST['custom_head'];
        }
        if (isset($_POST['custom_body'])) {
            $new_config['custom_body'] = $_POST['custom_body'];
        }
        
        
    
?>  