<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Call Center</title>
    <meta charset="utf-8" />
</head>
<body>

<div id="page">
    <div id="header">
        <div class="logo">
            <a id="logo" href="/">logo</a>
        </div>
        <div id="menu">
            <ul>
                <li >
                <?php if (Request::initial()->action() == 'projects'):?>
                    <a class="active" href="#" id='pmProject'>проекты</a>
                <?php else:?>
                    <a class="active" href="/" id='pmProject'>проекты</a>
                <?php endif;?>
                </li>
                <li>
                    <a href="/info">О нас</a>
                </li>
                <li>
                    <a href="/contact">контакты</a>
                </li>
            </ul>
        </div>
        <div class="right-logo"></div>
    </div>
    <!--content-->
    <div id="content">
        <?php if(isset($content))echo $content; ?>
    </div>
    <div id="footer">
        <div class="footer-right">&copy; <?= date('Y') . ' ' . 'Cutline. All rights reserved.' ?></div>
    </div>
</div>
</body>
</html>
