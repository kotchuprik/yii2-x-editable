<?php

/**
 * @author Marcio Camello <marciocamello@outlook.com>
 * @author Constantin Chuprik <constantin@chuprik.com>
 * @version 1.5.1
 */

namespace kotchuprik\xeditable;

use kotchuprik\xeditable\assets\Asset;
use yii\helpers\Json;

class Config extends \yii\base\Object
{
    const FORM_BOOTSTRAP3 = 'bootstrap3';
    const FORM_JQUERYUI = 'jqueryui';
    const FORM_PLAIN = 'plain';

    const POPUP = 'popup';
    const INLINE = 'inline';

    /**
     * @var string editable form engine: bootstrap, jqueryui, plain
     */
    public $form = self::FORM_BOOTSTRAP3;

    /**
     * @var string editable container type: popup or inline
     */
    public $mode = self::POPUP;

    /**
     * @var array defaults for editable configuration
     */
    public $defaults = array();

    public $view;

    /**
     * @see register default assets for extension
     *
     */
    public function registerDefaultAssets()
    {
        if (empty($this->defaults)) {
            $this->defaults = array();
        }
        if (empty($this->defaults['mode'])) {
            $this->defaults['mode'] = $this->mode;
        }

        $defaults = Json::encode($this->defaults);
        Asset::register($this->view);

        $this->view->registerJs("
		if($.fn.editable)
		$.extend(
			$.fn.editable.defaults , $defaults);
		");
    }
}
