<?php

class Controller extends CController
{
    public $title = '';

    public function redirect($route, $params = array())
    {
        $url = $this->createUrl($route, $params);
        Yii::app()->getRequest()->redirect($url, $params);
    }
}