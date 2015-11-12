<?php
namespace elgorm\image;

use yii\web\AssetBundle;

/**
 * Crop asset bundle.
 */
class CropAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@elgorm/image/assets';
    /**
     * @inheritdoc
     */
    public $js = [
        'js/jcrop.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'elgorm\image\JcropAsset',
    ];
}
