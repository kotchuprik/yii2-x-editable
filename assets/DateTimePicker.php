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
class DateTimePicker extends AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-x-editable/assets/files';

    public $js = [
        'bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'
    ];

    public $css = [
        'bootstrap-datetimepicker/css/bootstrap-datetimepicker.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
