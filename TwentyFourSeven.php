<?php

namespace allenaware\twentyfourseven;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
/**
 * This is just an example.
 * file:///Applications/XAMPP/xamppfiles/htdocs/2jupiter/frontend/runtime/tmp-extensions/yii2-twenty-four-seven-hours-picker
 */
class TwentyFourSeven extends InputWidget
{
    public $attribute = 'hours';
    public $value;
    public function run()
    {
        parent::run();
        $this->registerAssets();
        echo $this->renderInput();
    }
    public function registerAssets()
    {
        $view = $this->getView();
        TwentyFourSevenAsset::register($view);
    }
}
