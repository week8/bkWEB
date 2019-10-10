<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bkWEB/Public/assets/css/index.css">
    <link rel="icon" href="/bkWEB/Public/assets/images/web.ico" type="images/x-ico" />
    <title><?php echo ($title); ?></title>
</head>

<body class="home">
    <nav>
    <!-- <img src="/bkWEB/Public/assets/images/logo0918.jpg" alt=""> -->
    <h1>WEB <br> DEVELOPER</h1>
    <ul class="clearfix">
        <li><a class="home" href="<?php echo U('Home/Index/index');?>">HOME</a></li>
        <li><a class="skill" href="<?php echo U('Home/Index/skill');?>">SKILL</a></li>
        <li><a class="resume" href="<?php echo U('Home/Index/resume');?>">RESUME</a></li>
        <li><a class="other" href="<?php echo U('Home/Index/other');?>">OTHER</a></li>
    </ul>
    <p><?php echo ($motto); ?></p>
</nav>
<div class="m-header">
    <h1>WEB DEVELOPER</h1>
    <ul>
        <li><a class="home" href="<?php echo U('Home/Index/index');?>">HOME</a></li>
        <li><a class="skill" href="<?php echo U('Home/Index/skill');?>">SKILL</a></li>
        <li><a class="resume" href="<?php echo U('Home/Index/resume');?>">RESUME</a></li>
        <li><a class="other" href="<?php echo U('Home/Index/other');?>">OTHER</a></li>
    </ul>
</div>
    <section class="home-wrap">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <?php echo ($vo["id"]); ?>:<?php echo ($vo["name"]); ?><br/> -->
            <div class="content-list clearfix">
                <a href="<?php echo U('Home/Index/cssCollection');?>" class="img-box">
                    <img src="<?php echo ($vo["home_img"]); ?>" alt="">
                </a>
                <div>
                    <p class="title">
                        <a href="<?php echo U('Home/Index/cssCollection');?>"><?php echo ($vo["home_title"]); ?></a>
                    </p>
                    <p class="detail">
                        <span><?php echo ($vo["home_time"]); ?></span>
                        <a href="<?php echo U('Home/Index/cssCollection');?>"><?php echo ($vo["home_tag"]); ?></a>
                        <span>view: <?php echo ($vo["home_num"]); ?></span>
                    </p>
                    <p class="cont"><?php echo ($vo["home_cont"]); ?></p>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

        <!-- <div class="content-list clearfix">
            <a href="" class="img-box">
                <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
            </a>
            <div>
                <p class="title">
                    <a href="">标题</a>
                </p>
                <p class="detail">
                    <span>2019-09-18</span>
                    <a href="">js</a>
                    <span>view: 1</span>
                </p>
                <p class="cont">content content content content content content contentcontent content content content
                    content content content content content content contentcontent content content contentcontent content content content content content content
                    content content content contentcontent content content content content content contentcontent content content content
                    content content content content content content contentcontent content content content</p>
            </div>
        </div>
        <div class="content-list clearfix">
            <a href="" class="img-box">
                <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
            </a>
            <div>
                <p class="title">
                    <a href="">标题</a>
                </p>
                <p class="detail">
                    <span>2019-09-18</span>
                    <a href="">js</a>
                    <span>view: 1</span>
                </p>
                <p class="cont">content content content content content content contentcontent content content content</p>
            </div>
        </div>
        <div class="content-list clearfix">
            <a href="" class="img-box">
                <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
            </a>
            <div>
                <p class="title">
                    <a href="">标题</a>
                </p>
                <p class="detail">
                    <span>2019-09-18</span>
                    <a href="">js</a>
                    <span>view: 1</span>
                </p>
                <p class="cont">content content content content content content contentcontent content content content</p>
            </div>
        </div>
        <div class="content-list clearfix">
            <a href="" class="img-box">
                <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
            </a>
            <div>
                <p class="title">
                    <a href="">标题</a>
                </p>
                <p class="detail">
                    <span>2019-09-18</span>
                    <a href="">js</a>
                    <span>view: 1</span>
                </p>
                <p class="cont">content content content content content content contentcontent content content content</p>
            </div>
        </div>
        <div class="content-list clearfix">
            <a href="" class="img-box">
                <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
            </a>
            <div>
                <p class="title">
                    <a href="">标题</a>
                </p>
                <p class="detail">
                    <span>2019-09-18</span>
                    <a href="">js</a>
                    <span>view: 1</span>
                </p>
                <p class="cont">content content content content content content contentcontent content content content</p>
            </div>
        </div> -->
    </section>

        <script src="/bkWEB/Public/assets/js/jquery.min.js"></script>
    <script src="/bkWEB/Public/assets/js/index.js"></script>
</body>
</html>