<?php
namespace pointdnd\image;

use yii\web\AssetBundle;

/**
 * Widget asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@pointdnd/image/assets';
    /**
     * @inheritdoc
     */
    public $js = [
        'js/readFile.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
