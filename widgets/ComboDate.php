<?php

/**
 * @author Marcio Camello <marciocamello@outlook.com>
 * @author Constantin Chuprik <constantin@chuprik.com>
 * @version 1.5.1
 */

namespace kotchuprik\xeditable\widgets;

class ComboDate extends XEditable
{

    /**
     * @see Xeditable
     * @var string
     * Type of input. select
     */
    public $type = 'combodate';

    /**
     * @see Xeditable
     * @var object
     * Configuration of combodate. Full list of options: http://vitalets.github.com/combodate/#docs
     */
    public $combodate = null;

    /**
     * @see XEditable
     * @var boolean|string
     * Whether to show clear button
     */
    public $clear = 'x clear';

    /**
     * @see XEditable
     * @var object
     * Configuration of datepicker. Full list of options: http://bootstrap-datepicker.readthedocs.org/en/latest/options.html
     */
    public $datepicker = '{ }';

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
     * Format used for sending value to server. Also applied when converting date from data-value attribute.
     * See list of tokens in momentjs docs
     */
    public $format = 'YYYY-MM-DD';

    /**
     * @see XEditable
     * @var string
     * Template used for displaying dropdowns.
     */
    public $template = 'D / MMM / YYYY';

    /**
     * @see XEditable
     * @var string
     * Format used for displaying date. Also applied when converting date from element's text on init.
     * If not specified equals to format
     */
    public $viewformat = null;

    /**
     * @see XEditable
     * @var string
     * HTML template of input. Normally you should not change it.
     */
    public $tpl = '<input type="text">';

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
        \kotchuprik\xeditable\assets\ComboDate::register($this->view);
    }
}
