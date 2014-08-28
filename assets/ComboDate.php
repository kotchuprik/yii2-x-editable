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
class ComboDate extends AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-x-editable/assets/files';

    public $js = [
        'combodate/moment.min.js',
    ];

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
