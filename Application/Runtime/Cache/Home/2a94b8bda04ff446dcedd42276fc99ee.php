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
    <ul>
        <li><a class="home" href="<?php echo U('Home/Index/index');?>">Index</a></li>
        <li><a class="about" href="<?php echo U('Home/Index/about');?>">About</a></li>
        <li><a class="other" href="<?php echo U('Home/Index/other');?>">Other</a></li>
        <li><a class="person" href="<?php echo U('Home/Index/person');?>">Person</a></li>
    </ul>
</nav>

    <form class="home-form" action="">
        <input type="text" placeholder="请输入手机号">
        <input type="text" placeholder="请输入姓名">
        <input type="button" value="提交">
    </form>


    <script>
        /* (function(m, ei, q, i, a, j, s) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            j = ei.createElement(q),
                s = ei.getElementsByTagName(q)[0];
            j.async = true;
            j.charset = 'UTF-8';
            j.src = 'https://static.meiqia.com/dist/meiqia.js?_=t';
            s.parentNode.insertBefore(j, s);
        })(window, document, 'script', '_MEIQIA');
        _MEIQIA('entId', 144319);

        _MEIQIA('withoutBtn');

        function meiqia_fun() {
            console.log('测试');
            _MEIQIA('showPanel');
        } */
    </script>
</body>
</html>