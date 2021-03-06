<?php
/**
 * @copyright Copyright (c) 2014 icron.org
 * @license http://yii2metronic.icron.org/license.html
 */

namespace icron\metronic;

use yii\web\AssetBundle;

class ColorGrayAsset extends AssetBundle
{
    public $sourcePath = '@icron/metronic/assets';

    public $css = [
        'css/plugins.css',
        'css/themes/gray.css',
    ];

    public $depends = [
        'icron\metronic\CoreAsset',
    ];
}
