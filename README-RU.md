Yii2 uploadable and cropable image
==================================
Yii2 расширение для загрузки и кропа изображений

[![Latest Version](https://img.shields.io/github/release/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://github.com/elgorm/yii2-uploadable-cropable-image/releases)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/elgorm/yii2-uploadable-cropable-image/blob/master/LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://scrutinizer-ci.com/g/elgorm/yii2-uploadable-cropable-image)
[![Code Climate](https://img.shields.io/codeclimate/github/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://codeclimate.com/github/elgorm/yii2-uploadable-cropable-image)
[![Total Downloads](https://img.shields.io/packagist/dt/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://packagist.org/packages/elgorm/yii2-uploadable-cropable-image)

Установка
------------

Предпочтительно устанавливать расширение через [composer](http://getcomposer.org/download/).

Выполните в консоли

```
php composer.phar require --prefer-dist elgorm/yii2-uploadable-cropable-image "*"
```

или добавьте

```
"elgorm/yii2-uploadable-cropable-image": "*"
```

в секцию require вашего `composer.json` файла.


Использование
-----

Когда расширение установлено, его можно использовать таким образом:

В вашей модели:
```php
public function behaviors()
{
    return [
        [
            'class' => \elgorm\image\Behavior::className(),
            'savePathAlias' => '@web/images/',
            'urlPrefix' => '/images/',
            'crop' => true,
            'attributes' => [
                'avatar' => [
                    'savePathAlias' => '@web/images/avatars/',
                    'urlPrefix' => '/images/avatars/',
                    'width' => 100,
                    'height' => 100,
                ],
                'logo' => [
                    'crop' => false,
                    'thumbnails' => [
                        'mini' => [
                            'width' => 50,
                        ],
                    ],
                ],
            ],
        ],
    //другие поведения
    ];
}
```
Валидацию атрибута необходимо производить как обычно, через метод rules().

В вашем файле вида с формой:
```php
echo $form->field($model, 'avatar')->widget('elgorm\image\Widget');
```

Затем, в основном файле вида:
```php
echo Html::img($model->getImageUrl('avatar'));
echo Html::img($model->getImageUrl('logo', 'mini')); //получим url миниатюры под именем 'mini' для атрибута 'logo'
```

Если вы используете Advanced App Template и это поведение находится в backend модели, то вы можете во frontend модель
добавить трейт
```php
use \elgorm\image\GetImageUrlTrait
```
и использовать метод getImageUrl() и во frontend модели.
