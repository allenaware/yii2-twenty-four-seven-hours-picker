Twenty four seven hours picker
==============================
A 24/7 hours picker  

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist allenaware/yii2-twenty-four-seven-hours-picker "dev-master"
```

or add

```
"allenaware/yii2-twenty-four-seven-hours-picker": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model,'time_slot')->widget(twentyfourseven\TwentyFourSeven::className(),['lang'=>'zh']) ?>
```
