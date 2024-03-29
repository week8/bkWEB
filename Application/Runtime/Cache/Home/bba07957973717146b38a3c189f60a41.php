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

<body class="other">
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
    <section class="other-wrap">
        <ul class="J-item">
            <li class="act">爪迹</li>
            <li>鸡汤</li>
        </ul>
        <p class="bread-nav">
            <a href="">HOME</a><a href="">OTHER</a>
        </p>
        <div class="other-cont J-cont">
            <div class="cont-box">
                <p>2019.09.18 开始改页面布局,改响应</p>
                <p>2019.09.19 修改页面.今天有个同事跟我说,写代码得本着自己看得懂,别人看得懂,以后好维护的原则去写,就像自己写的代码装着自己的成就感一样</p>
            </div>
            <div class="cont-box">
                <p>遇见最好的自己，然后狠狠拥抱你</p>
                <p>希望你可以努力到做任何事情都可以游刃有余</p>
                <p>运气也是实力的一部分</p>
                <p>愿你此生尽幸，赤诚善良；愿你所有快乐，无需假装</p>
                <p>你总是这样轻言放弃的话  无论过多久都只会原地踏步  -- 哆啦A梦</p>
                <p>无论知识有多新，项目有多难，只要来了什么姿势都要上</p>
                <p>你说前半生就这样吧，还有明天</p>
            </div>
        </div>
    </section>

        <script src="/bkWEB/Public/assets/js/jquery.min.js"></script>
    <script src="/bkWEB/Public/assets/js/index.js"></script>
</body>
</html>