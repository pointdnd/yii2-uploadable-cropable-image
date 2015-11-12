Yii2 uploadable and cropable image
==================================
Yii2 extension for upload and crop images

[![Latest Version](https://img.shields.io/github/release/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://github.com/elgorm/yii2-uploadable-cropable-image/releases)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/elgorm/yii2-uploadable-cropable-image/blob/master/LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://scrutinizer-ci.com/g/elgorm/yii2-uploadable-cropable-image)
[![Code Climate](https://img.shields.io/codeclimate/github/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://codeclimate.com/github/elgorm/yii2-uploadable-cropable-image)
[![Total Downloads](https://img.shields.io/packagist/dt/elgorm/yii2-uploadable-cropable-image.svg?style=flat-square)](https://packagist.org/packages/elgorm/yii2-uploadable-cropable-image)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist elgorm/yii2-uploadable-cropable-image "*"
```

or add

```
"elgorm/yii2-uploadable-cropable-image": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

In your model:
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
    //other behaviors
    ];
}
```
Use rules for validate attribute.

In your view file:
```php
echo $form->field($model, 'avatar')->widget('elgorm\image\Widget');
```

After, in your view:
```php
echo Html::img($model->getImageUrl('avatar'));
echo Html::img($model->getImageUrl('logo', 'mini')); //get url of thumbnail named 'mini' for 'logo' attribute
```

If you use Advanced App Template and this behavior attached in backend model, then in frontend model add trait
```php
use \elgorm\image\GetImageUrlTrait
```
and use getImageUrl() method for frontend model too.
