<?php

namespace allenaware\twentyfourseven;
use yii\web\AssetBundle;

    class TwentyFourSevenAsset extends AssetBundle {

        public $sourcePath = '@vendor/allenaware/yii2-twenty-four-seven-hours-picker/assets';
        public $css = [
            'css/twentyfourseven.css',
        ];

        public $js = [
            'js/twentyfourseven.js',
        ];

        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];

        public function init() {
            parent::init();
        }


    }
