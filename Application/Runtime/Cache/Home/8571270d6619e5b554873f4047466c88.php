<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../../bkWEB/Public/assets/css/index.css">
    <link rel="icon" href="../../../../bkWEB/Public/assets/images/web.ico" type="images/x-ico" />
    <title><?php echo ($title); ?></title>
</head>

<body class="person">
    <nav>
    <ul>
        <li><a class="home" href="<?php echo U('Home/Index/index');?>">Index</a></li>
        <li><a class="about" href="<?php echo U('Home/Index/about');?>">About</a></li>
        <li><a class="other" href="<?php echo U('Home/Index/other');?>">Other</a></li>
        <li><a class="person" href="<?php echo U('Home/Index/person');?>">Person</a></li>
    </ul>
</nav>
</body>
</html>