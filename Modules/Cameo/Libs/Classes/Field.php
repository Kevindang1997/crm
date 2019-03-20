<?php
namespace Modules\Cameo\Libs\Classes;
use Modules\Cameo\Libs\Interfaces\IField;

abstract class Field implements IField{
    protected $view = 'cameo::fields.';
    protected $params = [
        'attrs'=>[],
        'label'=>[],
        'group'=>'form-group'
    ];
    
    public function __construct($attrs = [], $label = []){
        $this->params['attrs'] = array_merge($this->params['attrs'],$attrs);
        $this->params['label'] = array_merge($this->params['label'],$label);
    }
    public function getView(){
        return view($this->view,['params'=>$this->params]);
    }
    
    public function render(){
        echo $this->getView()->render();
    }
    
    public function setWarning(){
        $this->params['group'] = 'form-group has-warning';
    }
    
    public function setError(){
        $this->params['group'] = 'form-group has-error';
    }
    
    public function setSuccess(){
        $this->params['group'] = 'form-group has-success';
    }
    
    public function setFeedback(){
        $this->params['group'] = 'form-group has-feedback';
    }
    
    public function setIcon($icon){
        $this->params['icon'] = $icon;
    }
    
    public function setHelpBlock($message){
        $this->params['helpBlock'] = $message;
    }
    
}
