<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindWeekday.php";



    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get('/', function() use ($app)
    {
        return $app['twig']->render('index.html.twig');
    });

    $app->get('/result', function() use ($app)
    {
        $newFind = new FindWeekday($_GET['date'], $_GET['month'], $_GET['year']);
        var_dump($newFind);
        $day = $newFind->getWeekday();
      return $app['twig']->render('index.html.twig', array('result'=>$day));
    });



    return $app;
 ?>
