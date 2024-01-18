<?php

namespace app\components\widgets;

use yii\base\Widget;

class ConfettiWidget extends Widget
{
public function run()
{
    return $this->render('confetti');
}
}