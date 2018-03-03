<?php
namespace pointdnd\image;

use yii\web\AssetBundle;

/**
 * Crop asset bundle.
 */
class CropAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@pointdnd/image/assets';
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
        'pointdnd\image\JcropAsset',
    ];
}
