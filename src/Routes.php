<?php declare(strict_types = 1);

return [
    ['GET', '/', ['NoFrameWorkTutorial\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['NoFrameWorkTutorial\Controllers\Page', 'show']],
];