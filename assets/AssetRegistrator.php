<?php
/**
 * Class Builder
 *
 * @author Constantin Chuprik <constantin@chuprik.com>
 */
namespace kotchuprik\xeditable\assets;

use yii\base\View;

class AssetRegistrator
{
    public static function register($type, View $view)
    {
        if ($type == 'select2') {
            Select2::register($view);
        }

        if ($type == 'datetime') {
            //@TODO DateTimePickerAsset::register($view);
        }

        if ($type == 'date') {
            //@TODO DatePickerAsset::register($view);
        }

        if ($type == 'typeaheadjs') {
            Typeahead::register($view);
        }

        if ($type == 'combodate') {
            //@TODO ComboDateAsset::register($view);
        }

        if ($type == 'wysihtml5') {
            //@TODO WysiHtml5Asset::register($view);
        }
    }
}
