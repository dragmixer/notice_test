<?php

class SiteController extends Controller
{
    public function actionIndex()
    {
        var_dump(Yii::app()->user);
        //die;
        if (Yii::app()->user->isGuest) {
            $this->redirect("site/login");
        }


        $this->render('index');
    }

    public function actionLogin()
    {
        $error = '';
        if (isset($_POST["auth"])) {
            if (User::auth($_POST["login"], $_POST["pass"]))
                Yii::app()->getRequest()->redirect(Yii::app()->user->returnUrl);
            else
                $error = User::$lastError;
        }
        $this->render('login', array('error' => $error));
    }
}