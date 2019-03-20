<?php
namespace Modules\Cameo\Libs\Fields;
use Modules\Cameo\Libs\Classes\Field;

class EditorField extends Field{
    protected $view = 'cameo::fields.editor';
    public function setValue($value){
        $this->params['value'] = $value;
    }
}