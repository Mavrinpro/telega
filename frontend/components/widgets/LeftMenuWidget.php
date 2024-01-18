<?php


namespace app\components\widgets;


use yii\base\Widget;

class LeftMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('leftmenu');
    }
}