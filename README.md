Heroku Logger
===============

Simple logger for apps which used Heroku as cloud platform.

[![Latest Stable Version](https://poser.pugx.org/joni-jones/yii2-heroku-logger/v/stable)](https://packagist.org/packages/joni-jones/yii2-heroku-logger)
[![Total Downloads](https://poser.pugx.org/joni-jones/yii2-heroku-logger/downloads)](https://packagist.org/packages/joni-jones/yii2-heroku-logger)
[![License](https://poser.pugx.org/joni-jones/yii2-heroku-logger/license)](https://packagist.org/packages/joni-jones/yii2-heroku-logger)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist joni-jones/yii2-heroku-logger "*"
```

or add

```
"joni-jones/yii2-heroku-logger": "*"
```

to the require section of your `composer.json` file.

Usage
------------

1. Specify config for logging, for example:

    ```php
    'components' => [
        'log' => [
            'flushInterval' => 1,
            'targets' => [
                [
                    'class' => 'jones\herokulogger\HerokuTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'exportInterval' => 1,
                    'logVars' => []
                ],
            ],
        ]
    ]
    ```
2. Log as usually: `Yii::error('Some message', 'app')`.

License
----

MIT
