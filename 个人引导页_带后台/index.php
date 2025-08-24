<!--
 * @Version：个人网页美化版
 * @author   小彬 <mail@52bin.cn>
 * @Document：https://blog.52bin.cn/
 * @Warning：本源码资源（源代码、软件、学习资料等）仅供研究学习以及参考等合法使用，请勿用于商业用途以及违法使用。
 * @Warning：仅供研究学习以及参考等合法使用，请勿用于商业用途以及违法使用。
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
-->
<?php
require_once 'config/db.php';
require_once 'config/notice.php';
?>
<!doctype html>
<html lang="en"><head><meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="<?php echo htmlspecialchars($config['site_keywords'] ?? ''); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($config['site_description'] ?? ''); ?>">
    <meta name="theme-color" content="#000000">
    <title><?php echo htmlspecialchars($config['site_title'] ?? ''); ?></title>

    <link rel="stylesheet" href="css/index.min.css">
    <script type="text/javascript" src="js/index.min.js"></script>
    <!--<script src="js/XueHua.min.eval.js" charset="utf-8"></script>-->
    <link rel="stylesheet" href="css/newlyAdd.css">
      <!-- 自定义head内容 -->
    <?php echo $config['custom_head'] ?? ''; ?>
</head>

<body>

<div id="app">
    <div class="videozz"></div>
     <?php if (!empty($config['music_url'])): ?>
    <audio controls="true" preload="auto" loop="" autoplay="true" controlslist="nodownload" class="audio" style="z-index:99">
        <source src="<?php echo htmlspecialchars($config['music_url']); ?>" type="audio/mp3">
    </audio>
    <?php endif; ?>
    <div class="bg-cover home-cover filter-dim centerbg" style="background-image:url(<?php echo htmlspecialchars($config['img_url'] ?? ''); ?>);height:100vh;background-position:center center">
        <div class="wapper">
            <div class="card-inner">
                <header>
                    <div class="fangda">
                        <img class="xuanzhuan" src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo htmlspecialchars($config['QQ_text'] ?? ''); ?>&amp;s=640" width="80" height="80">
                    </div>

                    <h1 class="font-normal fangda"><?php echo htmlspecialchars($config['page_title'] ?? ''); ?></h1>
                    <h2 class="font-normal fangda" style="margin:1em auto">
             <?php echo htmlspecialchars($config['about_me'] ?? ''); ?>
                    </h2>
                </header>
                <ul>
                     <?php if (!empty($config['link1_name'])): ?>
                    <li class="fangda"><a href="<?php echo htmlspecialchars($config['link1_url']); ?>" target="_blank"><i class="iconfont icon-boke icon"></i><span><?php echo htmlspecialchars($config['link1_name']); ?></span></a></li>
                    <?php endif; ?>
                    <?php if (!empty($config['link2_name'])): ?>
                    <li class="fangda"><a href="<?php echo htmlspecialchars($config['link2_url']); ?>" target="_blank"><i class="iconfont icon-tuku icon"></i><span><?php echo htmlspecialchars($config['link2_name']); ?></span></a></li>
                    <?php endif; ?>
                    <?php if (!empty($config['link3_name'])): ?>
                    <li class="fangda"><a href="<?php echo htmlspecialchars($config['link3_url']); ?>" target="_blank"><i class="iconfont icon-github icon"></i><span><?php echo htmlspecialchars($config['link3_name']); ?></span></a></li>
                    <?php endif; ?>
                    <?php if (!empty($config['link4_name'])): ?>
                    <li class="fangda"><a href="<?php echo htmlspecialchars($config['link4_url']); ?>" target="_blank"><i class="iconfont icon-jiankong icon"></i><span><?php echo htmlspecialchars($config['link4_name']); ?></span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <footer>
                  <?php echo htmlspecialchars($config['footer_content'] ?? '© 2023 我的网站'); ?>
                <?php if (!empty($config['icp_number'])): ?>
                <a href="https://beian.miit.gov.cn/" target="_blank"><?php echo htmlspecialchars($config['icp_number']); ?></a>
                <?php endif; ?>
            </footer>
        </div>
    </div>
</div>


    <!-- 自定义JS -->
    <?php if (!empty($config['custom_js'])): ?>
    <script>
        <?php echo $config['custom_js']; ?>
    </script>
    <?php endif; ?>
    <!-- 自定义body内容 -->
    <?php echo $config['custom_body'] ?? ''; ?>

</body></html>