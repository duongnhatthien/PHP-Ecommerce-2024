<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout("auth");
        return $this->render('login');

    }
    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return "Success";
            }
            var_dump($registerModel->errors);
            return $this->render(
                'register',
                [
                    'model' => $registerModel
                ]
            );
        }

        $this->setLayout("auth");
        return $this->render('register');
    }
}