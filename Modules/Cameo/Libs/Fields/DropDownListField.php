<?php
namespace Modules\Cameo\Libs\Fields;
use Modules\Cameo\Libs\Classes\Field;

class DropDownListField extends Field{
    protected $view = 'cameo::fields.dropdownlist';
    public function setDatas($datas = [], $default = ''){
        $this->params['datas'] = $datas;
        $this->params['default'] = $default;
    }
    
    public function setNullable($nullable){
        $this->params['nullable'] = $nullable;
    }
}