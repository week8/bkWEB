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
            <a href="">HOME</a><a href="">SKILL</a><a href="">CSS</a>
        </p>
        <div class="public-code-wrap">
            <div class="code-list">
                <p class="cw-title">css同时设置文字的描边和阴影</p>
                <div class="result-show">浅喜似苍狗，深爱如长风</div>
                <div class="code-show">
                    <p class="c-wrap">.result-show{</p>
                    <b class="c-cont">text-shadow: 3px 0px 0px #ddd, -3px 0px 0px #ddd, 0px 3px 0px #ddd, 0px -3px 0px #ddd, 0px 6px 2px #636363;</b>
                    <p class="c-wrap">}</p> 
                </div>
            </div>
            <div class="code-list">
                <p class="cw-title">css同时设置文字的描边和阴影</p>
                <div class="result-show">浅喜似苍狗，深爱如长风</div>
                <div class="code-show">
                    <p class="c-wrap">.result-show{</p>
                    <b class="c-cont">text-shadow: 3px 0px 0px #ddd, -3px 0px 0px #ddd, 0px 3px 0px #ddd, 0px -3px 0px #ddd, 0px 6px 2px #636363;</b>
                    <p class="c-wrap">}</p> 
                </div>
            </div>
        </div>
    </section>

        <script src="/bkWEB/Public/assets/js/jquery.min.js"></script>
    <script src="/bkWEB/Public/assets/js/index.js"></script>
</body>
</html>