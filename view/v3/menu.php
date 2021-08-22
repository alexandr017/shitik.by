<?php $url = preg_replace('/^\//', '', $_SERVER['PATH_INFO']); ?>
<nav class="menu">
    <span class="mob-menu-label">Меню</span>
    <div class="container">
        <ul class="menu-ul">
            <li class="menu-li link-to-home"><a href="/" class="menu-a"><span class="first-word">Shitik</span>.by</a></li>
            <?php if($url == 'alexandr-andreevich') : ?>
                <li class="menu-li active"><span class="icon icon-man"></span>О себе</li>
            <?php else : ?>
                <li class="menu-li"><a href="/alexandr-andreevich" class="menu-a <?php if($url == 'alexandr-andreevich') echo 'active'?>"><span class="icon icon-man"></span>О себе</a></li>
            <?php endif; ?>
            <?php if($url == 'blog') : ?>
                <li class="menu-li active"><span class="icon icon-blog"></span>Блог</li>
            <?php else : ?>
                <li class="menu-li"><a href="/blog" class="menu-a <?php if($url == 'blog') echo 'active'?>"><span class="icon icon-blog"></span>Блог</a></li>
            <?php endif; ?>
            <?php if($url == 'portfolio') : ?>
                <li class="menu-li active"><span class="icon icon-portfolio"></span>Портфолио</li>
            <?php else : ?>
                <li class="menu-li"><a href="/portfolio" class="menu-a <?php if($url == 'portfolio') echo 'active'?>"><span class="icon icon-portfolio"></span>Портфолио</a></li>
            <?php endif; ?>
            <?php if($url == 'travels') : ?>
                <li class="menu-li active"><span class="icon icon-travel"></span>Путешествия</li>
            <?php else : ?>
                <li class="menu-li"><a href="/travels" class="menu-a <?php if($url == 'travels') echo 'active'?>"><span class="icon icon-travel"></span>Путешествия</a></li>
            <?php endif; ?>
            <?php if($url == 'projects') : ?>
                <li class="menu-li active"><span class="icon icon-projects"></span>Свои проекты</li>
            <?php else : ?>
                <li class="menu-li"><a href="/projects" class="menu-a <?php if($url == 'projects') echo 'active'?>"><span class="icon icon-projects"></span>Свои проекты</a></li>
            <?php endif; ?>
            <?php if($url == 'library') : ?>
                <li class="menu-li active"><span class="icon icon-library"></span>Библиотека</li>
            <?php else : ?>
                <li class="menu-li"><a href="/library" class="menu-a <?php if($url == 'library') echo 'active'?>"><span class="icon icon-library"></span>Библиотека</a></li>
            <?php endif; ?>
            <?php if($url == 'stats') : ?>
                <li class="menu-li active"><span class="icon icon-stats"></span>Статистика</li>
            <?php else : ?>
                <li class="menu-li"><a href="/stats" class="menu-a <?php if($url == 'stats') echo 'active'?>"><span class="icon icon-stats"></span>Статистика</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>