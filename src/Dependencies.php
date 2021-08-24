<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

// $injector->alias('NoFrameWorkTutorial\Template\Renderer', 'NoFrameWorkTutorial\Template\MustacheRenderer');
// $injector->define('Mustache_Engine', [
//     ':options' => [
//         'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates/mustache', [
//             'extension' => '.html',
//         ]),
//     ],
// ]);
// $injector->alias('NoFrameWorkTutorial\Template\FrontendRenderer', 'NoFrameWorkTutorial\Template\FrontendMustacheRenderer');

// $injector->alias('NoFrameWorkTutorial\Template\Renderer', 'NoFrameWorkTutorial\Template\TwigRenderer');
// $injector->delegate('Twig_Environment', function () use ($injector) {
//     $loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/templates/twig');
//     $twig = new Twig_Environment($loader);
//     return $twig;
// });
// $injector->alias(\Twig\Environment::class, 'Twig_Environment');
// $injector->alias('NoFrameWorkTutorial\Template\FrontendRenderer', 'NoFrameWorkTutorial\Template\FrontendTwigRenderer');

$injector->alias('NoFrameWorkTutorial\Template\Renderer', 'NoFrameWorkTutorial\Template\PlatesRenderer');
$injector->delegate('Plates_Engine', function () use ($injector) {
    $plates = new \League\Plates\Engine(dirname(__DIR__) . '/templates/plates');
    return $plates;
});
$injector->alias(\League\Plates\Engine::class, 'Plates_Engine');
$injector->alias('NoFrameWorkTutorial\Template\FrontendRenderer', 'NoFrameWorkTutorial\Template\FrontendPlatesRenderer');

$injector->define('NoFrameWorkTutorial\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);
$injector->alias('NoFrameWorkTutorial\Page\PageReader', 'NoFrameWorkTutorial\Page\FilePageReader');
$injector->share('NoFrameWorkTutorial\Page\FilePageReader');

$injector->alias('NoFrameWorkTutorial\Menu\MenuReader', 'NoFrameWorkTutorial\Menu\ArrayMenuReader');
$injector->share('NoFrameWorkTutorial\Menu\ArrayMenuReader');

return $injector;