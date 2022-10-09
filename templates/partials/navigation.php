<?php namespace ProcessWire; ?>

<nav id="main-navigation" class="main-navigation navigation">
    <ul class="navigation-container">
        <li class="navigation-item">
            <a href="<?php echo $pages->get('/')->url; ?>" class="navigation-link"><span>Home</span></a>
        </li>
        <?php echo $pages->get('/')->children->each(function ($child) {
            return "<li class='navigation-item" . ($child->id === wire('page')->id ? ' active' : '') . "'><a href='$child->url'>$child->title</a></li>";
        }); ?>
    </ul>
</nav>