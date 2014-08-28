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
class WysiHtml5 extends AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-x-editable/assets/files';

    public $js = [
        'wysihtml5-bootstrap3/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'wysihtml5-bootstrap3/wysihtml5.js',
    ];

    public $css = [
        'wysihtml5-bootstrap3/bootstrap3-wysihtml5/bootstrap3-wysihtml5.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
