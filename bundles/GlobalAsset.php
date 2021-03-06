<?php
/**
 * @copyright Copyright (c) 2014 suxiaolin
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;

class GlobalAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets/global';

    /**
     * @var array depended packages
     */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'suxiaolin\make\bundles\CoreAsset',
        'suxiaolin\make\bundles\GlobalPluginAsset',
    ];
}