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
class Typeahead extends AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-x-editable/assets/files';

    public $js = [
        'typeahead/typeahead.js',
        'typeahead/typeaheadjs.js',
    ];

    public $css = [
        'typeahead/typeahead.js-bootstrap.css',
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
