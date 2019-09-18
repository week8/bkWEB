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

<body class="about">
    <nav>
    <img src="http://pic34.nipic.com/20131101/3347542_092847923000_2.jpg" alt="">
    <ul class="clearfix">
        <li><a class="home" href="<?php echo U('Home/Index/index');?>">HOME</a></li>
        <li><a class="about" href="<?php echo U('Home/Index/about');?>">SKILL</a></li>
        <li><a class="other" href="<?php echo U('Home/Index/other');?>">RESUME</a></li>
        <li><a class="person" href="<?php echo U('Home/Index/person');?>">OTHER</a></li>
    </ul>
</nav>
</body>
</html>