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

<body class="skill">
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
    <section class="skill-wrap">
        <p class="bread-nav">
            <a href="">HOME</a><a href="">SKILL</a>
        </p>
        <ul class="tab-item clearfix">
            <li class="act" onclick="getTab('all')">ALL</li>
            <li class="" onclick="getTab('html')">HTML/HTML5</li>
            <li class="" onclick="getTab('css')">CSS/CSS3</li>
            <li class="" onclick="getTab('javascript')">JAVASCRIPT</li>
        </ul>
        <div class="tab-cont">
            <div class="content-list clearfix J-javascript">
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
                    <p class="cont">content content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content content</p>
                </div>
            </div>
            <div class="content-list clearfix J-html">
                <a href="" class="img-box">
                    <img src="http://t247.web.ueeshop.com/u_file/1808/photo/f988fc3f66.jpg" alt="">
                </a>
                <div>
                    <p class="title">
                        <a href="">标题</a>
                    </p>
                    <p class="detail">
                        <span>2019-09-18</span>
                        <a href="">html</a>
                        <span>view: 1</span>
                    </p>
                    <p class="cont">content content content content content content contentcontent content content content</p>
                </div>
            </div>
            <div class="content-list clearfix J-javascript">
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
                    <p class="cont">content content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content contentcontent content content content content content contentcontent content content content</p>
                </div>
            </div>
            <div class="content-list clearfix J-javascript">
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
        </div>
    </section>

        <script src="/bkWEB/Public/assets/js/jquery.min.js"></script>
    <script src="/bkWEB/Public/assets/js/index.js"></script>
</body>
</html>