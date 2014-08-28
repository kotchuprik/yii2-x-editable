<?php

/**
 * @inheritdoc
 *
 * @author Marcio Camello <marciocamello@outlook.com>
 * @author Constantin Chuprik <constantin@chuprik.com>
 */

namespace kotchuprik\xeditable\assets;

use yii\web\AssetBundle;

/**
 * @inheritdoc
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-x-editable/assets/files';

    public $js = [
        'x-editable/bootstrap3-editable/js/bootstrap-editable.min.js',
    ];

    public $css = [
        'x-editable/bootstrap3-editable/css/bootstrap-editable.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
