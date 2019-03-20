<?php
namespace Modules\Cameo\Libs\Fields;
use Modules\Cameo\Libs\Classes\Field;

class ButtonField extends Field{
    protected $view = 'cameo::fields.button';
    public function __construct($attrs = [], $label = ''){
        $this->params['attrs'] = array_merge($this->params['attrs'],$attrs);
        $this->params['label'] = $label;
    }
}