<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>No Framework Tutorial</title>
        <link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="layout">
            <div id="menu">
                <div class="pure-menu">
                    <ul class="pure-menu-list">
                        <?php foreach ($menuItems as $item): ?>
                            <li class="pure-menu-item"><a href="<?= $this->e($item['href']) ?>" class="pure-menu-link"><?= $this->e($item['text']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div id="main">
                <div class="content">
                    <?= $this->section('content') ?>

                    <div class="footer">
                        <hr />
                        <p>Enviroment: <?= $this->e($enviroment) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
