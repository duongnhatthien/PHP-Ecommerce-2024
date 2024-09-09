<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    // handle post request
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
    }
    // Render view
    public function contact()
    {
        return $this->render("contact");
    }
    public function home()
    {
        $params = [
            "name" => "Dương Nhất Thiên",
        ];
        return Application::$app->router->renderView("home", $params);
    }
}