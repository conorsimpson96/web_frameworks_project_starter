<?php
namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class MainController
{
    /**
     * render the days page template
     */
    public function daysAction(Request $request, Application $app)
    {
        $days = array(
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        );

        $argsArray = [
            'days' => $days,
        ];

        $templateName = 'days';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * renders members page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function membersAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'members';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * renders projects page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function projectsAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'projects';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * renders the publications page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function publicationsAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'publications';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * renders home page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function indexAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * not found error page
     * @param \Silex\Application $app
     * @param             $message
     *
     * @return mixed
     */
    public static function error404(Application $app, $message)
    {
        $argsArray = [
            'name' => 'Fabien',
        ];
        $templateName = '404';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     *
     * if (!isset($blogPosts[$id])) {
     *  // generate a 404 error from within a controller...
     *  $app->abort(404, "Post $id does not exist.");
     * }
     */
}
