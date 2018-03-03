<?php
namespace pointdnd\image;

use yii\web\AssetBundle;

/**
 * Jcrop asset bundle.
 */
class JcropAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jcrop';
    /**
     * @inheritdoc
     */
    public $css = [
        'css/jquery.Jcrop.min.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'js/jquery.Jcrop.min.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'pointdnd\image\Asset',
    ];
}
