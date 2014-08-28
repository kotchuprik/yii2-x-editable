<?php

/**
 * @author Marcio Camello <marciocamello@outlook.com>
 * @author Constantin Chuprik <constantin@chuprik.com>
 * @version 1.5.1
 */

namespace kotchuprik\xeditable\widgets;

class WysiHtml5 extends XEditable
{
    /**
     * @see XEditable
     * @var boolean
     * If true - html will be escaped in content of element via $.text() method.
     * If false - html will not be escaped, $.html() used.
     * When you use own display function, this option obviosly has no effect.
     */
    public $escape = true;

    /**
     * @see XEditable
     * @var string
     * CSS class automatically applied to input
     */
    public $inputclass = null;

    /**
     * @see XEditable
     * @var string
     * Placeholder attribute of input. Shown when input is empty.
     */
    public $placeholder = null;

    /**
     * @see XEditable
     * @var object
     * Wysihtml5 default options.
     * See https://github.com/jhollingworth/bootstrap-wysihtml5#options
     */
    public $wysihtml5 = '{stylesheets: false}';

    /**
     * @see XEditable
     * @var string
     * HTML template of input. Normally you should not change it.
     */
    public $tpl = '<textarea></textarea>';

    /**
     * @see Xeditable
     * @see Init extension default
     */
    public function init()
    {
        parent::init();
        $this->registerAssets();
    }

    /**
     * @see Xeditable
     * @see Init extension default
     */
    public function registerAssets()
    {
        \kotchuprik\xeditable\assets\WysiHtml5::register($this->view);
    }
}
